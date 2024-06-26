<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use App\Models\Income;
use App\Models\Investment;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Log;
use Redirect;
class AddFund extends Controller
{

  public function index(Request $request)
  {

  $user=Auth::user();
  $notes = Income::where('user_id',$user->id)->orderBy('id', 'DESC')->limit(10)->get();
  $totalPackage = Investment::where('user_id',$user->id)->where('status','Active')->sum("amount");
  $todaysRoi = Income::where('user_id',$user->id)->where('remarks','Trading Bonus')->where('ttime',Date("Y-m-d"))->sum("comm");
  $total = $totalPackage;
  $portion = $todaysRoi;
  if($totalPackage>0)
    {
          $percentage = ($portion / $total) * 100; // 20 
    }
    else
    {
    $percentage=0;    
    }
      


  $this->data['percentage'] = $percentage;
  $this->data['todaysRoi'] = $todaysRoi;
  $this->data['level_income'] = $notes;
  $this->data['page'] = 'user.fund.wallet';
  return $this->dashboard_layout();

  }


public function fundHistory(Request $request)
{

   
$this->data['page'] = 'user.fund.fundHistory';
return $this->dashboard_layout();

}





public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }

           $user=Auth::user();
                   
           $transaction['order_id'] = uniqid(); // invoice number
            $transaction['amountTotal'] = (FLOAT) $request->amount;
            $transaction['note'] = 'Transaction note';
           $transaction['buyer_name'] = $user->username;
           $transaction['user_id'] = $user->id;
            $transaction['buyer_email'] = $user->email;
            $transaction['redirect_url'] = url('user/AddFund?res=success'); // When Transaction was comleted
            $transaction['cancel_url'] = url('user/AddFund'); // When user click cancel link

           /*
           *   @required true
           *   @example first item
           */
           $transaction['items'][] = [
             'itemDescription' => 'Cryptoversal',
             'itemPrice' => (FLOAT) $request->amount, // USD
             'itemQty' => (INT) 1,
             'itemSubtotalAmount' => (FLOAT) $request->amount // USD
           ];

           $transaction['payload'] = [
             'foo' => [
                 'bar' => 'baz'
             ]
           ];

                $url_ = CoinPayment::generatelink($transaction);

            return Redirect::to($url_);

      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}

public function fundpass()
{
$this->data['page'] = 'user.fund.resetfundpas';
return $this->dashboard_layout();


}


}
