@extends('layouts.vertical', ['title' => 'Basic Tables'])

@section('css')

@endsection

@section('content')

@include("layouts.shared/page-title", ["subtitle" => "Apps", "title" => "Basic Tables"])

<div class="grid gap-6 mt-8">

    <div class="card overflow-hidden">
        <div class="card-header">
            <h4 class="card-title">Bordered Table</h4>
        </div>
        <div class="p-4">
            <div class="overflow-x-auto ">
                <table class="min-w-full divide-y divide-default-200 border border-collapse">
                    <thead>
                        <tr>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-start text-sm text-default-500">
                                Name</th>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-start text-sm text-default-500">
                                Title</th>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-start text-sm text-default-500">
                                Email</th>
                            <th scope="col" class="border border-default-200 px-6 py-3 text-end text-sm text-default-500">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-default-200">
                        <tr>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Lindsay Walton</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                Front-end Developer </td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                lindsay.walton@example.com</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Courtney Henry</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                Designer</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                courtneyhenry@example.com</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">
                                Tom Cook</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                Director of Product</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                tom.cook@example.com</td>
                            <td class="border border-default-200 px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <a class="text-primary hover:text-primary-700" href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end card -->

</div>

@endsection

@section('script')

@endsection