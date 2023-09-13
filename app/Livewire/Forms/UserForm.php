<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule('required|email')]
    public string $email = "";

    #[Rule('required|min:3|max:255')]
    public string $name = "";

    #[Rule('nullable|min:3|cpf')]
    public string $cpf = "";
}
