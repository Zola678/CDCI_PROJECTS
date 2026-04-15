<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Str;

class GenerateTokenAfterLogin
{
    public function handle(Login $event): void
    {
        $event->user->update([
            'token' => Str::random(60)
        ]);
    }
}