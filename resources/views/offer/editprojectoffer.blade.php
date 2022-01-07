@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Project Offer</div>
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

                    <form action="" method="POST" enctype="multipart/form-data">
                        
                    @csrf
                    @method('PUT')
                        <select name="projectName" class="form-select mb-3" aria-label="Default select example">
                            <option hidden selected>{{$projectoffer->property_name}}</option>
                            <option value="KUMAR PALAASH">KUMAR PALAASH</option>
                            <option value="KUMAR PEBBLE PARK">KUMAR PEBBLE PARK</option>
                            <option value="KUMAR PALMGROVE">KUMAR PALMGROVE</option>
                            <option value="KUMAR PICCADILLY">KUMAR PICCADILLY</option>
                            <option value="KUMAR PALMCREST">KUMAR PALMCREST</option>
                            <option value="KUMAR PAPILLION">KUMAR PAPILLION</option>
                            <option value="KUMAR SAMRUDDHI">KUMAR SAMRUDDHI</option>
                        </select>

                        <select name="Catogorie" class="form-select mb-3" aria-label="Default select example">
                            <option hidden selected>{{$projectoffer->category}}</option>
                            <option value="Medical Store">Medical Store</option>
                            <option value="Kirana Store">Kirana Store</option>
                            <option value="Vegetable + Fruits Store">Vegetable + Fruits Store</option>
                            <option value="Pathology Lab">Pathology Lab</option>
                            <option value="Schools/Day Care">Schools/Day Care</option>
                            <option value="Cake Shops">Cake Shops</option>
                            <option value="Yoga Class">Yoga Class</option>
                            <option value="Dance Studio">Dance Studio</option>
                            <option value="Parlour Services">Parlour Services</option>
                        </select>

                        <div class="form-group mb-3">
                            <label for="name">Shop Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$projectoffer->shop_name}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="Offer">Offer</label>
                            <input type="text" class="form-control" id="Offer" name="Offer" value="{{$projectoffer->offer}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="image">Shop Logo</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$projectoffer->address}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="validity">Validity Of offer</label>
                            <input type="text" class="form-control" id="validity" name="validity" value="{{$projectoffer->validity}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="link">Location/Map Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{$projectoffer->map_link}}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="contact">Contact</label>
                            <input type="text" class="form-control" id="contact" name="contact" value="{{$projectoffer->contact}}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection