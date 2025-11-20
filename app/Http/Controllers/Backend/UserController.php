<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function createRandomUser()
    {
        User::create([
            'name' => 'User ' . Str::random(5),
            'email' => Str::random(5) . '@example.com',
            'password' => bcrypt('password123'),
        ]);

        \Log::info('User baru berhasil dibuat dari scheduler.');
    }

    public function deleteOneUser()
    {
        $user = User::first();

        if ($user) {
            $user->delete();
            \Log::info("User {$user->id} dihapus dari scheduler.");
        } else {
            \Log::info("Tidak ada user untuk dihapus dari scheduler.");
        }
    }
}
