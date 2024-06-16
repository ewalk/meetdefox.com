<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $language = \Config\Services::language();
        $language->setLocale('en'); // Set the desired language, e.g., 'en'

        return view('home');
    }

    public function mail()
    {
        // Load the email library
        $email = \Config\Services::email();

        // Get the posted data
        $request = \Config\Services::request();
        $message = $request->getPost('message');
        $email_sent = $request->getPost('email');
        $emailTo = getEnv("EMAIL");

        // Configure email settings
        $email->setFrom('your-email@example.com', 'Meet de Fox');
        $email->setTo($emailTo);
        $email->setSubject('New message');
        $email->setMessage("From: " . $email_sent . " \r\n" . $message);

        // Send the email
        if ($email->send()) {
            return 'Email successfully sent';
        } else {
            return 'Failed to send email: ' . $email->printDebugger(['headers']);
        }
    }
}
