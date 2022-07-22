@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>Show Event</h3>
    <a class="btn btn-success btn-sm" href="{{ route('index') }}">List Products</a>
</div>

<div class="form-group">
    <label>Event Name</label>
    <input type="text" name="name" class="form-control" value="{{ $event->event }}" disabled>
</div>
<div class="form-group">
    <label>Event Start Date</label>
    <input type="text" name="startdate" class="form-control" value="{{ $event->startDate }}" disabled>
</div>
<div class="form-group">
    <label>Event End Date</label>
    <input type="text" name="enddate" class="form-control" value="{{ $event->endDate }}" disabled>
</div>
@endsection