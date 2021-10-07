<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Models\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
            
        $clients = Client::all();

        $products = [
            [
                'id' => 1,
                'name' => 'Tablet',
                'value' => '3.400',
            ],
            [
                'id' => 2,
                'name' => 'TV',
                'value' => '4000',
            ]
        ];

        return response()->json([
            'status' => true,
            'msg' => 'test',
            'clients' => $clients,
            'products' => $products,
        ]);
    }
}
