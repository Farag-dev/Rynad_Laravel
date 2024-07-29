<?php

namespace App\Http\Controllers;

use App\Models\CONTACT;
use Illuminate\Http\Request;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Configuration;
use Brevo\Client\Model\SendSmtpEmail;

class CONTACTController extends Controller
{
    public function sendForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Extract the form data
        $name = $request->input('name');
        $email = $request->input('email');
        $messageContent = $request->input('message');

        // Configure Brevo API client
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('BREVO_API_KEY'));
        $apiInstance = new TransactionalEmailsApi(
            new \GuzzleHttp\Client(),
            $config
        );

        // Prepare the email data
        $sendSmtpEmail = new SendSmtpEmail([
            'sender' => ['email' => $email , 'name' => $name],
            'to' => [['email' => 'faragabouelezz55@gmail.com', 'name' => 'Rynad GyardNet Admin']],
            'subject' => 'New Form Submission',
            'htmlContent' => "<h1>New Form Submission</h1><p><strong>Name:</strong> $name</p><p><strong>Email:</strong> $email</p><p><strong>Message:</strong> $messageContent</p>"
        ]);


            $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
            return view('frontend.contactverification');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CONTACT $cONTACT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CONTACT $cONTACT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CONTACT $cONTACT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CONTACT $cONTACT)
    {
        //
    }
}
