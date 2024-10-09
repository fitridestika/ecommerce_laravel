<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.admin.product.index', compact('products'));
    }
    public function create()
    {
        return view('pages.admin.product.create');
    }
    public function store(Request $request) {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);
    
        if ($validation->fails()) {
            Alert::error('Gagal', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validation)->withInput();
        }
    
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        }
    
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image' => $imageName,
        ]);
    
        if ($product) {
            Alert::success('Berhasil', 'Produk berhasil ditambahkan!');
            return redirect()->route('admin.product.index');
        }
    
        return redirect()->back()->with('error', 'Produk gagal ditambahkan!');
    }

}
