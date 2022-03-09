@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
  <h2>{{ $event->title; }}</h2>
  <div><p>{{ $event->start_at; }}% finished</p></div>
  <div><p>{{ $event->end_at; }}% finished</p></div>
@stop