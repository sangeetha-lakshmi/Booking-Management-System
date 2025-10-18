@extends('layouts.app')

@section('content')
<style>
.hero-section {
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    color: white;
    min-height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}
.hero-title {
    font-size: 3rem;
    font-weight: 700;
}
.hero-subtitle {
    font-size: 1.2rem;
    opacity: 0.9;
}
</style>

<div class="hero-section">
    <div class="container">
        <h1 class="hero-title mb-3">Welcome to <span class="text-warning">BookingPro</span></h1>
        <p class="hero-subtitle mb-4">
            Manage all your bookings for Transport, Meetings, and Events — effortlessly.
        </p>
        <div>
            <a href="{{ route('login') }}" class="btn btn-light btn-lg me-3 px-4">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
            <a href="{{ route('register') }}" class="btn btn-warning btn-lg px-4">
                <i class="bi bi-person-plus"></i> Create Account
            </a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="glass-card p-4">
                <i class="bi bi-calendar-check display-6 text-primary mb-3"></i>
                <h5>Smart Scheduling</h5>
                <p class="text-muted">Create, update, and manage your bookings in seconds.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="glass-card p-4">
                <i class="bi bi-people-fill display-6 text-success mb-3"></i>
                <h5>Customer Insights</h5>
                <p class="text-muted">Track who books what, when, and why — effortlessly.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="glass-card p-4">
                <i class="bi bi-shield-lock display-6 text-danger mb-3"></i>
                <h5>Secure & Reliable</h5>
                <p class="text-muted">Powered by Laravel + Bootstrap 5 for modern security.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('login') }}" class="btn btn-gradient btn-lg px-5">
            <i class="bi bi-arrow-right-circle"></i> Enter Booking System
        </a>
    </div>
</div>
@endsection
