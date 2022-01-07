@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h1>{{$event->title}}</h1>
        </div>
        <div class="card-body">
           <img style="margin-bottom:10px" height="200px" width="200px" src="{{asset('images/'.$event->image)}}" alt="Second slide">
            <p class="card-text"><span style="font-weight:bold">Description: </span>{{$event->description}}</p>
            <p class="card-text"><span style="font-weight:bold">Location: </span>{{$event->location}}</p>
            <p class="card-text"><span style="font-weight:bold">Event Date Time: </span>{{$event->event_date_time}}</p>
        </div>
        <div class="card-footer text-muted">
            <a style="margin-bottom:10px" href="/event/{{$event->id}}/edit" class="btn btn-outline-primary">Edit Event</a>
            <form id="delete-frm" class="" action="" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-danger">Delete Event</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection