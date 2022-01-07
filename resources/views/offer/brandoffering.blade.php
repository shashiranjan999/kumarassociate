@extends('layouts.app')

@section('content')
<div class="container">


<a style="margin-bottom:20px;font-size:20px" href="/add-brand-offer" class="btn btn-primary">Add Brand Offering</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Catogories</th>
      <th scope="col">Shop Name</th>
      <th scope="col">Offer</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($brandoffers as $brandoffer)
    <tr>
      <th scope="row">{{$brandoffer->id}}</th>
    
      <td>{{$brandoffer->category}}</td>
      <td>{{$brandoffer->shop_name}}</td>
      <td>{{$brandoffer->offer}}</td>
      
      <td><a href="/brand-offer/{{$brandoffer->id}}" class="btn btn-primary">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    
</div>
@endsection
