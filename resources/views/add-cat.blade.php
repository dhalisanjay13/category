@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Catagory</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save-cat') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="name" class="form-control" type="text" name="name" required >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parent_id" class="col-md-4 col-form-label text-md-right">Parent Catagory</label>
                            <div class="col-md-6">
                                <select name='parent_id' class="form-control" >
                                    <option value="">Select</option>
                                    @foreach ($category as $row)
                                        <option value='{{{ $row->id }}}'>{{{ $row->name }}}</option>
                                    @endforeach
                                </select>
                                
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
