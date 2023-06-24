<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function product(){
        return  view("modules.products.index");
    }
    public function onlineSales(){
        return  view("modules.onlinesales.index");
    }
    public function physicalSales(){
        return  view("modules.physicalsales.index");
    }
    public function userProfile(){
        return  view("components.user-profile");
    }
}