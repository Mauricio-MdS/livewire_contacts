<?php

namespace App\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class FormContact extends Component
{
    #[Validate('required|min:3|max:50')]
    public $name;
    #[Validate('required|email|min:5|max:50')]
    public $email;
    #[Validate('required|min:5|max:20')]
    public $phone;
    public $error = '';
    public $success = '';


    public function newContact()
    {
        $this->validate();

        // store contact in database
        $result = Contact::firstOrCreate(
            [
                'name' => $this->name,
                'email' => $this->email,
            ],
            [
                'phone' => $this->phone,
            ]
        );

        if ($result->wasRecentlyCreated) {
            // clear all public properties
            $this->reset();

            $this->success = 'Contact created successfully';
        } else {
            $this->error = 'Contact already exists';
        }
    }
    public function render()
    {
        return view('livewire.form-contact');
    }
}
