@extends('layouts.index')
@section('from', 'Home')
@section('title', 'create grooming appointment')
@section('content')
<style>
    .booked-time {
        color: red !important;
        font-weight: bold;
    }
</style>

            <section class="pet_appointment_wrap">

                <div class="container">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif <br>
                   <h4 class="appointment-main-title">Make An Grooming Appointment</h4>
                   <form action="{{ route('brooming.payment') }}" method="POST">
                    @csrf
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
                            <div class="pet_appointment_colum">
                                <h6>Select a service</h6>
                                <div class="">
                                    <select class="small" name="service_id" id="service_id">
                                        @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }} - ${{ $service->price }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="pet_appointment_colum full-width">
                                <h6>I am available on</h6>
                                <div class="">
                                    <input class="form-control" id="appointment_date" placeholder="2023-06-20" type="date" name="appointment_date" onchange="fetchAvailableTimes(this.value)" style="width: 99%">
                                </div>
                            </div>

                            <div class="pet_appointment_colum">
                                <h6>Time</h6>
                                <div class="">
                                    <select class="small" name="appointment_time">

                                        @foreach ([
                                            '10:00 AM - 10:30 AM', '10:30 AM - 11:00 AM', '11:00 AM - 11:30 AM',
                                            '11:30 AM - 12:00 PM', '12:00 PM - 12:30 PM', '12:30 PM - 01:00 PM',
                                            '01:30 PM - 02:00 PM', '02:00 PM - 02:30 PM', '02:30 PM - 03:00 PM',
                                            '03:00 PM - 03:30 PM', '03:30 PM - 04:00 PM', '04:00 PM - 04:30 PM',
                                            '04:30 PM - 05:00 PM', '05:00 PM - 05:30 PM', '05:30 PM - 06:00 PM'
                                        ] as $time)
                                            @php
                                                $isBooked = in_array($time, $bookedAppointments);
                                            @endphp
                                            <option value="{{ $time }}" {{ $isBooked ? 'class=booked-time disabled' : '' }}>
                                                {{ $time }} {{ $isBooked ? '(Booked)' : '' }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="pet_appointment_colum" style="visibility: hidden">
                                <h6>Doctor</h6>
                                <div class="">
                                    <select class="small" name="doctor_id" id="doctor">
                                        {{-- @foreach($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div><br>
                            </div>
                            <div class="pet_appointment_colum">
                                <button class="main_button btn2 bdr-clr hover-affect" type="submit">process to payment</button>
                            </div>
                        </div>
                    </div>
                </form>


                        </div>

                    </div>
                  </div>
                </div>
            </section><script>
                function fetchAvailableTimes(date) {
                    fetch(`/get-booked-appointments?date=${date}`)
                        .then(response => response.json())
                        .then(data => {
                            const timeSelect = document.querySelector('select[name="appointment_time"]');
                            timeSelect.innerHTML = ''; // تنظيف القائمة

                            const times = [
                                '10:00 AM - 10:30 AM', '10:30 AM - 11:00 AM', '11:00 AM - 11:30 AM',
                                '11:30 AM - 12:00 PM', '12:00 PM - 12:30 PM', '12:30 PM - 01:00 PM',
                                '01:30 PM - 02:00 PM', '02:00 PM - 02:30 PM', '02:30 PM - 03:00 PM',
                                '03:00 PM - 03:30 PM', '03:30 PM - 04:00 PM', '04:00 PM - 04:30 PM',
                                '04:30 PM - 05:00 PM', '05:00 PM - 05:30 PM', '05:30 PM - 06:00 PM'
                            ];

                            times.forEach(time => {
                                const isBooked = data.bookedAppointments.includes(time);
                                const option = document.createElement('option');
                                option.value = time;
                                option.textContent = `${time} ${isBooked ? '(Booked)' : ''}`;
                                if (isBooked) {
                                    option.classList.add('booked-time');
                                    option.disabled = true;
                                }
                                timeSelect.appendChild(option);
                            });
                        });
                }
            </script>

  @endsection
