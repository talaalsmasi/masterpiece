@extends('layouts.index')
@section('from', 'pets for adoptions')
@section('title', 'adoption request')
@section('content')

            <section class="pet_appointment_wrap">

                <div class="container">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif <br>
                   <h4 class="appointment-main-title">Adoption Request {{ $pet->name }}</h4>
                   <form action="{{ route('adopt.submit', ['id' => $pet->id]) }}" method="POST">
                    @csrf
                    <div class="pet_appointment_row">
                        <div class="appiontment_list">
                            <div class="pet_appointment_colum">
                                <h6>Why do you want to adopt {{ $pet->name }}?</h6>
                                <div class="">
                                    <textarea name="reason" id="reason" class="form-control" required></textarea>

                                </div>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6>Can you provide food for {{ $pet->name }}?</h6>
                                <div class="">
                                    <select name="can_feed" class="form-control" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="pet_appointment_colum ">
                                <h6>Can you afford medical treatment for {{ $pet->name }}?</h6>
                                <div class="">
                                    <select name="can_treat" class="form-control" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>                                </div>
                            </div>
                            <div class="pet_appointment_colum">
                                <h6>Do you have other pets?</h6>
                                <div class="">
                                    <select name="has_other_pets" class="form-control" required>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div><br>
                            </div><br>

                            <div class="pet_appointment_colum">
                                <button class="main_button btn2 bdr-clr hover-affect" type="submit">Adoption Request</button>
                            </div>
                        </div>
                    </div>
                </form>


                        </div>

                    </div>
                  </div>
                </div>
            </section>
  @endsection
