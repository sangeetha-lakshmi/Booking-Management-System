@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Edit Booking</h3>
    <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
        @method('PUT')
        @include('bookings.form', ['buttonText' => 'Update Booking'])
    </form>
</div>
@endsection
