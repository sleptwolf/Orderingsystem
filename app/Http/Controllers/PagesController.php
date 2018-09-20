<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Momo;
use App\Noodles;
use App\Soup;


class PagesController extends Controller
{
    public function getIndex() {
        return view('Pages.index');
    }

    public function getCookPage() {
        return view('Pages.cookpage');
    }

    public function getWaiterPage() {
        return view('Pages.waiterpage');
    }

    public function getMenu($table) {
        $tableno = $table;
        return view('includes.menu',['tableno'=> $tableno]);
    }

    public function placeOrder(Request $req) {
        $Momo = Momo::create(array(
            'quantity' => $req->input('momoCount'),
            'table_no' => $req->input('table_no')            
        ));
        $Noodles = Noodles::create(array(
            'quantity' => $req->input('momoCount'),
            'table_no' => $req->input('table_no')            
        ));
        $Soup = Soup::create(array(
            'quantity' => $req->input('momoCount'),
            'table_no' => $req->input('table_no')            
        ));        
        return redirect()->route('waiterpage');
    }
}
