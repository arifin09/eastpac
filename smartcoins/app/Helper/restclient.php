<?php
if (!function_exists('data_client'))
{
    function data_client($base_uri)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);
        // 127.0.0.1:7545
        $response = $client->get('api/create-wallet',[
            GuzzleHttp\RequestOptions::JSON => [
                'upw' => 'dirahasiakan aja',
            ]
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        return $response;;
    }

    function sent_transaction($base_uri)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);
        // 127.0.0.1:7545
        $response = $client->get('api/send-transaction',[
            GuzzleHttp\RequestOptions::JSON => [
                'pk' => '0x3849EDC00DF9765B372E5AE7E9A6DAC75860B411389881CD57682A0148E56170',
                "to" => "0xb2a122ed4A1903fe3FF587A13Cb8A95a052851aA",
                "ethvalue" => "0.05"
            ]
        ]);
        // {
        //     "pk":"0x3849EDC00DF9765B372E5AE7E9A6DAC75860B411389881CD57682A0148E56170",
        //     "to":"0xb2a122ed4A1903fe3FF587A13Cb8A95a052851aA",
        //     "ethvalue":"1.00"
        // }
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        return $response;
    }

    function getEthPrice($base_uri)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);
        // 127.0.0.1:7545
        $response = $client->get('v1/tools/price-conversion?amount=1&symbol=ETH&time=2018-12-22T06:04:02.000Z&convert=USD',[
            'headers' => ['X-CMC_PRO_API_KEY' => 'b8552ff8-30a7-4cfc-9bab-d462687e8be4'],
        ]);
        $response = $response->getBody()->getContents();
        // echo '<pre>';
        // print_r($response);
        // dd(json_decode($response));
        return $response;
    }

}
