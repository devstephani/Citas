<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function resetPassword(Request $request)
    {
        $user = User::where('email',  '=', $request->correo)->first();

        if (!empty($user)) {
            try {
                $status = Password::sendResetLink(['email' => $request->correo]);

                return $status === Password::RESET_LINK_SENT
                    ? redirect()->back()->with('success', 'Se envió el código de recuperación al correo adjuntado.')
                    : redirect()->back()->with('error', 'Hubo un problema al intentar enviar el correo.');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error', 'Hubo un problema al intentar enviar el correo.');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Usuario no encontrado.'
        ]);
    }
}
