@component('mail::message')
# Booking Confirmation

Hello {{ $booking->customer_name }},

Thanks for your booking. Here are the details:

- **Date:** {{ $booking->booking_date->format('Y-m-d') }}
- **Service:** {{ $booking->service_type }}
- **Status:** {{ $booking->status }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
