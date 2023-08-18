<?php

namespace App\Repositories;

use App\Repositories\Interfaces\EmailRepositoryInterface;
use App\Jobs\LoginEmailJob;
use App\Jobs\LogoutEmailJob;
use Illuminate\Support\Facades\Log;

class EmailRepository implements EmailRepositoryInterface
{
    public function loginEmail()
    {
        // Log::info('Login Email send');
        dispatch(new LoginEmailJob());
    }
    public function logoutEmail()
    {
        // Log::info('Logout Email send');
        dispatch(new LogoutEmailJob());
    }
}
