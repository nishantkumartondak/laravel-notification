<?php

namespace App\Repositories;

use App\Jobs\LoginSMSJob;
use App\Jobs\LogoutSMSJob;
use Illuminate\Support\Facades\Log;

class SMSRepository
{
    public function loginSMS()
    {
        // Log::info('Login SMS send');
        dispatch(new LoginSMSJob());
    }
    public function logoutSMS()
    {
        // Log::info('Logout SMS send');
        dispatch(new LogoutSMSJob());
    }
}
