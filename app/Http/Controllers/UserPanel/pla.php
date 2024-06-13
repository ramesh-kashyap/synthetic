<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pla extends Controller
{
     

    public function package(Request $request)
    {
        $notes= DB::table('plans')->get();

         $this->data['data'] =  $notes;
         $this->data['page'] = 'user.invest.strategy';
         return $this->admin_dashboard();


    }


}
