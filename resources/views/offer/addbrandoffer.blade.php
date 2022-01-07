@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Project Offer</div>
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

                    <form action="/addbrandOffer" method="POST" enctype="multipart/form-data">
                        @csrf

                        <select name="Catogorie" class="form-select mb-3" aria-label="Default select example">
                            <option hidden selected>Select Category</option>
                            <option value="F & B">F & B</option>
                            <option value="Beauty">Beauty</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Appliances">Appliances</option>
                            <option value="Interior">Interior</option>
                            <option value="Health Care">Health Care</option>
                            <option value="Education">Education</option>
                            <option value="Art & Fitness">Art & Fitness</option>  
                        </select>

                        <div class="form-group mb-3">
                            <label for="name">Shop Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="Offer">Offer</label>
                            <input type="text" class="form-control" id="Offer" name="Offer">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Shop Logo</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>

                        <div class="form-group mb-3">
                            <label for="validity">Validity Of offer</label>
                            <input type="text" class="form-control" id="validity" name="validity">
                        </div>

                        <div class="form-group mb-3">
                            <label for="link">Location/Map Link</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection