@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Forms", "title" => "Create Product"])

<div class="grid grid-cols-1 gap-6">
     <!-- Alert Section -->
     @if(session('success'))
     <div id="dismiss-alert" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 rounded-md p-4" role="alert">
         <div class="flex items-center gap-3">
             <i class="i-tabler-circle-check text-xl"></i>
             <div class="flex-grow">
                 <div class="text-sm text-teal-800 font-medium">
                     {{ session('success') }}
                 </div>
             </div>
             <button data-hs-remove-element="#dismiss-alert" type="button" class="ms-auto h-8 w-8 rounded-full bg-default-200 flex justify-center items-center">
                 <i class="i-tabler-x text-xl"></i>
             </button>
         </div>
     </div>
 @endif
 
 @if(session('error'))
    <div id="dismiss-alert" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-red-50 border border-red-200 rounded-md p-4" role="alert">
        <div class="flex items-center gap-3">
            <i class="i-tabler-circle-x text-xl"></i>
            <div class="flex-grow">
                <div class="text-sm text-red-800 font-medium">
                    {{ session('error') }}
                </div>
            </div>
            <button data-hs-remove-element="#dismiss-alert" type="button" id="dismiss-test" class="ms-auto h-8 w-8 rounded-full bg-default-200 flex justify-center items-center">
                <i class="i-tabler-x text-xl"></i>
            </button>
        </div>
    </div>
@endif
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Add New Product</h4>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Nama Produk -->
                <div class="mb-3">
                    <label for="inputProductTitle" class="text-default-800 text-sm font-medium inline-block mb-2">Product Title</label>
                    <input type="text" class="form-input" id="inputProductTitle" name="title" placeholder="Enter Product Title" required/>
                </div>

                <!-- Sub Judul Produk -->
                <div class="mb-3">
                    <label for="inputSubtitle" class="text-default-800 text-sm font-medium inline-block mb-2">Sub-title</label>
                    <input type="text" class="form-input" id="inputSubtitle" name="subtitle" placeholder="Enter Sub-title" required/>
                </div>

                <!-- SKU -->
                <div class="mb-3">
                    <label for="inputSKU" class="text-default-800 text-sm font-medium inline-block mb-2">SKU</label>
                    <input type="text" class="form-input" id="inputSKU" name="sku" placeholder="Enter SKU" required/>
                </div>

                <!-- Deskripsi Produk -->
                <div class="mb-3">
                    <label for="inputDescription" class="text-default-800 text-sm font-medium inline-block mb-2">Description</label>
                    <textarea class="form-input" id="inputDescription" name="description" rows="4" placeholder="Enter Product Description" required></textarea>
                </div>

                <!-- Ukuran -->
                <!-- Ukuran dan Harga per Ukuran -->
    <div class="mb-3">
        <h3>Sizes and Prices</h3>
        <div class="mb-3" style="display: flex; gap: 10px; align-items: center;">
            <label for="sizes[S][stock]" style="width: 20%;">Size S</label>
            <input class="form-input" type="number" name="sizes[S][stock]" placeholder="Stock S" required min="0"/>
            <input class="form-input" type="number" name="sizes[S][price]" placeholder="Price S (Rp.)" required min="0"/>
        </div>
        <div class="mb-3" style="display: flex; gap: 10px; align-items: center;">
            <label for="sizes[M][stock]" style="width: 20%;">Size M</label>
            <input class="form-input" type="number" name="sizes[M][stock]" placeholder="Stock M" required min="0"/>
            <input class="form-input" type="number" name="sizes[M][price]" placeholder="Price M (Rp.)" required min="0"/>
        </div>
        <div class="mb-3" style="display: flex; gap: 10px; align-items: center;">
            <label for="sizes[L][stock]" style="width: 20%;">Size L</label>
            <input class="form-input" type="number" name="sizes[L][stock]" placeholder="Stock L" required min="0"/>
            <input class="form-input" type="number" name="sizes[L][price]" placeholder="Price L (Rp.)" required min="0"/>
        </div>
        <div class="mb-3" style="display: flex; gap: 10px; align-items: center;">
            <label for="sizes[XL][stock]" style="width: 20%;">Size XL</label>
            <input class="form-input" type="number" name="sizes[XL][stock]" placeholder="Stock XL" required min="0"/>
            <input class="form-input" type="number" name="sizes[XL][price]" placeholder="Price XL (Rp.)" required min="0"/>
        </div>
        
    </div>

                <!-- Cover Image -->
                <div class="mb-3">
                    <label for="coverImage" class="text-default-800 text-sm font-medium inline-block mb-2">Cover Image</label>
                    <input type="file" class="form-input" id="coverImage" name="cover_image" accept="image/*" required min="0"/>
                </div>
                <!-- Thumbnail Images (3 pcs) -->
                <div class="mb-3">
                    <label for="thumb_images[]" class="text-default-800 text-sm font-medium inline-block mb-2">Upload Thumbnails (3 Images)</label>
                    <input type="file"  class="form-input" name="thumb_images[]" accept="image/*" multiple required min="0"/>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn bg-primary text-white">Submit</button>
            </form>

        </div>
    </div>
</div>

@endsection

@section('script')

@endsection
