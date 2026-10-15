<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactForm as ContactFormModel;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $order_number = '';
    public $message = '';

    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:30',
            'subject' => 'required|in:General Inquiry,Order Support,Product Inquiry,Returns and Refunds,Other',
            'order_number' => 'nullable|string|max:100',
            'message' => 'required|string|max:5000',
        ]);

        ContactFormModel::create($validated);

        // Temporary: show a success message.
        session()->flash(
            'success',
            'Your message has been submitted successfully!'
        );

        $this->reset([
            'name',
            'email',
            'phone',
            'subject',
            'order_number',
            'message',
        ]);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
