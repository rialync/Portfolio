@extends('layouts.master')

@section('title', 'Lab 2: Blade Layouts and Views')

@section('content')
<div class="bg-lab-image">
    <div class="overlay"></div>
</div>
<div class="lab-container">

    <h1>Lab 2: Blade Layouts and Views</h1>
    <section class="overview">
        <p><strong>Objective:</strong> In this lab, we will learn how to create and use Blade layouts in Laravel. We will structure our views in a way that makes them reusable and easy to maintain by leveraging Blade’s template inheritance.</p>
    </section>

<section class="steps">
    <h2>Steps and Procedures</h2>
    <h3>Part 1: Creating a Layout File</h3>
    <p>In the `resources/views/components` directory, create a layout file that defines the HTML structure for the application. This will serve as the base layout for all pages:</p>

        <h3>Part 2: Creating Views</h3>
        <p>Create three new Blade files (`home.blade.php`, `about.blade.php`, and `contact.blade.php`) that extend the layout file. Each file will define the page-specific content:</p>

        <h3>Part 3: Updating Routes</h3>
        <p>Define routes in the `routes/web.php` file to serve the views:</p>

    </section>

    <section class="images">
        <h2>Lab Screenshots</h2>
        <p>Below are screenshots of the layout and route file:</p>
        <a href="{{ asset('images/layout-ss.jpg') }}" target="_blank">
            <img src="{{ asset('images/layout-ss.jpg') }}" alt="Layout Screenshot" class="img-fluid">
        </a>
        <a href="{{ asset('images/route-ss.jpg') }}" target="_blank">
            <img src="{{ asset('images/route-ss.jpg') }}" alt="Routes Screenshot" class="img-fluid">
        </a>
    </section>

    <section class="github-link">
        <h2>Access the Code</h2>
        <p>You can access the Laravel project from the GitHub repository link below:</p>
        <a href="https://github.com/jellamarie/G5-Layout.git" target="_blank" class="btn">GitHub Repository</a>
    </section>

    <section class="reflection">
        <h2>Reflection</h2>
        <p>In this lab, I understood the significance of using a layout file for structuring content across multiple views. By utilizing Blade's templating system, I learned how to manage common elements like headers and footers more efficiently. This approach not only improved the organization of my project but also made it easier to maintain consistency across different pages.</p>
        <p>Using a layout file streamlined the development process, as I could make changes to the layout in one place rather than updating each view individually. This experience reinforced the importance of good project organization in web development. It highlighted how Blade's features can enhance productivity and simplify the creation of cohesive user interfaces.</p>

    </section>
</div>
@endsection
