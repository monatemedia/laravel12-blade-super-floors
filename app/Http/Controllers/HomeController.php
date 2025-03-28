<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Handle contact form submission.
     */
    public function store(Request $request)
    {
        // Validate form fields
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:10',
        ]);

        // Send email notification (optional)
        Mail::raw("You received a new message from: {$request->name}\n\n{$request->message}", function ($mail) use ($request) {
            $mail->to('edward@monatemedia.com')
                ->subject('New Contact Form Submission')
                ->replyTo($request->email);
        });

        // Redirect with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
