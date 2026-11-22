@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<section class="contact-section">
    <div class="contact-container">
        <div class="contact-header">
            <h1>Contact Timpla Café</h1>
            <p>Have a question, table inquiry, or feedback? Send us a message.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-card">
                <h2>Café Details</h2>
                <p><strong>Address:</strong> Timpla Café, Main Street</p>
                <p><strong>Email:</strong> hello@timplacafe.ph</p>
                <p><strong>Phone:</strong> +63 (085) 123-4567</p>
                <p><strong>Hours:</strong> Daily, 6:30 AM – 9:00 PM</p>
            </div>

            <div class="contact-card">
                <h2>Send a Message</h2>

                <div id="contact-success" class="success-alert" hidden></div>

                <form id="contact-form" novalidate>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your full name">
                        <small class="error-msg" id="name-error"></small>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com">
                        <small class="error-msg" id="email-error"></small>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject">
                        <small class="error-msg" id="subject-error"></small>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Write your message..."></textarea>
                        <small class="error-msg" id="message-error"></small>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
