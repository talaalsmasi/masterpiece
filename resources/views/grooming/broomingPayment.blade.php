@extends('layouts.index')
@section('from', 'Create Appointment')
@section('title', 'grooming payment')
@section('content')
            <div class="pet_appointment_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Confirm Your Appointment</h4>
                    <!-- First Form: For confirming the appointment -->
                    <form action="{{ route('brooming.payment.process') }}" method="POST">
                        @csrf <!-- Always remember to include CSRF for form submission -->
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6>Pet:</h6>
                                    <div class="small">
                                        <p>Pet: {{ \App\Models\Pet::find($validatedData['pet_id'])->name }}</p>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Service:</h6>
                                    <div class="">
                                        <p>Service: {{ \App\Models\BroomingService::find($validatedData['service_id'])->name }}</p>                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Price:</h6>
                                    <div class="">
                                        ${{ number_format($servicePrice, 2) }}
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Date:</h6>
                                    <div class="">
                                        <p>Date: {{ $validatedData['appointment_date'] }}</p>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Time:</h6>
                                    <div class="">
                                        <p>{{ $validatedData['appointment_time'] }}</p>
                                    </div>
                                </div>
                                <p><b>Note:</b> You will pay half price of <strong>${{ number_format($servicePrice / 2, 2) }}</strong>, and you can complete it when the booking is done.</p> <!-- عرض نصف السعر -->


                                <!-- Hidden Complete Payment button in the first form -->
                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit" style="visibility: hidden">Complete Payment</button>
                                </div>
                            </div>
                        </div>
                    </form> <!-- Close the first form here -->
                </div>
            </div><br><br><br>

            <!-- Second Section: Payment Information -->
            <div class="pet_appointment_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Payment Information</h4>
                    <!-- Second Form: For payment processing -->
                    <form action="{{ route('brooming.payment.process') }}" method="POST">
                        @csrf <!-- CSRF token for security -->
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6>Card Number</h6>
                                    <div class="small">
                                        <input type="text" id="card_number" name="card_number" placeholder="Enter your card number">
                                        <!-- Display error message for card_number -->
                                        @error('card_number')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Cardholder Name</h6>
                                    <div class="">
                                        <input type="text" name="cardholder_name" id="cardholder_name" placeholder="Enter your name" required>
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Expiry Date</h6>
                                    <div class="">
                                        <input type="text" name="expiry_date" id="expiry_date" required pattern="\d{2}/\d{2}" title="Expiry date must be in the format MM/YY" placeholder="MM/YY">
                                    </div>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>CVV</h6>
                                    <div class="">
                                        <input type="text" name="cvv" id="cvv" required minlength="3" maxlength="3" pattern="\d{3}" title="CVV must be 3 digits" placeholder="CVV">
                                    </div><br>
                                     </div>
                                            <!-- Hidden fields for booking details -->
                                        <input type="hidden" name="pet_id" value="{{ $validatedData['pet_id'] }}">
                                        <input type="hidden" name="service_id" value="{{ $validatedData['service_id'] }}">
                                        <input type="hidden" name="appointment_date" value="{{ $validatedData['appointment_date'] }}">
                                        <input type="hidden" name="appointment_time" value="{{ $validatedData['appointment_time'] }}">
                                     <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Complete Payment</button>
                                </div>
                            </div>
                        </div>
                    </form> <!-- Close the second form here -->
                </div>
            </div><br><br><br><br>

         @endsection
