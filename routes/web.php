<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ResetPasswordController;
use App\Livewire\AppointmentsComponent;
use App\Livewire\Backup;
use App\Livewire\Binnacle;
use App\Livewire\Blog;
use App\Livewire\Client;
use App\Livewire\Dashboard;
use App\Livewire\DeletedRecords;
use App\Livewire\Employee;
use App\Livewire\Packages;
use App\Livewire\Post;
use App\Livewire\PostView;
use App\Livewire\Services;
use App\Livewire\Virtual;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\RoutePath;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', LandingPageController::class)->name('home');
Route::get('posts/{id}', PostView::class)->name('post.id');

Route::get(RoutePath::for('password.request', '/forgot-password'), [PasswordResetLinkController::class, 'create'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.request');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    try {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ], [
            'token.required' => 'El token es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser una dirección de correo válida.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'La confirmación de la contraseña no coincide.',
        ]);
    } catch (ValidationException $e) {
        return back()->withErrors($e->errors());
    }

    $user = User::where('email', $request->email)->first();
    if ($user) {
        $user->forceFill([
            'password' => Hash::make($request->password)
        ])->setRememberToken(Str::random(60));
        $user->save();

        DB::table('password_reset_tokens')->where('email', $user->email)->delete();

        return redirect()->route('login')->with('success', 'Se ha actualizado la contraseña');
    } else {
        return back()->withErrors(['email' => [__('No se encontró al usuario.')]]);
    }
})->middleware('guest')->name('password.update');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('dashboard', Dashboard::class)->name('dashboard');
    Route::get('services', Services::class)->name('services');
    Route::get('packages', Packages::class)->name('packages');
    Route::get('virtual', Virtual::class)->name('virtual');
    Route::get('blog', Blog::class)->name('blog');
    Route::get('employees', Employee::class)->name('employees');
    Route::get('clients', Client::class)->name('clients');
    Route::get('posts', Post::class)->name('posts');
    Route::get('trash', DeletedRecords::class)->name('trash');
    Route::get('backup', Backup::class)->name('backup');
    Route::get('appointments', AppointmentsComponent::class)->name('appointments');
    Route::get('binnacle', Binnacle::class)->name('binnacle');
});
