@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between mb-4">
    <h3>Event List</h3>
    <a class="btn btn-success btn-sm" href="{{ route('create') }}">Create New</a>
</div>

@if(session()->has('success'))
<label class="alert alert-success w-100">{{session('success')}}</label>
@elseif(session()->has('error'))
<label class="alert alert-danger w-100">{{session('error')}}</label>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Event Name</th>
            <th>Event Start Date</th>
            <th>Event End Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($events as $event)
        <tr>
            <td>{{ $event->event }}</td>
            <td>{{ $event->startDate }}</td>
            <td>{{ $event->endDate }}</td>
            <td>
                <a href="{{ route('edit', ['id' => $event->id]) }}" class="btn btn-success btn-sm">Edit</a>
                <a href="{{ route('show', ['id' => $event->id]) }}" class="btn btn-info btn-sm">Show</a>
                <form action="{{ route('delete', ['id' => $event->id]) }}" method="POST" class="d-inline-block">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<div class="d-flex justify-content-between">
    {{ $events->render() }}
</div>

@endsection