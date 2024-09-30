@extends('layouts.app')

@section('title', 'Access Denied')

@section('styles')
    <style>
        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 70vh; /* Adjust to your needs */
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .circle {
            width: 150px;
            height: 150px;
            background-color: #FFCC00;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 78px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .error-code {
            margin-top: 20px;
            font-size: 24px;
        }
    </style>
@endsection

@section('content')
    <div class="circle">X</div>
    <h1>Access Denied</h1>
    <p>You do not have permission to view this page. Please verify your age and try again.</p>
    <div class="error-code">Error Code: 403</div>
@endsection
