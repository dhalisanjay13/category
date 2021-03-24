<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // Listing User Details
    public function userList()
    {
        $users = User::where('type', 'user')->get();
        return view('users', compact("users"));
    }

    //Admin Login as a user
    public function userLogin($id)
    {
        session()->put('admin-user', auth()->user()->id);
        auth()->loginUsingId($id);
        return redirect('home');
       
    }

    //Back to admin login
    public function adminLogin($id)
    {
        if(session()->get('admin-user')){
            auth()->loginUsingId(session()->get('admin-user'));
            session()->remove('admin-user');
            
        }
        return redirect('home');
    }

    //Add Product Category
    public function addCata()
    {
        $category = Category::all();
        return view('add-cat', compact("category"));
    }

    //List Product Category
    public function listCata()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('list-cat', compact("categories"));
    }

    //Save Product Category
    public function saveCata(Request $request)
    {
        $attributes = ['name' => $request->name];
        $values = ['name' => $request->name, 'parent_id' => $request->parent_id];
        $category = Category::create_or_update($attributes, $values);
        return redirect()->back();

    }

    //Add Product
    public function addProduct($id)
    {
        $category = Category::find($id);
        return view('add-product', compact("category"));

    }

    //List Product
    public function listProduct()
    {
        $products = Product::all();
        return view('list-product', compact("products"));
    }
    
    //Save Product
    public function saveProduct(Request $request)
    {
        $values = ['name' => $request->name, 'cat_id' => $request->cat_id];
        $category = Product::create_product($values);
        return redirect()->back();

    }

}
