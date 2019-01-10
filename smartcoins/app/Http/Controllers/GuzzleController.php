<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\SiteConfig;
use GuzzleHttp;

class GuzzleController extends Controller
{

    public function index()
    {
        // data_client(SiteConfig::config('ETHEREUM_ADDRESS'));
        // sent_transaction('http://192.168.100.207:3335/');
        getEthPrice('https://sandbox-api.coinmarketcap.com');
    }
}
