@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Add Booking</h3>
    <form method="POST" action="{{ route('bookings.store') }}">
        @include('bookings.form', ['buttonText' => 'Create Booking'])
    </form>
</div>
@endsection
