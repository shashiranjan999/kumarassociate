@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Event</div>
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

                    <form action="/Add-event" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Title of Event</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $event->title }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description of Event</label>
                            <textarea class="form-control" id="description" rows="3" name="description">{{ $event->description }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Event Location</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $event->location }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Event Date Time</label>
                            <input type="datetime-local" class="form-control" id="datetime" name="datetime" value="{{ $event->event_date_time }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Event Banner</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection