<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;
use App\Table;
use App\Order;


class PagesController extends Controller
{
    public function getIndex() {
        return view('Pages.index');
    }

    //Add new menu
    public function add_menu() {
        return view('Pages.menu_form');
    }

    //insert menu into menu
    public function insert_menu(Request $req) {
        //for this to work the field name of the form and DB should be same.
        Menu::create($req->all());
        return view('Pages.menu_form');
    }

    //show current menus
    public function show_menu() {
        $Menus = Menu::all();
        return view('Pages.display_menu', compact('Menus'));
    }

    //show tables
    public function show_tables() {
        return view('Pages.show_tables');
    }

    public function show_menu_order($table_no) {
        // dd($table_no);
        $Menus = Menu::all();
        return  view('Pages.table_order', compact('Menus', 'table_no'));
    }

    public function place_order(Request $req) {
        for($i = 0; $i < count($req->item); $i++) {
            //getting data from form
            $order_item = $req->item[$i];
            $order_item_qty = $req->qty[$i];

            //getting table id
            $order_table = DB::table('tables')->select('id')->where('table_no', $req->table_no)->get();
            // dd($order_table[0]->id);

            //getting price and category of item from menus table
            $order_item_category = DB::table('menus')->select('category')->where('item', $order_item)->get();
            $order_item_price_per_unit = DB::table('menus')->select('price')->where('item', $order_item)->get();
            
            DB::table('orders')->insert([
                'item' => $order_item,
                'quantity' => $order_item_qty,
                'category' => $order_item_category[0]->category,
                'price' => $order_item_price_per_unit[0]->price,
                'status' => false,
                'table_id' => $order_table[0]->id
            ]);
        }
        return redirect()->back(); 
    }

    public function show_orders() {
        $orders = DB::table('orders')->get();
        return view('Pages.cook_page', ['orders' => $orders]);
    }

    public function table_manage() {
        $tables = DB::table('tables')->get();
        return view('Pages.table_manage', ['tables' => $tables]);
    }

    public function add_new_table() {
        return null;
    }

    public function complete_order(Request $req) {
        DB::table('orders')->where('id', $req->order_id)->update(['status' => true]);
        return redirect()->back(); 

    }
}
