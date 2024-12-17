@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Forms", "title" => "Layout"])

<div class="grid grid-cols-1 gap-6">
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Basic Example</h4>

            <form>
                <div class="mb-3">
                    <label for="inputProductTitle" class="text-default-800 text-sm font-medium inline-block mb-2">Product Titles</label>
                    <input type="text" class="form-input" id="InputTitle" placeholder="Enter Product Title">
                </div>
                <div class="mb-3">
                    <label for="inputSubtitle" class="text-default-800 text-sm font-medium inline-block mb-2">Sub-title</label>
                    <input type="text" class="form-input" id="inputSubtitle" placeholder="Enter Sub-title Product">
                </div>
                <div class="mb-3">
                    <label for="inputSKU" class="text-default-800 text-sm font-medium inline-block mb-2">SKU</label>
                    <input type="text" class="form-input" id="inputSKU" placeholder="Enter SKU">
                </div>
                <div class="mb-3">
                    <label for="exampleInputImage" class="text-default-800 text-sm font-medium inline-block mb-2">Cover image</label>

                    <div data-hs-file-upload='{
                                        "url": "/upload",
                                        "extensions": {
                                          "default": {
                                            "class": "shrink-0 size-5"
                                          },
                                          "xls": {
                                            "class": "shrink-0 size-5"
                                          },
                                          "zip": {
                                            "class": "shrink-0 size-5"
                                          },
                                          "csv": {
                                            "icon": "<i class=\"i-tabler-file-code\"></i>",
                                            "class": "shrink-0 size-5"
                                          }
                                        }
                                      }'>
                        <template data-hs-file-upload-preview="">
                            <div class="p-3 bg-white border border-solid border-default-300 rounded-xl">
                                <div class="mb-1 flex justify-between items-center">
                                    <div class="flex items-center gap-x-3">
                                        <span class="size-10 flex justify-center items-center border border-default-200 text-default-500 rounded-lg" data-hs-file-upload-file-icon="">
                                            <img class="rounded-lg hidden" data-dz-thumbnail="">
                                        </span>
                                        <div>
                                            <p class="text-sm font-medium text-default-800">
                                                <span class="truncate inline-block max-w-[300px] align-bottom" data-hs-file-upload-file-name=""></span>.<span data-hs-file-upload-file-ext=""></span>
                                            </p>
                                            <p class="text-xs text-default-500" data-hs-file-upload-file-size="">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-x-2">
                                        <button type="button" class="text-default-500 hover:text-default-800 focus:outline-none focus:text-default-800" data-hs-file-upload-remove="">
                                            <i class="i-tabler-trash size-4 shrink-0"></i>
                                        </button>
                                    </div>
                                </div>
        
                                <div class="flex items-center gap-x-3 whitespace-nowrap">
                                    <div class="flex w-full h-2 bg-default-200 rounded-full overflow-hidden" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-hs-file-upload-progress-bar="">
                                        <div class="flex flex-col justify-center rounded-full overflow-hidden bg-primary-600 text-xs text-white text-center whitespace-nowrap transition-all duration-500 hs-file-upload-complete:bg-green-500" style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
                                    </div>
                                    <div class="w-10 text-end">
                                        <span class="text-sm text-default-800">
                                            <span data-hs-file-upload-progress-bar-value="">0</span>%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </template>
        
                        <div class="cursor-pointer p-12 flex justify-center bg-white border border-dashed border-default-300 rounded-xl" data-hs-file-upload-trigger="">
                            <div class="text-center">
                                <span class="inline-flex justify-center items-center size-16 bg-default-100 text-default-800 rounded-full">
                                    <i class="i-tabler-upload size-6 shrink-0"></i>
                                </span>
        
                                <div class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-default-600">
                                    <span class="pe-1 font-medium text-default-800">
                                        Drop your file here or
                                    </span>
                                    <span class="bg-white font-semibold text-primary hover:text-primary-700 rounded-lg decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-600 focus-within:ring-offset-2">browse</span>
                                </div>
        
                                <p class="mt-1 text-xs text-default-400">
                                    Pick a file up to 2MB.
                                </p>
                            </div>
                        </div>
        
                        <div class="mt-4 space-y-2 empty:mt-0" data-hs-file-upload-previews=""></div>
                    </div>
                </div>
              
                
                <button type="submit" class="btn bg-primary text-white">Submit</button>
            </form>

        </div>
    </div>

   
</div>

@endsection

@section('script')

@endsection