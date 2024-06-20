$(document).ready(function () {
    const apiUrl = "https://api.coingecko.com/api/v3/coins/markets";
    const currency = "usd";
    const apiParams = {
        vs_currency: currency,
        order: "market_cap_desc",
        per_page: 10,
        page: 1,
        sparkline: false
    };


    $.ajax({
        url: apiUrl,
        method: "GET",
        data: apiParams,
        success: function (data) {
            displayCryptoData(data);
        },
        error: function (error) {
            console.error("Error fetching data: ", error);
        }
    });

    function displayCryptoData(data) {
        const container = $("#crypto-container");
        data.forEach(crypto => {
            const changeClass = crypto.price_change_percentage_24h >= 0 ? 'off' : 'on';
            const cryptoCard = `
              
                <tr data-v-c079ad96="" data-v-cfc9a7fc="">
                <td data-v-c079ad96="" data-v-cfc9a7fc=""
                    style="display: flex; align-items: center;"><img data-v-c079ad96=""
                        data-v-cfc9a7fc=""
                        src="${crypto.image}" style="width:40px;height:40px"><span
                        data-v-c079ad96="" data-v-cfc9a7fc="" class="buyCoinName"
                        style="display: inline-block;">${crypto.name}<br data-v-c079ad96=""
                            data-v-cfc9a7fc=""><span data-v-c079ad96="" data-v-cfc9a7fc=""
                            class="sellCoinName"
                            style="color: rgba(255, 255, 255, 0.7);">USDT</span></span></td>
                <td data-v-c079ad96="" data-v-cfc9a7fc="">$${crypto.current_price.toFixed(2)}</td>
                <td data-v-c079ad96="" data-v-cfc9a7fc=""><var data-v-c079ad96=""
                        data-v-cfc9a7fc="" class="${changeClass}">${crypto.price_change_percentage_24h.toFixed(2)}%</var></td>
            </tr>
            `;
            container.append(cryptoCard);
        });
    }
});
