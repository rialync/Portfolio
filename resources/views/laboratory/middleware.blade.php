@extends('layouts.master')

@section('title', 'Lab 4: Middleware')

@section('content')
<div class="bg-lab-image">
        <div class="overlay">
           
        </div>
    </div>
    <div class="lab-container">

        <h1>Lab 4: Middleware</h1>
        <section class="overview">
            <p><strong>Objective:</strong> In this lab, we implemented two types of middleware: CheckAge and LogRequests. We also explored how to assign middleware globally and to specific routes, and how to pass parameters to middleware.</p>
        </section>

        <section class="steps">
            <h2>Steps and Procedures</h2>
            <p>Below are the steps taken to implement middleware in our Laravel project:</p>
            <ol>
                <li><strong>Create Middleware:</strong> Create the middleware using Artisan commands:
                    <pre><code>php artisan make:middleware CheckAge</code></pre>
                    <pre><code>php artisan make:middleware LogRequests</code></pre>
                </li>
                <li><strong>CheckAge Middleware:</strong> In the <code>CheckAge</code> middleware, we check if the user's age is greater than or equal to 18. If not, they are redirected to an access-denied page:
                    <pre><code>
public function handle(Request $request, Closure $next)
{
    if ($request->age && $request->age < 18) {
        return redirect('access-denied');
    }
    return $next($request);
}
                    </code></pre>
                </li>
                <li><strong>LogRequests Middleware:</strong> This middleware logs the details of every request (URL, method, and timestamp) to a file:
                    <pre><code>
public function handle(Request $request, Closure $next)
{
    $logEntry = "[" . now() . "] " . $request->method() . " " . $request->url();
    Log::channel('custom')->info($logEntry);
    return $next($request);
}
                    </code></pre>
                </li>
                <li><strong>Register Middleware:</strong> In <code>app/Http/Kernel.php</code>, we registered the middleware globally and for specific routes:
                    <pre><code>
// Register in Kernel.php
protected $middleware = [
    \App\Http\Middleware\LogRequests::class,
];

// Route-specific middleware in web.php
Route::middleware('checkAge')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
                    </code></pre>
                </li>
                <li><strong>Pass Parameters:</strong> The <code>CheckAge</code> middleware was modified to accept a parameter for age restriction:
                    <pre><code>
public function handle(Request $request, Closure $next, $age)
{
    if ($request->age && $request->age < $age) {
        return redirect('access-denied');
    }
    return $next($request);
}

// Middleware with parameter in routes/web.php
Route::get('/restricted', function () {
    return 'Restricted Content';
})->middleware('checkAge:21');
                    </code></pre>
                </li>
            </ol>
        </section>

        <section class="concepts">
            <h2>Key Middleware Concepts</h2>
            <p>Here are the key concepts explored in this lab:</p>
            <ul>
                <li><strong>Middleware Creation:</strong> Middleware acts as a filter between the request and response.</li>
                <li><strong>Global Middleware:</strong> Middleware that runs on every request handled by the application.</li>
                <li><strong>Route-Specific Middleware:</strong> Middleware applied to specific routes or groups of routes.</li>
                <li><strong>Middleware Parameters:</strong> Middleware can accept parameters to make it more flexible for different routes.</li>
            </ul>
        </section>

        <section class="images">
            <h2>Lab Screenshots</h2>
            <p>Here are some screenshots showcasing the middleware implementation and route testing:</p>
            <a href="{{ asset('images/middleware1.jpg') }}" target="_blank">
                <img src="{{ asset('images/middleware1.jpg') }}" alt="Middleware Implementation" class="img-fluid">
            </a>
            <a href="{{ asset('images/logs.jpg') }}" target="_blank">
                <img src="{{ asset('images/logs.jpg') }}" alt="Log Request Middleware" class="img-fluid">
            </a>
            <a href="{{ asset('images/logs1.jpg') }}" target="_blank">
                <img src="{{ asset('images/logs1.jpg') }}" alt="Log Request Middleware" class="img-fluid">
            </a>
        </section>

        <section class="github-link">
            <h2>Access the Code</h2>
            <p>To view or clone the Laravel project, visit the GitHub repository at the link below:</p>
            <a href="https://github.com/jellamarie/Middleware.git" target="_blank" class="btn">GitHub Repository</a>
        </section>

        <section class="reflection">
            <h2>Reflection</h2>
            <p>This lab helped me understand how middleware functions in Laravel and its role in handling request filtering and logging. I learned that middleware acts as a bridge between a request and the application, allowing for additional processing before reaching the application logic. This understanding emphasized the importance of middleware in ensuring security and optimizing application performance.</p>
            <p>Implementing middleware with parameters gave me insight into its flexibility in real-world scenarios. I realized that custom middleware can be tailored to meet specific needs, such as user authentication and role-based access control. This experience deepened my appreciation for middleware as a powerful tool in Laravel, enhancing my skills in developing robust web applications.</p>

        </section>
    </div>
@endsection
