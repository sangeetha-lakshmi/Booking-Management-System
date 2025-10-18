@extends('layouts.app')

@section('content')
<h3>Booking #{{ $booking->id }}</h3>
<ul class="list-group">
  <li class="list-group-item"><strong>Customer:</strong> {{ $booking->customer_name }}</li>
  <li class="list-group-item"><strong>Email:</strong> {{ $booking->email }}</li>
  <li class="list-group-item"><strong>Date:</strong> {{ $booking->booking_date->format('Y-m-d') }}</li>
  <li class="list-group-item"><strong>Service:</strong> {{ $booking->service_type }}</li>
  <li class="list-group-item"><strong>Status:</strong> {{ $booking->status }}</li>
</ul>
<br>
<a href="{{ route('bookings.index') }}" class="btn btn-link">Back</a>
@endsection
