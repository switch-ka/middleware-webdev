@extends('layouts.app')

@section('title', 'Welcome to WebHub')

@section('styles')
    <style>
        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #ccc;
        }
        .btn-custom {
            background-color: #f90;
            border-color: #f90;
            padding: 10px 20px;
            font-size: 1.2rem;
            color: #fff;
            font-weight: bold;
            text-decoration: none;
        }
        .btn-custom:hover {
            background-color: #ffb84d;
            border-color: #ffb84d;
        }
    </style>
@endsection

@section('content')
    <h1>Welcome to WebHub!</h1>
    <p>We're glad to have you here. Explore our features and services by visiting your dashboard.</p>
    <a href="/dashboard" class="btn btn-custom">Go to Dashboard</a>
@endsection
