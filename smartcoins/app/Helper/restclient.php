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

}
