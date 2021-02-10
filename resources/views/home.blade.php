@extends('layouts.head')
@section('title', 'Tableau de bord')

@section('content')
    @if (Session::has('error_message'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error_message') }}
        </div>
    @endif
    <div class="alert alert-warning">Grosse pute</div>
@endsection