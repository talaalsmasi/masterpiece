{{-- @extends('Admin.layouts.index')

@section('title', 'Dashboard')

@section('content')
    <div class="stats">
        <div class="stat-card">
            <h6>Veterinarians</h6>
            <p>{{ $veterinariansCount }}</p>
        </div>
        <div class="stat-card">
            <h6>Registered Pets</h6>
            <p>{{ $registeredPetsCount }}</p>
        </div>
        <div class="stat-card">
            <h6>Services Provided</h6>
            <p>{{ $servicesProvidedCount }}</p>
        </div>
        <div class="stat-card">
            <h6>Adoptions</h6>
            <p>{{ $adoptionsCount }}</p>
        </div>
    </div>

    <canvas id="revenueChart"></canvas>
    <canvas id="careReportChart"></canvas>
@endsection --}}

@extends('Admin.layouts.index')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="stats">
            <div class="stat-card">
                <h6>Veterinarians</h6>
                <p>{{ $veterinariansCount }}</p>
            </div>
            <div class="stat-card">
                <h6>Registered Pets</h6>
                <p>{{ $registeredPetsCount }}</p>
            </div>
            <div class="stat-card">
                <h6>Services Provided</h6>
                <p>{{ $servicesProvidedCount }}</p>
            </div>
            <div class="stat-card">
                <h6>Adoptions</h6>
                <p>{{ $adoptionsCount }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Adoptions</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <span>{{ $adoptionsCount }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <canvas id="revenueChart"></canvas>
        </div>
        <div class="col-lg-4">
            <canvas id="careReportChart"></canvas>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('Admin/custom.js') }}"></script>
@endsection
