<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\UserResource;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Get current authenticated user
     *
     * @return UserResource
     */
    public function index()
    {
        return new UserResource(auth()->user());
    }
}
