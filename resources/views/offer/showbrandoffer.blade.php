@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
          
            <h2>{{$brandoffer->category}}</h2>
        </div>
        <div class="card-body">
           <img style="margin-bottom:10px" height="200px" width="200px" src="{{asset('images/'.$brandoffer->shoplogo)}}" alt="Second slide">
            <p class="card-text"><span style="font-weight:bold">Shop Name: </span>{{$brandoffer->shop_name}}</p>
            <p class="card-text"><span style="font-weight:bold">Offer: </span>{{$brandoffer->Offer}}</p>
            <p class="card-text"><span style="font-weight:bold">Address: </span>{{$brandoffer->address}}</p>
            <p class="card-text"><span style="font-weight:bold">Validity: </span>{{$brandoffer->validity}}</p>
            <p class="card-text"><span style="font-weight:bold">Map Link: </span>{{$brandoffer->map_link}}</p>
            <p class="card-text"><span style="font-weight:bold">Contact: </span>{{$brandoffer->contact}}</p>
        </div>
        <div class="card-footer text-muted">
            <a style="margin-bottom:10px" href="/project-offer/{{$brandoffer->id}}/edit" class="btn btn-outline-primary">Edit Project Offer</a>
            <form id="delete-frm" class="" action="" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-danger">Delete Project Offer</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection