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
    <div class="sidebar-content" style="height: 150vh">
        <p style="font-size: 40px"><img style="height:30%;width:30%" src="{{ asset('images/petpaladmin.png') }}" alt=""> PetPal</p>
        <ul class="nav-links">
            <li><a class="active" href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.roles.index') }}"><i class="fas fa-user-shield"></i> Roles</a></li>
            <li><a href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> Users</a></li>
            <li><a href="{{ route('admin.doctors.index') }}"><i class="fas fa-user-md"></i> Doctors</a></li>
            <li><a href="{{ route('admin.animaltypes.index') }}"><i class="fas fa-paw"></i> Animal Type</a></li>
            <li><a href="{{ route('admin.pets.index') }}"><i class="fas fa-dog"></i> Pets</a></li>
            <li><a href="{{ route('admin.services.index') }}"><i class="fas fa-concierge-bell"></i> Services</a></li>
            <li><a href="{{ route('admin.appointments.index') }}"><i class="fas fa-calendar-alt"></i> Appointments</a></li>
            <li><a href="{{ route('admin.rooms.index') }}"><i class="fa-solid fa-igloo"></i> Rooms</a></li>
            <li><a href="{{ route('admin.bookings.index') }}"><i class="fas fa-home"></i> Bookings</a></li>
            <li><a href="{{ route('admin.grooming_services.index') }}"><i class="fa-solid fa-scissors"></i> Grooming services</a></li>
            <li><a href="{{ route('admin.grooming.index') }}"><i class="fa-solid fa-shower"></i> Grooming</a></li>
            <li><a href="{{ route('admin.categories.index') }}"><i class="fas fa-tags"></i> Products Categories</a></li>
            <li><a href="{{ route('admin.products.index') }}"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="{{ route('admin.orders.index') }}"><i class="fas fa-shopping-cart"></i> Orders</a></li>
            <li><a href="{{ route('admin.petsForAdoption.index') }}"><i class="fas fa-heart"></i>For Adoptions</a></li>
            <li><a href="{{ route('admin.rescue_animals.index') }}"><i class="fa-solid fa-dog"></i> resuce animals</a></li>
            <li><a href="{{ route('admin.adoptions.index') }}"><i class="fas fa-heart"></i> Adoptions</a></li>
            <li><a href="{{ route('admin.donations.index') }}"><i class="fas fa-donate"></i> Donation</a></li>
            <li><a href="{{ route('admin.posts.index') }}"><i class="fa-solid fa-address-card"></i> Posts</a></li>
            <li><a href="{{ route('admin.feedback.index') }}"><i class="fa-regular fa-comments"></i> Feedback</a></li>
        </ul>
    </div>
</aside>

