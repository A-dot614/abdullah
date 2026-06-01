<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactSubmissionAdmin;
use App\Mail\ContactSubmissionConfirmation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $adminEmail = config('mail.admin_address', config('mail.from.address'));

        Mail::to($adminEmail)->send(new ContactSubmissionAdmin($data));
        Mail::to($data['email'])->send(new ContactSubmissionConfirmation($data));

        return redirect()->route('contact')->with('status', 'Thanks! Your message has been sent. I will reply soon.');
    }
}
