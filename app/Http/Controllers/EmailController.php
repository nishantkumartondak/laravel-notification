<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\EmailRepositoryInterface;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    private $emailRepository;

    public function __construct(EmailRepositoryInterface $notificationRepo)
    {
        $this->emailRepository = $notificationRepo;
    }
    public function login()
    {
        $this->emailRepository->loginEmail();
        return redirect()->back()->with('success', 'Login Email Send');
    }
    public function logout()
    {
        $this->emailRepository->logoutEmail();
        return redirect()->back()->with('success', 'Logout Email Send');
    }
}
