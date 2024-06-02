<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all()->count();
        return view('admin.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        $product = Product::orderByDesc('created_at')->get();
        return view('admin.products.index', compact('product'));
    }
    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {
        $validate = request()->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string',
            'dosage' => 'required|string',
            'storage' => 'required|string',
            'composition' => 'required|string',
        ]);

        $product = new Product;
        $product->name = $validate['name'];
        $product->image = $validate['image'];
        $product->description = $validate['description'];
        $product->dosage = $validate['dosage'];
        $product->composition = $validate['composition'];
        $product->storage = $validate['storage'];

        if (!empty(request('image'))) {
            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('products/', $filename);
            $product->image = $filename;
        }

        $product->save();
        return redirect()->route('product')->with('success', 'successfully created');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $products = Product::where('slug', $slug)->first();
       return view('admin.products.edit', compact('products'));
    }

    public function update($slug)
    {
        $validate = request()->validate([
            'name' => 'string',
            'image' => 'image',
            'description' => 'string',
            'dosage' => 'string',
            'storage' => 'string',
            'composition' => 'string',
        ]);

        $product = Product::where('slug', $slug)->first();

        $product->name = $validate['name'];
        $product->description = $validate['description'];
        $product->dosage = $validate['dosage'];
        $product->storage = $validate['storage'];
        $product->composition = $validate['composition'];

        if (!empty(request('image'))) {

            if (!empty($product->image)) {
                unlink('products/' . $product->image);
            }

            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('products/', $filename);

            $product->image = $filename;
        }

        $product->save();

        return redirect()->route('product')->with('success', 'successfully updated');

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product')->with('success', 'successfully deleted');
    }

    public function show_contact(){
        $contact = Contact::where('id', 1)->first();
        return view('admin.contact.index', compact('contact'));
    }

    public function update_contact(){
        $meet = Contact::where('id', 1)->first();
        $meet->email = request('email');
        $meet->phone = request('phone');
        $meet->description = request('description');
        $meet->address = request('address');

        $meet->save();

        return redirect()->back()->with('success', 'contact is updated');
    }

    public function testimony()
    {
        $testimony = Testimony::orderByDesc('created_at')->get();
        return view('admin.testimony.index', compact('testimony'));
    }

    public function create_testimony()
    {
        return view('admin.testimony.create');
    }
    public function store_testimony()
    {
        $validate = request()->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'quote' => 'required|string',
        ]);

        $testimony = new Testimony;
        $testimony->name = $validate['name'];
        $testimony->image = $validate['image'];
        $testimony->quote = $validate['quote'];

        if (!empty(request('image'))) {
            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('testimonys/', $filename);
            $testimony->image = $filename;
        }

        $testimony->save();

        return redirect()->route('testimony')->with('success', 'successfully created');
    }


    // public function edit_testimony($id)
    // {
    //     $testimony = Testimony::where('id', $id)->first();
    //     return view('admin.testimony.edit', compact('testimony'));
    // }
    // public function update_testimony($id)
    // {
    //     $validate = request()->validate([
    //         'name' => 'string',
    //         'image' => 'image',
    //         'quote' => 'string',
    //     ]);

    //     $testimony = Testimony::where('id', $id)->first();
    //     $testimony->name = $validate['name'];
    //     $testimony->quote = $validate['quote'];

    //     if (!empty(request('image'))) {

    //         if(!empty($testimony->image)){
    //             unlink('testimonys/'.$testimony->image);
    //         }

    //         $file = request()->file('image');
    //         $filename = time() . '.' . $file->getClientOriginalName();
    //         $file->move('testimonys/', $filename);
    //         $testimony->image = $filename;
    //     }

    //     $testimony->save();

    //     return redirect()->route('testimony')->with('success', 'successfully updated');
    // }


    public function destroy_testimony(Testimony $testimony)
    {
        $testimony->delete();
        return redirect()->back()->with('success', 'successfully deleted');
    }


   public function login(){
    $contact = Contact::first();
    return view('auth.login',compact('contact'));
   }

   public function validates(){

    $validate = request()->validate([
        'email'=> 'required',
        'password'=> 'required|min:5'
       ]);

    if (Auth::attempt($validate)) {
        request()->session()->regenerate();
        return redirect()->route('admin')->with('success', 'Successfully logged in');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

   }

   public function register(){
    $contact = Contact::first();
    return view('auth.register',compact('contact'));
   }

   public function store_user(){

   $validate = request()->validate([
    'name'=> 'string|required',
    'email'=> 'required|unique:users,email',
    'password'=> 'required|min:5'
   ]);

   User::create([
    'name'=> $validate['name'],
    'email'=> $validate['email'],
    'password'=> Hash::make($validate['password']),
   ]);

   return redirect()->route('login')->with('success', 'user created successfully');
   }

   public function logout(Request $request)
   {
       Auth::logout();

       $request->session()->invalidate();
       $request->session()->regenerateToken();

       return redirect('/login')->with('success', 'Successfully logged out');
   }
    }
