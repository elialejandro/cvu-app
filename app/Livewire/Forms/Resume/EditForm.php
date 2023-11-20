<?php

namespace App\Livewire\Forms\Resume;

use App\Models\Resume;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EditForm extends Form
{
    public ?Resume $resume;

    #[Validate('required|max:255')]
    public $title;

    #[Validate('required|min:5|max:1024')]
    public $content;

    #[Validate('required|min:1|max:18')]
    public $phone;

    #[Validate('required|max:255')]
    public $address_1;

    #[Validate('nullable|max:255')]
    public $address_2;

    #[Validate('required|max:255')]
    public $city;

    #[Validate('required|max:255')]
    public $state;

    #[Validate('required|max:255')]
    public $country;

    #[Validate('required|max:255')]
    public $postal_code;

    public function setResume(Resume $resume)
    {
        $this->resume = $resume;

        $this->title = $resume->title;
        $this->content = $resume->content;
        $this->phone = $resume->phone;
        $this->address_1 = $resume->address_1;
        $this->address_2 = $resume->address_2;
        $this->city = $resume->city;
        $this->state = $resume->state;
        $this->country = $resume->country;
        $this->postal_code = $resume->postal_code;
    }

    public function update()
    {
        $this->resume->update(
            $this->all()
        );
    }

}
