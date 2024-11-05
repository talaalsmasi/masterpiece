<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderItemController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RescueAnimalController;
use App\Http\Controllers\Admin\BroomingServiceController;
use App\Http\Controllers\Admin\GroomingController;
use App\Http\Controllers\Admin\APetsForAdoptionController;
use App\Http\Controllers\Admin\AdoptionController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\AnimalTypeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\EventRegistrationController;
use App\Http\Controllers\Website\AuthController;
use App\Http\Controllers\Website\ProfileController;
use App\Http\Controllers\Website\UserAppointmentController;
use App\Http\Controllers\Website\UserBookingController;
use App\Http\Controllers\Website\UserRoomController;
use App\Http\Controllers\Website\BookingPaymentController;
use App\Http\Controllers\Website\AppointmentPaymentController;
use App\Http\Controllers\Website\PetsForAdoptionController;
use App\Http\Controllers\Website\UserBroomingController;
use App\Http\Controllers\Website\BroomingPaymentController;
use App\Http\Controllers\Website\UserRescueAnimalController;
use App\Http\Controllers\Website\UserProductController;
use App\Http\Controllers\Website\UserEventController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\UserPostController;
use App\Http\Controllers\Website\NotificationController;
use App\Http\Controllers\Doctor\DrDashboardController;
use App\Http\Controllers\Doctor\DrInfoController;
use App\Http\Controllers\Doctor\DrAppointmentController;
use App\Http\Controllers\Doctor\DrPostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/layouts', function () {
    return view('layouts.index');
});

//Admindashboard

