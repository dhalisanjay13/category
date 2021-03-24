@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categor List</div>
                    <ul id="tree1">

                        @foreach($categories as $category)

                            <li>

                                {{ $category->name }} 
                                @if (auth()->user()->isAdmin())
                                    <a href="{{ route("add-product", ["id" => $category->id]) }}"><button type="button" class="btn btn-link">Add product</button></a>
                                
                                @endif

                                @if(count($category->childs))

                                    @include('category',['childs' => $category->childs])

                                @endif

                            </li>

                        @endforeach

                    </ul>
                </div>
        </div>
    </div>
</div>
@endsection
