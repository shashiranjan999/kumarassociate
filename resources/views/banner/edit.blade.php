@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Banner</div>
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
                        @if($banner->status==1)
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="status" name="status" checked>
                            <label class="form-check-label" for="status">
                            Status
                            </label>
                        </div>
                        @else
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="0" id="status" name="status">
                            <label class="form-check-label" for="status">
                            Status
                            </label>
                        </div>
                        @endif
                        <div class="form-group mb-3">
                            <label for="name">position of Banner</label>
                            <input type="number" class="form-control" id="position" name="position" value="{{$banner->position}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection