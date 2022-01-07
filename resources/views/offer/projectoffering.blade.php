@extends('layouts.app')

@section('content')
<div class="container">


<a style="margin-bottom:20px;font-size:20px" href="/add-project-offer" class="btn btn-primary">Add Project Offering</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Project Name</th>
      <th scope="col">Catogories</th>
      <th scope="col">Shop Name</th>
      <th scope="col">Offer</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($projectoffers as $projectoffer)
    <tr>
      <th scope="row">{{$projectoffer->id}}</th>
      <td>{{$projectoffer->property_name}}</td>
      <td>{{$projectoffer->category}}</td>
      <td>{{$projectoffer->shop_name}}</td>
      <td>{{$projectoffer->offer}}</td>
      
      <td><a href="/project-offer/{{$projectoffer->id}}" class="btn btn-primary">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    
</div>
@endsection
