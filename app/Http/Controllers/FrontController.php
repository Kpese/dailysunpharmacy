<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
   public function index(){
    $contact = Contact::first();
    $testimony = Testimony::orderByDesc('created_at')->get();
    $product = Product::orderByDesc('created_at')->limit(5)->get();
    return view('front.index', compact('contact', 'testimony', 'product'));
   }

   public function store(){
    $contact = Contact::first();
    $product= Product::latest()->paginate(5);
    return view('front.shop',compact('contact', 'product'));
   }

   public function single_store($slug){
    $contact = Contact::first();
    $product= Product::where('slug', $slug)->first();
    return view('front.shop-single',compact('contact', 'product'));
   }

   public function about(){
    $contact = Contact::first();
    return view('front.about',compact('contact'));
   }

}
