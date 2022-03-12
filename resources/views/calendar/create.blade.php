@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
    <h1>New Event</h1>
@stop

@section('content')
<form method="post" action="{{ route('events.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start" type="datetime-local" label="Start" />
    <x-adminlte-input name="end" type="datetime-local" label="End" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop