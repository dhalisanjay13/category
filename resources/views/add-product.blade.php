@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save-product') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="cat_name" class="col-md-4 col-form-label text-md-right">Catagory Name</label>
                            <div class="col-md-6">
                                <input id="cat_name" class="form-control" type="text" name="cat_name" readonly value="{{$category->name}}" >
                                <input id="cat_id" class="form-control" type="hidden" name="cat_id"  value="{{$category->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Product Name</label>
                            <div class="col-md-6">
                                <input id="name" class="form-control" type="text" name="name" required >
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
