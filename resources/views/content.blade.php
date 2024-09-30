@extends('layouts.app')

@section('title', 'Exclusive Content')

@section('styles')
    <style>
        .content-container {
            max-width: 1200px;
            text-align: left;
        }
        h1 {
            font-size: 3rem;
            color: #f3950d;
            text-align: center;
        }
        .content-description {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #ccc;
            text-align: center;
        }
        .premium-content {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .premium-item {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        .premium-item h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #fff;
        }
        .premium-item p {
            font-size: 1rem;
            color: #bbb;
        }
        .premium-item a {
            color: #f3950d;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <h1>Exclusive Content for 21+ Users</h1>
    <p class="content-description">
        Welcome to the exclusive content section. Since you are over 21, you have access to premium resources that can help you enhance your skills and stay updated with the latest trends.
    </p>

    <div class="premium-content">
        <div class="premium-item">
            <h3>Advanced Tutorials</h3>
            <p>Access our advanced tutorials to level up your knowledge on web development, software engineering, and more.</p>
            <a href="#">Explore Tutorials</a>
        </div>
        <div class="premium-item">
            <h3>Exclusive Videos</h3>
            <p>Watch premium video content tailored to help you dive deeper into technical subjects.</p>
            <a href="#">Watch Now</a>
        </div>
        <div class="premium-item">
            <h3>Downloadable Resources</h3>
            <p>Download exclusive resources such as e-books, templates, and cheat sheets available only to 21+ users.</p>
            <a href="#">Download Resources</a>
        </div>
    </div>
@endsection
