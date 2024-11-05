@extends('layouts.index')
@section('from', 'Room Details')
@section('title', 'create appointment')
@section('content')

            <section class="pet_appointment_wrap">

                <div class="container">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif <br>
                   <h4 class="appointment-main-title">Make an Appointment</h4>
                   <form action="{{ route('bookings.payment') }}" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                    <div class="pet_appointment_row">
                        <div class="appiontment_list">
                            <div class="pet_appointment_colum">
                                <h6>Your pet</h6>
                                <div class="">
                                    <select class="small" name="pet_id" id="pet">
                                        @foreach($pets as $pet)
                                        <option value="{{ $pet->id }}">{{ $pet->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="pet_appointment_colum full-width">
                                <h6>Check-in Date:</h6>
                                <div class="">
                                    <input class="form-control" id="check_in_date" placeholder="Select a date" type="text" name="check_in_date" style="width: 120%">
                                </div>
                            </div>
                            <div class="pet_appointment_colum full-width">
                                <h6>Check-out Date:</h6>
                                <div class="">
                                    <input class="form-control" id="check_out_date" placeholder="Select a date" type="text" name="check_out_date" style="width: 120%">
                                </div><br>
                            </div>

                            <div class="pet_appointment_colum">
                                <button class="main_button btn2 bdr-clr hover-affect" type="submit">Process to Payment</button>
                            </div>
                        </div>
                    </div>
                </form>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // تحويل تواريخ الحجز المحجوزة إلى جافا سكريبت
                    const bookings = @json($bookings);

                    // قائمة التواريخ المحجوزة
                    let disabledDates = [];

                    bookings.forEach(booking => {
                        const startDate = new Date(booking.check_in_date);
                        const endDate = new Date(booking.check_out_date);

                        // إضافة جميع التواريخ المحجوزة بين check_in_date و check_out_date إلى القائمة
                        for (let d = startDate; d <= endDate; d.setDate(d.getDate() + 1)) {
                            disabledDates.push(new Date(d).toISOString().split('T')[0]); // صيغة YYYY-MM-DD
                        }
                    });

                    // إعداد Flatpickr لتعطيل التواريخ المحجوزة
                    flatpickr("#check_in_date", {
                        dateFormat: "Y-m-d",
                        disable: disabledDates, // تعطيل التواريخ المحجوزة
                        minDate: "today" // بدءًا من اليوم الحالي
                    });

                    flatpickr("#check_out_date", {
                        dateFormat: "Y-m-d",
                        disable: disabledDates, // تعطيل التواريخ المحجوزة
                        minDate: "today" // بدءًا من اليوم الحالي
                    });
                });
                </script>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
     @endsection
