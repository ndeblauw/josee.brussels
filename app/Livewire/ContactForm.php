<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    public bool $open = false;
    public bool $success = false;

    #[Validate('required|string|max:255')]
    public string $name = '';
    #[Validate('required|email:rfc,dns|max:255')]
    public string $email = '';

    public function submit()
    {
        $this->validate();

        $contact = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        if($contact) {
            $this->success = true;
            $this->reset(['name', 'email']);
        } else {
            $this->success = false;
        }
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
