@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
  <h2>{{ $event->title; }}</h2>
  <div><p>{{ $event->start_at->format('d/m/Y'); }}% finished</p></div>
  <div><p>{{ $event->end_at->format('d/m/Y'); }}% finished</p></div>
@stop