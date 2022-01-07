@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Banner</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="/add-banner" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="address">Upload Home Banner</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="status" name="status">
                            <label class="form-check-label" for="status">
                            Status
                            </label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">position of Banner</label>
                            <input type="number" class="form-control" id="position" name="position">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($banners as $banner)
        <div class="col-sm mb-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('images/'.$banner->image)}}" alt="Banner Image">
                <div class="card-body">
                    @if($banner->status==0)
                    <h5 class="card-title">Status:False</h5>
                    @else
                    <h5 class="card-title">Status:True</h5>
                    @endif
                    <h5 class="card-title">Position:{{$banner->Position}}</h5>
                   
                    <a href="/banner/{{$banner->id}}/edit" class="btn btn-outline-primary mb-2">Edit Banner</a>
                    <form id="delete-frm" action="/banner/delete/{{$banner->id}}" method="POST">
                   
                       @csrf
                       <button type="submit" class="btn btn-outline-danger">Delete Banner</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection