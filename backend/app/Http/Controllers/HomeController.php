<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
            
        $clients = [
            [
                'id' => 1,
                'name' => 'José Da Silva',
                'email' => 'jose@mail.com',
            ],
        ];

        $products = [
            [
                'id' => 1,
                'name' => 'Tablet',
                'value' => '3.400',
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
