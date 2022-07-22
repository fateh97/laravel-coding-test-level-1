@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>Create Event</h3>
    <a class="btn btn-success btn-sm" href="{{ route('index') }}">List Event</a>
</div>

@if(session()->has('success'))
<label class="alert alert-success w-100">{{session('success')}}</label>
@elseif(session()->has('error'))
<label class="alert alert-danger w-100">{{session('error')}}</label>
@endif

<form action="{{ route('store') }}" method="POST">

    @csrf
    <div class="form-group">
        <label>Event Name</label>
        <input type="text" name="event" class="form-control">
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Event Start Date</label>
                        <input type="date" name="startdate" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Event End Date</label>
                        <input type="date" name="enddate" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection