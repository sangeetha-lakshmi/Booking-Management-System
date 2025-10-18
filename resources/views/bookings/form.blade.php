@csrf
<div class="mb-3">
    <label>Customer Name</label>
    <input type="text" name="customer_name" class="form-control"
           value="{{ old('customer_name', $booking->customer_name ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control"
           value="{{ old('email', $booking->email ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Booking Date</label>
    <input type="date" name="booking_date" class="form-control"
           value="{{ old('booking_date', $booking->booking_date ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Service Type</label>
    <select name="service_type" class="form-select" required>
        @foreach ($services as $service)
            <option value="{{ $service }}"
                {{ (old('service_type', $booking->service_type ?? '') == $service) ? 'selected' : '' }}>
                {{ $service }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-select" required>
        @foreach ($statuses as $status)
            <option value="{{ $status }}"
                {{ (old('status', $booking->status ?? '') == $status) ? 'selected' : '' }}>
                {{ $status }}
            </option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">{{ $buttonText }}</button>
<a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a>
