@extends('layouts.app')

@section('content')
<div class="container">


<a style="margin-bottom:20px;font-size:20px" href="/Add-event" class="btn btn-primary">Add Event</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event Name</th>
      <!-- <th scope="col">Detail</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($events as $event)
    <tr>
      <th scope="row">{{$event->id}}</th>
      <td>{{$event->title}}</td>
      <!-- <td>{{$event->description}}</td> -->
      <td><a href="/event/{{$event->id}}" class="btn btn-primary">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

    
</div>
@endsection
