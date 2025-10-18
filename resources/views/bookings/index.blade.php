@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Bookings</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Add Booking</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Email</th>
                <th>Booking Date</th>
                <th>Service Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->customer_name }}</td>
                <td>{{ $booking->email }}</td>
                <td>{{ $booking->booking_date }}</td>
                <td>{{ $booking->service_type }}</td>
                <td>
                    <span class="badge 
                        @if($booking->status == 'Confirmed') bg-success 
                        @elseif($booking->status == 'Cancelled') bg-danger 
                        @else bg-warning 
                        @endif">
                        {{ $booking->status }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('bookings.edit', $booking) }}" class="btn btn-sm btn-info">Edit</a>
                    <form action="{{ route('bookings.destroy', $booking) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete booking?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
