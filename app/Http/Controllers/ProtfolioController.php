<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingFormRequest;
use App\Http\Requests\StoreProtfolioRequest;
use App\Http\Requests\UpdateProtfolioRequest;
use App\Mail\ContactSubmissionAdmin;
use App\Mail\ContactSubmissionConfirmation;
use App\Models\Protfolio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('site.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProtfolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Protfolio $protfolio)
    {
        return view('site.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Protfolio $protfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProtfolioRequest $request, Protfolio $protfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Protfolio $protfolio)
    {
        //
    }

    public function services()
    {
        return view('site.service');
    }

    public function about()
    {
        return view('site.about');
    }

    public function projects()
    {
        $projects = Protfolio::all();
        return view('site.project', ['projects' => $projects]);
    }

    public function booking()
    {
        return view('site.booking');
    }

    public function bookingDate(Request $request)
    {
        $type = $request->query('type');

        if (!in_array($type, ['Discovery Call', 'Consulting Session'], true)) {
            return redirect()->route('booking');
        }

        return view('site.celender', ['selectedType' => $type]);
    }

    public function bookingDetails(Request $request)
    {
        $type = $request->query('type');
        $date = $request->query('date');
        $time = $request->query('time');

        if (!$type || !$date || !$time) {
            return redirect()->route('booking');
        }

        return view('site.detailcontact', [
            'selectedType' => $type,
            'selectedDate' => $date,
            'selectedTime' => $time,
        ]);
    }

    public function submitBooking(BookingFormRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['budget'] = $data['budget'] ?? null;
        $data['source'] = $data['source'] ?? null;

        $adminEmail = config('mail.admin_address', config('mail.from.address'));

        Mail::to($adminEmail)->send(new ContactSubmissionAdmin($data));
        Mail::to($data['email'])->send(new ContactSubmissionConfirmation($data));

        return redirect()->route('booking')->with('status', 'Thanks! Your booking request has been sent. Please check your email.');
    }
}
