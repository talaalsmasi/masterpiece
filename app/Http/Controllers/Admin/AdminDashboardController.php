<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pet;
use App\Models\Service;
use App\Models\Adoption;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // جمع الإحصائيات من قاعدة البيانات
        $veterinariansCount = User::where('role_id', 3)->count(); // تعديل هنا للتحقق من role_id = 1
        $registeredPetsCount = Pet::count();
        $servicesProvidedCount = Service::count(); // إعادة تفعيل المتغير
        $adoptionsCount = Adoption::count(); // إعادة تفعيل المتغير

        // إرجاع البيانات إلى العرض
        return view('Admin.dashboard', compact(
            'veterinariansCount',
            'registeredPetsCount',
            'servicesProvidedCount',
            'adoptionsCount'
        ));
    }
}
