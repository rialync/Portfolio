@extends('layouts.master')

@section('title', 'Lab 1: Laravel Framework Introduction')

@section('content')

    <div class="bg-lab-image">
        <div class="overlay">         
        </div>
    </div>
    <div class="lab-container">
          <h1>Lab 1: Laravel Framework Introduction</h1>
        <section class="overview">
            <p><strong>Objective:</strong> In this lab, we will explore the process of installing Laravel, setting up dependencies, creating a basic Laravel project, and understanding its key components. We will also create simple views, routes, and document the setup process step-by-step.</p>
        </section>

        <section class="steps">
            <h2>Steps and Procedures</h2>
            <p>Below are the detailed steps to complete the Laravel setup and initial project configuration:</p>
            <ol>
                <li><strong>Install Laravel and Dependencies:</strong> Install Composer and then Laravel using the following command:
                    <pre><code>composer global require laravel/installer</code></pre>
                </li>
                <li><strong>Create a Laravel Project:</strong> Create a new Laravel project by running the command below in your terminal:
                    <pre><code>laravel new my-laravel-project</code></pre>
                </li>
                <li><strong>Set up the .env File:</strong> Modify the `.env` file in the project root folder with your database credentials:
                    <pre><code>
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
                    </code></pre>
                </li>
                <li><strong>Create Views and Routes:</strong> Create three views (`home.blade.php`, `about.blade.php`, and `contact.blade.php`) in the `resources/views` folder. Set up the following routes in `routes/web.php` to link to these views:
                    <pre><code>
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
                    </code></pre>
                </li>
                <li><strong>Identify Key Directories and Files</strong></li>
                <li><strong>Document with Screenshots</strong></li>
            </ol>
        </section>

        <section class="directories">
            <h2>Key Directories and Files in a Laravel Project</h2>
            <p>Below is an explanation of key directories and files in Laravel:</p>
            <ul>
                <li><strong>app/:</strong> Contains the core application code, such as controllers, models, and middleware.</li>
                <li><strong>resources/views/:</strong> Holds the Blade template files, which define the HTML structure of your views.</li>
                <li><strong>routes/web.php:</strong> The primary file for defining web routes and connecting URLs to views or controllers.</li>
                <li><strong>config/:</strong> Stores configuration files for various services (e.g., database connections, mail settings).</li>
                <li><strong>public/:</strong> Contains the entry point to the application (index.php), along with public assets (CSS, JS, images).</li>
            </ul>
        </section>

        <section class="images">
            <h2>Lab Screenshots</h2>
            <p>Here are some screenshots showcasing the process:</p>
            <a href="{{ asset('images/creating.jpg') }}" target="_blank">
    <img src="{{ asset('images/creating.jpg') }}" alt="Creating Laravel Project" class="img-fluid">
</a>
            <a href="{{ asset('images/routes-ss.jpg') }}" target="_blank">
    <img src="{{ asset('images/routes-ss.jpg') }}" alt="Routes Setup" class="img-fluid">
</a>
        </section>

        <section class="github-link">
            <h2>Access the Code</h2>
            <p>To view or clone the Laravel project, visit the GitHub repository at the link below:</p>
            <a href="https://github.com/rialync/laravelProject.git" target="_blank" class="btn">GitHub Repository</a>
        </section>

        <section class="reflection">
            <h2>Reflection</h2>
            <p>This lab taught me the basics of installing Laravel, creating a project, and setting it up. I was excited to start, but I faced challenges during the installation. Configuring my local environment was tricky due to issues with dependencies and installing the necessary packages. However, with patience and some online research, I managed to solve these problems. This experience taught me the importance of persistence when facing difficulties.</p>
            <p>When it came time to push my Laravel project to the repository, I faced more challenges. I struggled with Git commands for adding and committing my files, which led me to upload each file directly to the GitHub repository instead. This approach turned out to be time-consuming and complicated. Despite these hurdles, I learned a lot about Laravel and improved my project management skills, making the overall experience valuable.</p>

        </section>
    </div>
@endsection
