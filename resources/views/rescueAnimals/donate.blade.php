@extends('layouts.index')
@section('from', $rescueAnimal->pet->name .' Details')
@section('title', 'Donate')
@section('content')
            <div class="pet_appointment_wrap">
                <div class="container">
                    <h4 class="appointment-main-title">Donate to {{ $rescueAnimal->pet->name }}</h4>
                    <p>Current Donation: {{ $rescueAnimal->current_donated_amount }} / {{ $rescueAnimal->total_required_amount }}</p>

                    <!-- Donation Form for payment processing -->
                    <form action="{{ route('rescueAnimals.processDonation', $rescueAnimal->id) }}" method="POST">
                        @csrf <!-- CSRF token for security -->
                        <div class="pet_appointment_row">
                            <div class="appiontment_list">
                                <div class="pet_appointment_colum">
                                    <h6>Donation Amount</h6>
                                    <input type="number" name="donation_amount" id="donation_amount"
                                           min="1"
                                           max="{{ $rescueAnimal->total_required_amount - $rescueAnimal->current_donated_amount }}"
                                           required style="border-radius: 1vh">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Card Number</h6>
                                    <input type="text" id="card_number" name="card_number"
                                           placeholder="Enter your card number" required>
                                    <!-- Display error message for card_number -->
                                    @error('card_number')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Cardholder Name</h6>
                                    <input type="text" name="cardholder_name" id="cardholder_name"
                                           placeholder="Enter your name" required>
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>Expiry Date</h6>
                                    <input type="text" name="expiry_date" id="expiry_date"
                                           required pattern="\d{2}/\d{2}"
                                           title="Expiry date must be in the format MM/YY"
                                           placeholder="MM/YY">
                                </div>

                                <div class="pet_appointment_colum">
                                    <h6>CVV</h6>
                                    <input type="text" name="cvv" id="cvv" required minlength="3"
                                           maxlength="3" pattern="\d{3}"
                                           title="CVV must be 3 digits" placeholder="CVV">
                                </div>
                                <div class="pet_appointment_colum" style="visibility: hidden">
                                    <h6>CVV</h6>
                                    {{-- <input type="text" name="cvv" id="cvv" required minlength="3"
                                           maxlength="3" pattern="\d{3}"
                                           title="CVV must be 3 digits" placeholder="CVV"> --}}
                                </div>

                                <div class="pet_appointment_colum">
                                    <button class="main_button btn2 bdr-clr hover-affect" type="submit">Complete Payment</button>
                                </div>
                            </div>
                        </div>
                    </form> <!-- Close the donation form here -->
                </div>
            </div><br><br><br><br>

     @endsection
