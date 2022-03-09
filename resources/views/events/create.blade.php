@extends('adminlte::page')

@section('title', 'Events List')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
<form method="post" action="{{ route('events.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start_at" type="number" min=0 max=100 label="Start" />
    <x-adminlte-input name="end_at" type="number" min=0 max=100 label="End" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop