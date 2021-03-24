@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product List</div>

                <table class="table">
                    <thead>
                      <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Product Name</th>
                        <th scope="col">Category Name</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <tr>
                                    {{-- <th scope="row">1</th> --}}
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->category ? $product->category->name : ''}}<td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">Product Not found</td>
                            </tr>  
                        @endif
                       
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
