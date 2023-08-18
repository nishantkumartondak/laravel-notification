<?php

namespace App\Http\Controllers;

use App\Repositories\SMSRepository;
use Illuminate\Http\Request;

class SMSController extends Controller
{
    public $smsRepository;

    public function __construct(SMSRepository $smsRepo)
    {
        $this->smsRepository = $smsRepo;
    }
    public function login()
    {
        $this->smsRepository->loginSMS();
        return redirect()->back()->with('success','Login SMS Send');
    }
    public function logout()
    {
        $this->smsRepository->logoutSMS();
        return redirect()->back()->with('success','Logout SMS Send');
    }
}
