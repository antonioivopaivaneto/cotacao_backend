<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $id = auth('sanctum')->user()->id;
        $user = User::find($id);
        $user->update([
            'password' => Hash::make($request->password)
        ]);


        return response()->json([
            'message' => 'Senha alterada com sucesso.'

        ]);
    }
}
