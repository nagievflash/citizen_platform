<?php

namespace App\Http\Controllers\Address;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \GuzzleHttp\Exception\GuzzleException;
use \GuzzleHttp\Client;

class SuggestController extends Controller
{
    public $region;
    public $client;
    public $request;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->region = 'Ямало-Ненецкий';
        $this->client = new \GuzzleHttp\Client([
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Token 77aeaa8c9e1cbd27364754f58690a47b9a399442',
                'verify' => false
            ]
        ]);
        $this->request = $request;
    }

    public function index($method)
    {
        switch($method) {
            case 'city':
                $this->getCity();
                break;
            case 'street':
                $this->getStreet();
                break;
        }
    }
    public function getCity() {
        $result = $this->client->request('POST', 'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address', [
            'body' => json_encode(
                [
                    'query' => $this->request->input('query'),
                    'locations' => array (
                        'region' => $this->region
                    ),
                    'from_bound' => array (
                        'value' => 'city'
                     ),
                    'to_bound' => array (
                        'value' => 'city'
                    ),
                    'count' => 10
                ]
            )
        ]);
        if ($result->getStatusCode() == 200) {
            return json_decode($result->getBody());
        }
    }

    public function getStreet() {
        $result = $this->client->request('POST', 'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address', [
            'body' => json_encode(
                [
                    'query' => $this->request->input('query'),
                    'locations' => array (
                        'region' => $this->region,
                        'city' => $this->request->input('city'),
                    ),
                    'from_bound' => array (
                        'value' => 'street'
                     ),
                    'to_bound' => array (
                        'value' => 'street'
                    ),
                    'count' => 10
                ]
            )
        ]);
        if ($result->getStatusCode() == 200) {
            return json_decode($result->getBody());
        }
    }
}
