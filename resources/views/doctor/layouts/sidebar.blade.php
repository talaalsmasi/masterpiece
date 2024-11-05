{{-- <aside class="sidebar">

    <div class="sidebar-content">
        <h2>Vet Clinic</h2>
        <ul class="nav-links">
            <li><a class="active" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="{{ route('admin.doctors.index') }}"><i class="fas fa-user-md"></i> Doctors</a></li>
            <li><a href="{{ route('admin.animaltypes.index') }}"><i class="fas fa-dog"></i> Animal type</a></li>
            <li><a href="{{ route('admin.pets.index') }}"><i class="fas fa-paw"></i> Pets</a></li>
            <li><a href="{{ route('admin.services.index') }}"><i class="fas fa-concierge-bell"></i> Services</a></li>
            <li><a href="{{ route('admin.appointments.index') }}"><i class="fas fa-calendar-alt"></i> Appointments</a></li>
            <li><a href="{{ route('admin.categories.index') }}"><i class="fas fa-tags"></i> Products Categories</a></li>
            <li><a href="{{ route('admin.products.index') }}"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="{{ route('admin.orders.index') }}"><i class="fas fa-shopping-cart"></i> Orders</a></li>
            <li><a href="{{ route('admin.adoptions.index') }}"><i class="fas fa-heart"></i> Adoptions</a></li>
        </ul>

    </div>
</aside> --}}

<aside class="sidebar">
    <div class="sidebar-content" style="height: 92vh">
        <p style="font-size: 40px"><img style="height:30%;width:30%" src="{{ asset('images/petpaladmin.png') }}" alt=""> PetPal</p>
        <ul class="nav-links">
            <li><a class="active" href="{{ route('doctor.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{route('doctor.info')}}"><i class="fas fa-user-shield"></i> Informations</a></li>
            <li><a href="{{ route('doctor.appointments.index') }}"><i class="fas fa-calendar-alt"></i> Appointments</a></li>
            <li><a href=""><i class="fa-solid fa-address-card"></i> Posts</a></li>
        </ul>
    </div>
</aside>

