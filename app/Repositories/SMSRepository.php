<?php

namespace App\Repositories;

use App\Jobs\LoginSMSJob;
use App\Jobs\LogoutSMSJob;
use App\Repositories\Interfaces\SMSRepositoryInterface;
use Illuminate\Support\Facades\Log;

class SMSRepository implements SMSRepositoryInterface
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
