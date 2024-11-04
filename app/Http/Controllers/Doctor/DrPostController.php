<?php
namespace App\Http\Doctor\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DrPostController extends Controller
{
    // عرض جميع البوستات الخاصة بالطبيب المسجل
    public function index()
    {
        // جلب بيانات المستخدم المسجل
        $doctor = Auth::user();

        // جلب جميع البوستات الخاصة بالطبيب
        $posts = Post::where('user_id', $doctor->id)->get();

        // عرض صفحة البوستات
        return view('doctor.posts.index', compact('posts'));
    }

    // عرض نموذج إضافة بوست جديد
    public function create()
    {
        return view('doctor.posts.create');
    }

    // حفظ البوست الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // حفظ البوست الجديد
        $post = new Post();
        $post->user_id = Auth::id();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];

        // إذا كان هناك صورة تم رفعها، احفظ مسارها
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img/posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('doctor.posts.index')->with('success', 'Post created successfully.');
    }

    // عرض نموذج تعديل بوست
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        // التحقق من أن المستخدم هو صاحب البوست
        if ($post->user_id != Auth::id()) {
            return redirect()->route('doctor.posts.index')->with('error', 'Unauthorized action.');
        }

        return view('doctor.posts.edit', compact('post'));
    }

    // تحديث بيانات البوست
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        // التحقق من البيانات المدخلة
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];

        // إذا كان هناك صورة جديدة تم رفعها، احفظ مسارها
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img/posts', 'public');
            $post->image = $imagePath;
        }

        $post->save();

        return redirect()->route('doctor.posts.index')->with('success', 'Post updated successfully.');
    }

    // حذف بوست
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // التحقق من أن المستخدم هو صاحب البوست
        if ($post->user_id != Auth::id()) {
            return redirect()->route('doctor.posts.index')->with('error', 'Unauthorized action.');
        }

        $post->delete();

        return redirect()->route('doctor.posts.index')->with('success', 'Post deleted successfully.');
    }
}
