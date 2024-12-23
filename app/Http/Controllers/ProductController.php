<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Method untuk menyimpan produk
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'sku' => 'required|string|max:50',
        'description' => 'required|string',
        'sizes' => 'required|array', // Validasi array sizes
        'sizes.*.stock' => 'required|integer|min:0',
        'sizes.*.price' => 'required|numeric|min:0',
        'cover_image' => 'required|image|max:2048',
        'thumb_images.*' => 'required|image|max:2048',
    ]);

    // Simpan cover image
    $coverImagePath = $request->file('cover_image')->store('images/covers', 'public');

    // Simpan thumbnail images
    $thumbImagePaths = [];
    if ($request->hasFile('thumb_images')) {
        foreach ($request->file('thumb_images') as $thumbImage) {
            $thumbImagePaths[] = $thumbImage->store('images/thumbs', 'public');
        }
    }

    // Simpan produk ke database
    $product = Product::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'sku' => $request->sku,
        'description' => $request->description,
        'sizes' => json_encode($request->sizes), // Menyimpan array ukuran dalam format JSON
        'cover_image' => $coverImagePath,
        'thumb_images' => json_encode($thumbImagePaths), // Menyimpan thumbnail images sebagai JSON
    ]);

    // Redirect dengan pesan sukses
    return redirect()->back()->with('success', 'Product added successfully!');
}
    
}
