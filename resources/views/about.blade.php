@extends('layouts.master')

@section('title', 'About')

@section('content')

<div class="about-bg" style="background-image: url('/images/portfolio-bg.jpg');">
    <div class="overlay">
        <div class="container">
        
            <h1>About Me</h1>
            <p>Hi! I’m Rialyn Camposano, a dedicated web developer with a passion for building web applications. Through this portfolio, I aim to showcase my journey in mastering the Laravel framework.</p>
        </div>
    </div>
</div>

<div class="about-content">
    <div class="container">
        <div class="section">
            <h2>Portfolio Purpose</h2>
            <p>This website is designed to display my laboratory work with Laravel, highlighting key concepts like routing, middleware, and layout management.</p>
        </div>

        <div class="section">
            <h2>Looking Ahead</h2>
            <p>My next steps involve diving deeper into advanced web development techniques and technologies. I look forward to continuing to grow in this field, working on challenging projects, and expanding my technical expertise.</p>
        </div>
    </div>
</div>

@endsection
