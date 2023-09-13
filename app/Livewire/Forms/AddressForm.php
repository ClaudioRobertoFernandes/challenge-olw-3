<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Rule;
use Livewire\Form;

class AddressForm extends Form
{
    #[Rule('required|string|max:9', message: 'Cep inválido')]
    public string $zipcode = "";

    #[Rule('required|string|max:255')]
    public string $address = "";

    #[Rule('required|string|max:255')]
    public string $city = "";

    #[Rule('required|string|max:2')]
    public $state = "";

    #[Rule('required|string|max:255')]
    public string $district = "";

    #[Rule('nullable|string|max:255')]
    public $number = "";

    #[Rule('nullable|string|max:255')]
    public string $complement = "";

    public function findAddress(): void
    {
        $zipcode = preg_replace('/\D/', '', $this->zipcode);
        $url = "https://viacep.com.br/ws/{$this->zipcode}/json/";
        $address = Http::get($url)->object();

        if (!$address || (isset($address->erro) && $address->erro)) {
            $this->addError('address.zipcode', 'Cep Inválido');
            return;
        }

        $this->address = $address->logradouro;
        $this->city = $address->localidade;
        $this->state = $address->uf;
        $this->district = $address->bairro;
    }
}

