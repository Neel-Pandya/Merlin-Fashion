<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function create()
    {
        return view('index');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function products_edit()
    {
        return view('pages.edit_products');
    }
    public function products_update(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_category' => 'required',
            'product_for' => 'required',
            'product_size' => 'required|alpha',
            'product_image' => 'mimes:jpg,png',

        ]);
    }
    public function products_add()
    {
        return view('pages.product_add');
    }

    public function product_store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_category' => 'required',
            'product_for' => 'required',
            'product_size' => 'required|alpha',
            'product_image' => 'required|mimes:jpg,png',

        ]);
    }

    public function products_purchase()
    {
        return view('pages.purchased_products');
    }

    public function category_create()
    {
        return view('pages.category_available');
    }
    public function category_add()
    {
        return view('pages.category_add');
    }
    public function category_store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',

        ]);
    }

    public function category_edit()
    {
        return view('pages.category_edit');
    }
    public function category_update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',

        ]);
    }
    public function customer_create()
    {
        return view('pages.customer_details');
    }
    public function customer_add()
    {
        return view('pages.customer_add');
    }

    public function customer_store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'customer_gender' => 'required',
            'customer_number' => 'required|numeric|digits:10',
            'customer_profile' => 'required|mimes:jpg,png',

        ]);
    }
    public function customer_edit()
    {
        return view('pages.customer_edit');
    }
    public function admin_edit()
    {
        return view('pages.admin_edit');
    }

    public function admin_update(Request $request)
    {
        $request->validate([
            'admin_name' => 'required',
            'admin_email' => 'required|email',

            'admin_profile' => 'required|mimes:jpg,png',

        ]);
    }

    public function change_password()
    {
        return view('pages.change_password');
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',

            'new_password_confirmation' => 'required',

        ]);
    }
    public function shoes()
    {
        return view('pages.shoes');
    }
    public function jeans()
    {
        return view('pages.jeans');
    }
    public function hoodie()
    {
        return view('pages.hoodie');
    }
    public function shirt()
    {
        return view('pages.shirt');
    }

    public function products_female()
    {
        return view('pages.product_female');
    }

    public function products_male()
    {
        return view('pages.products_male');
    }
    public function rate(){
        return view('pages.rating'); 
    }

    public function login(Request $request){
            $request->validate([
                'email' => 'required|email', 
                'password' => 'required'
            ]);
    }

    public function coupen_available(){
        return view('pages.coupen'); 
    }
    public function coupen_add(){
        return view('pages.coupen_add'); 
    }
    public function coupen_used(){
        return view('pages.coupen_store'); 
    }
    public function coupen_store(Request $request){
            $request->validate([
                    'coupen_name' => 'required', 
                    'coupen_price' => 'required|numeric', 
                    'coupen_expire_date' => 'required',
                    'coupen_discount' => 'required'
            ]);
    }

    public function coupen_edit(){
        return view('pages.coupen_edit'); 
    }

    public function coupen_update(Request $request){
        $request->validate([ 
            'coupen_price' => 'required|numeric', 
            'coupen_expire_date' => 'required',
            'coupen_discount' => 'required'
    ]);


    }

    public function coupen_use(){
        return view('pages.coupen_used'); 
    }

    
}