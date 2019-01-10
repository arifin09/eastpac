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
        data_client(SiteConfig::config('ETHEREUM_ADDRESS'));
        // data_client('http://192.168.0.133:3333/');
    }
}
