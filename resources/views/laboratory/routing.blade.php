@extends('layouts.master')

@section('title', 'Lab 2: Laravel Routing Activity')

@section('content')
<div class="bg-lab-image">
        <div class="overlay">
        </div>
    </div>
    <div class="lab-container">
      
        <h1>Lab 2: Laravel Routing Activity</h1>
        <section class="overview">
            <p><strong>Objective:</strong> In this lab, we will define basic and parameterized routes, use redirection, and apply route constraints. We will also document the steps with code and screenshots to demonstrate the functionality of Laravel's routing system.</p>
        </section>

        <section class="steps">
            <h2>Part 1: Defining Basic Routes</h2>
            <ol>
                <li><strong>Homepage Route:</strong> Define a simple route that returns a view for the homepage displaying a welcome message.
                    <pre><code>
// routes/web.php
Route::get('/', function () {
    return view('welcome');
});
                    </code></pre>
                </li>
                <li><strong>About Us Route:</strong> Create a route that returns an "About Us" view:
                    <pre><code>
// routes/web.php
Route::get('/about', function () {
    return view('about');
});
                    </code></pre>
                </li>
                <li><strong>Redirection Route:</strong> Redirect `/home` to the homepage (`/`):
                    <pre><code>
// routes/web.php
Route::redirect('/home', '/');
                    </code></pre>
                </li>
                <li><strong>Contact Us Route:</strong> Define a route for a "Contact Us" form:
                    <pre><code>
// routes/web.php
Route::get('/contact', function () {
    return view('contact');
});
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="steps">
            <h2>Part 2: Using Route Parameters</h2>
            <ol>
                <li><strong>Required Parameter Route:</strong> Create a route that accepts a `username` parameter and displays a welcome message including the username:
                    <pre><code>
// routes/web.php
Route::get('/user/{name}', function ($name) {
    return view('user', ['name' => $name]);
});
                    </code></pre>
                    <p>Example: `/user/johndoe` should display "Welcome, johndoe!"</p>
                </li>
                <li><strong>Optional Parameter Route:</strong> Modify the previous route to make the `username` parameter optional. If no username is provided, display "Welcome, Guest!":
                    <pre><code>
// routes/web.php
Route::get('/user/{name?}', function ($name = 'Guest') {
    return view('user', ['name' => $name]);
});
                    </code></pre>
                    <p>Example: `/user` should display "Welcome, Guest!"</p>
                </li>
                <li><strong>Route Constraints:</strong> Apply regular expression constraints to the route to ensure only alphabetic characters are allowed in the username:
                    <pre><code>
// routes/web.php
Route::get('/user/{name?}', function ($name = 'Guest') {
    return view('user', ['name' => $name]);
})->where('name', '[A-Za-z]+');
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="directories">
            <h2>Key Routing Concepts</h2>
            <ul>
                <li><strong>Route Parameters:</strong> Parameters allow us to pass data from the URL into our routes, such as a `username` in this example.</li>
                <li><strong>Optional Parameters:</strong> If a parameter is optional, a default value is used when the parameter is missing in the URL.</li>
                <li><strong>Constraints:</strong> Applying regular expressions to parameters ensures that only valid input is accepted, such as restricting usernames to alphabetic characters.</li>
                <li><strong>Redirection:</strong> Redirect routes allow us to forward a user from one URL to another seamlessly.</li>
            </ul>
        </section>

        <section class="images">
            <h2>Lab Screenshots</h2>
            <p>Here are some screenshots showcasing the routing configuration and its output:</p>
            <a href="{{ asset('images/welcome-route.jpg') }}" target="_blank">
                <img src="{{ asset('images/welcome-route.jpg') }}" alt="Homepage Route" class="img-fluid">
            </a>
            <a href="{{ asset('images/welcome-img.jpg') }}" target="_blank">
                <img src="{{ asset('images/welcome-img.jpg') }}" alt="Homepage Route" class="img-fluid">
            </a>

            <a href="{{ asset('images/user-route.jpg') }}" target="_blank">
                <img src="{{ asset('images/user-route.jpg') }}" alt="User Route with Parameter" class="img-fluid">
            </a>
            <a href="{{ asset('images/user-img.jpg') }}" target="_blank">
                <img src="{{ asset('images/user-img.jpg') }}" alt="User Route with Parameter" class="img-fluid">
            </a>
        </section>

        <section class="github-link">
            <h2>Access the Code</h2>
            <p>To view or clone the Laravel project, visit the GitHub repository at the link below:</p>
            <a href="https://github.com/jellamarie/Group5.git" target="_blank" class="btn">GitHub Repository</a>
        </section>

        <section class="reflection">
    <h2>Reflection</h2>
    <p>This lab deepened my understanding of Laravel’s routing system. I learned how to handle route parameters, apply constraints, and create redirects, which are essential for building flexible web applications. Working as a group of three members made it easier to tackle complex concepts, but it also presented challenges. I faced difficulties since I didn't have a laptop, which limited my ability to work on the project outside of class hours. This situation required me to coordinate closely with my teammates to stay updated and contribute effectively.</p>

<p>As a team, we managed to overcome many obstacles together, and I gained valuable insights into Laravel’s capabilities. However, I would like to apologize because my individual documentation PDF file for this activity was not uploaded to the GitHub repository by the deadline. I have already submitted the repository link in BULMS. I may have gotten confused while trying to commit the file, and I just noticed it now. I'm sorry for the inconvenience, and I hope you can kindly consider this. Thank you for your understanding.</p>

</section>

    </div>
@endsection
