<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\Home\SendBusinessMail;

class SendBusinessEmailForm extends Component
{

    public $name;
    public $telephone;
    public $email;
    public $comp_name;
    public $target_segment;

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'telephone' => 'required|numeric|digits:10',
        'comp_name' => 'required',
        'target_segment' => 'required',
    ];

    public function sendEmail()
    {

        $this->validate();

        $data = (object) [
            'name' => $this->name,
            'telephone' => $this->telephone,
            'email' => $this->email,
            'comp_name' => $this->comp_name,
            'target_segment' => $this->target_segment,
        ];

        Mail::to(config('app.mail_business_email'))
            ->send(new SendBusinessMail($data))
        ;

        $this->dispatchBrowserEvent('thanks-message');

    }

    public function render()
    {
        return view('livewire.home.send-business-email-form');
    }
}
