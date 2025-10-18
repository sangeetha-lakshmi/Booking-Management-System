@extends('layouts.app')

@section('content')
<div class="row g-4 mb-4">
  <div class="col-md-3">
    <div class="glass-card p-4 text-center">
      <i class="bi bi-clipboard-data display-5 text-primary mb-3"></i>
      <h5>Total Bookings</h5>
      <h2 class="fw-bold text-primary">{{ \App\Models\Booking::count() }}</h2>
    </div>
  </div>
  <div class="col-md-3">
    <div class="glass-card p-4 text-center">
      <i class="bi bi-check-circle display-5 text-success mb-3"></i>
      <h5>Confirmed</h5>
      <h2 class="fw-bold text-success">{{ \App\Models\Booking::where('status','Confirmed')->count() }}</h2>
    </div>
  </div>
  <div class="col-md-3">
    <div class="glass-card p-4 text-center">
      <i class="bi bi-hourglass-split display-5 text-warning mb-3"></i>
      <h5>Pending</h5>
      <h2 class="fw-bold text-warning">{{ \App\Models\Booking::where('status','Pending')->count() }}</h2>
    </div>
  </div>
  <div class="col-md-3">
    <div class="glass-card p-4 text-center">
      <i class="bi bi-x-circle display-5 text-danger mb-3"></i>
      <h5>Cancelled</h5>
      <h2 class="fw-bold text-danger">{{ \App\Models\Booking::where('status','Cancelled')->count() }}</h2>
    </div>
  </div>
</div>

<div class="glass-card p-5 text-center mt-5">
  <h4 class="fw-bold mb-3">Welcome to BookingPro Dashboard</h4>
  <p class="text-muted mb-4">
    Manage all your bookings, track confirmations, and monitor your events effortlessly.
  </p>
  <a href="{{ route('bookings.index') }}" class="btn btn-gradient btn-lg px-5">
    <i class="bi bi-list-task"></i> Manage Bookings
  </a>
</div>
@endsection
