<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class LoginForm extends Component
{
    public $username;
    public $password;

    protected $rules = [
        'username' => ['required', 'string'],
        'password' => ['required', 'string'],
    ];

    public function messages(): array
    {
        return [
            'username.required' => __('validation.required', ['attribute' => __('Username')]),
            'password.required' => __('validation.required', ['attribute' => __('Password')]),
        ];
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.
    }

    public function render()
    {
        return view('livewire.auth.login-form');
    }
}
