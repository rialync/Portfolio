@extends('layouts.master')

@section('title', 'Contact')

@section('content')
 
    <div class="contact-background">
        <div class="contact-container">
            <h1>Contact Me</h1>
            <p>If you have any questions, feedback, or inquiries, feel free to reach out by filling out the form below. I look forward to hearing from you!</p>
            
            <section class="contact-form">
                <h2>Get in Touch</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </section>
        </div>
    </div>
@endsection