// مجموعة الروابط الخاصة بالـ Admin مع Middleware للتحقق من `role_id = 1`
Route::middleware(['auth', 'checkRole:1'])->prefix('admin')->name('admin.')->group(function () {

    // روابط الموارد الخاصة بالـ Admin
    Route::resource('roles', RoleController::class);
    Route::resource('dashboard', AdminDashboardController::class);
    Route::resource('users', UserController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('pets', PetController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('grooming_services', BroomingServiceController::class);
    Route::resource('grooming', GroomingController::class);
    Route::resource('products', ProductController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('orders.order_items', OrderItemController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('rescue_animals', RescueAnimalController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('petsForAdoption', APetsForAdoptionController::class);
    Route::resource('adoptions', AdoptionController::class);
    Route::resource('donations', DonationController::class);
    Route::resource('posts', PostController::class);
    Route::resource('feedback', controller: FeedbackController::class);
    Route::resource('events', controller: EventController::class);
    Route::resource('animaltypes', AnimalTypeController::class);
    Route::resource('event-registrations', EventRegistrationController::class);


    // رابط خاص لجلب الأوقات المحجوزة
    Route::get('/get-reserved-times', function (Request $request) {
        $reservedTimes = Appointment::where('appointment_date', $request->appointment_date)
                                    ->where('doctor_id', $request->doctor_id)
                                    ->pluck('appointment_time')
                                    ->toArray();
        return response()->json(['reservedTimes' => $reservedTimes]);
    });
});

//Drdashboard

Route::middleware(['auth', 'checkRole:3'])->prefix('doctor')->name('doctor.')->group(function () {
    // روابط الموارد الخاصة بالـ Admin
    Route::resource('dashboard', DrDashboardController::class);

    // صفحة عرض المعلومات فقط
    Route::get('/info', [DrInfoController::class, 'show'])->name('info');

    // صفحة تعديل المعلومات
    Route::get('/edit', [DrInfoController::class, 'edit'])->name('edit');
    Route::post('/update', [DrInfoController::class, 'update'])->name('update');

    // عرض المواعيد وتحديث الحالة
    Route::get('appointments', [DrAppointmentController::class, 'showAppointments'])->name('appointments.index');
    Route::put('appointments/{appointment}/approve', [DrAppointmentController::class, 'approve'])->name('appointments.approve');
    Route::put('appointments/{appointment}/reject', [DrAppointmentController::class, 'reject'])->name('appointments.reject');
    Route::put('appointments/{appointment}/pending', [DrAppointmentController::class, 'pending'])->name('appointments.pending');



    // Route::get('/posts', [DrPostController::class, 'index'])->name('posts.index');
    // Route::get('/posts/create', [DrPostController::class, 'create'])->name('posts.create');
    // Route::post('/posts', [DrPostController::class, 'store'])->name('posts.store');
    // Route::get('/posts/{id}/edit', [DrPostController::class, 'edit'])->name('posts.edit');
    // Route::put('/posts/{id}', [DrPostController::class, 'update'])->name('posts.update');
    // Route::delete('/posts/{id}', [DrPostController::class, 'destroy'])->name('posts.destroy');
});




//home , signup and login

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/feedback', [HomeController::class, 'showFeedback'])->name('feedback');
Route::get('/signup', [AuthController::class, 'showRegisterForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/contactUs', [HomeController::class, 'showContact'])->name('contactUs.index');
Route::post('/send-message', [HomeController::class, 'sendMessage'])->name('send.message');

//profile

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/add-pet', [ProfileController::class, 'showAddPetForm'])->name('profile.add-pet-form');
    Route::post('/profile/add-pet', [ProfileController::class, 'storePet'])->name('profile.add-pet');
    Route::get('/profile/edit-pet/{pet}', [ProfileController::class, 'editPetForm'])->name('profile.edit-pet-form');
    Route::post('/profile/edit-pet/{pet}', [ProfileController::class, 'updatePet'])->name('profile.update-pet');
    Route::delete('/profile/destroy-pet/{pet}', [ProfileController::class, 'destroyPet'])->name('profile.destroy-pet');
    Route::get('/profile/edit', [ProfileController::class, 'editInfo'])->name('profile.editInfo');
    Route::get('/profile/show', [ProfileController::class, 'showInfo'])->name('profile.showInfo');
    Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/ratings', [ProfileController::class, 'showRatingPage'])->name('ratings.show');
    Route::post('/ratings', [ProfileController::class, 'storeRating'])->name('ratings.store');
});






//appointments
Route::get('/appointment/create', [UserAppointmentController::class, 'create'])->name('appointment.create');
Route::post('/appointment/payment', [AppointmentPaymentController::class, 'showPaymentPage'])->name('appointment.payment');
Route::post('/appointment/payment/process', [AppointmentPaymentController::class, 'processPayment'])->name('appointment.payment.process');
Route::get('/appointment/{id}', [UserAppointmentController::class, 'show'])->name('appointment.show');
Route::get('/get-booked-times', [UserAppointmentController::class, 'getBookedTimes']);





// booking
Route::get('/rooms', [UserRoomController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{id}', [UserRoomController::class, 'show'])->name('rooms.show');


Route::prefix('bookings')->group(function () {
    // Display form to create a new booking
    Route::get('/create/{room}', [UserBookingController::class, 'create'])->name('book-room');
    // Store a new booking
    Route::post('/', [UserBookingController::class, 'store'])->name('bookings.store');
    // Show booking details
    Route::get('{id}', [UserBookingController::class, 'show'])->name('bookings.show');
});


Route::post('/bookings/payment', [BookingPaymentController::class, 'showPaymentPage'])->name('bookings.payment');
Route::post('/payments/process', [BookingPaymentController::class, 'processPayment'])->name('payments.process');



//adoptions

// Display all cats for adoption
Route::get('/adoption/pets', [PetsForAdoptionController::class, 'index'])->name('adoption.pets');

// Display the adoption form for a specific cat (pet)
Route::get('/adopt/{id}', [PetsForAdoptionController::class, 'showAdoptionForm'])->name('adopt.form');

// Handle submission of the adoption request for a specific cat (pet)
Route::post('/adopt/{id}', [PetsForAdoptionController::class, 'submitAdoption'])->name('adopt.submit');

// Route to show the requests
Route::get('/adoption/request', [PetsForAdoptionController::class, 'showRequest'])->name('adoption.request');

Route::post('/adoptions/cancel/{id}', [PetsForAdoptionController::class, 'cancelRequest'])->name('adoptions.cancel');







//brooming

// Route لعرض صفحة إنشاء الموعد
Route::get('/grooming/create', [UserBroomingController::class, 'create'])->name('grooming.create');

// Route لعرض صفحة الدفع بعد اختيار التفاصيل
Route::post('/brooming/payment', [BroomingPaymentController::class, 'showPaymentPage'])->name('brooming.payment');

// Route لمعالجة الدفع وحفظ الحجز
Route::post('/brooming/payment/process', [BroomingPaymentController::class, 'processPayment'])->name('brooming.payment.process');

Route::get('/brooming/{id}', [UserBroomingController::class, 'show'])->name('brooming.show');

Route::get('/get-booked-appointments', [UserBroomingController::class, 'getBookedAppointments']);





// donation

// مسار لعرض الحيوانات المحتاجة للتبرع

// مسار لعرض الحيوانات المحتاجة للتبرع
Route::get('/rescue-animals', [UserRescueAnimalController::class, 'index'])->name('rescueAnimals.index');

// مسار لعرض تفاصيل الحيوان المحتاج للتبرع
Route::get('/rescue-animals/{id}', [UserRescueAnimalController::class, 'show'])->name('rescueAnimals.show');
Route::get('/rescue-animals/{id}/donate', [UserRescueAnimalController::class, 'donate'])->name('rescueAnimals.donate');
Route::post('/rescue-animals/{id}/donate', [UserRescueAnimalController::class, 'processDonation'])->name('rescueAnimals.processDonation');
Route::get('/user/donations', [UserRescueAnimalController::class, 'showUserDonations'])->name('user.donations');


//ecommerce


Route::get('/products', [UserProductController::class, 'showProducts'])->name('products.showProducts');
Route::get('/products/{id}', [UserProductController::class, 'showProduct'])->name('product.single');
Route::get('/cart', [UserProductController::class, 'showCart'])->name('cart.show');
Route::get('/cart/add/{id}', [UserProductController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{id}', [UserProductController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [UserProductController::class, 'showCheckout'])->name('cart.showCheckout');
Route::post('/checkout', [UserProductController::class, 'checkout'])->name('cart.checkout');
Route::get('/cart/increase/{id}', [UserProductController::class, 'increaseQuantity'])->name('cart.increase');
Route::get('/cart/decrease/{id}', [UserProductController::class, 'decreaseQuantity'])->name('cart.decrease');
Route::post('/cart/apply-coupon', [UserProductController::class, 'applyCoupon'])->name('cart.applyCoupon');
Route::get('/wishlist', [UserProductController::class, 'showWishlist'])->name('wishlist.show');
Route::get('/wishlist/add/{productId}', [UserProductController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist/remove/{productId}', [UserProductController::class, 'removeFromWishlist'])->name('wishlist.remove');
Route::get('/user/orders', [UserProductController::class, 'showUserOrders'])->name('user.orders');



//posts
Route::get('/posts', [UserPostController::class, 'index'])->name('posts.index');
Route::get('/users/{id}/posts', [UserPostController::class, 'showUserPosts'])->name('users.posts');
Route::post('/posts/{post}/like', [UserPostController::class, 'like'])->name('posts.like')->middleware('auth');

//events
Route::get('/events', [UserEventController::class, 'showEvents'])->name('events.show');
Route::get('/events/{id}', [UserEventController::class, 'show'])->name('events.details');
Route::post('/events/{id}/register', [UserEventController::class, 'register'])->name('events.register');
Route::get('/user/events', [UserEventController::class, 'myRegisteredEvents'])->name('user.events');
Route::post('/events/{event}/unregister', [UserEventController::class, 'unregister'])->name('events.unregister');

//notifications
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');

























































