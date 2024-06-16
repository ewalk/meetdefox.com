<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($email_sent = 0): string
    {
        $language = \Config\Services::language();
        $language->setLocale('en'); // Set the desired language, e.g., 'en'

        return view('home', array("is_email_sent" => $email_sent));
    }

    public function mail()
    {
        // Load the email library
        $email = \Config\Services::email();

        // Get the posted data
        $request = \Config\Services::request();
        $message = $request->getPost('message');
        $email_sent = $request->getPost('email');
        $name_sent = $request->getPost('name');
        $emailTo = getEnv("EMAIL");

        // Configure email settings
        $email->setFrom('me@meetdefox.com', 'Meet de Fox');
        $email->setTo($emailTo);
        $email->setSubject('New message from ' . $name_sent);
        $email->setMessage("From: " . $email_sent . " \r\nName: " . $name_sent  . " \r\n" . $message);

        // Send the email
        if ($email->send()) {
            return redirect()->to(base_url("/1#contact"));
        } else {
            return redirect()->to(base_url("/2#contact"));
        }
    }
}
