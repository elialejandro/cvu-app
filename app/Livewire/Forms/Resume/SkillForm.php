<?php

namespace App\Livewire\Forms\Resume;

use App\Models\Skill;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SkillForm extends Form
{
    public $resume_id;

    #[Validate('required')]
    public $title;

    #[Validate('required')]
    public $value;

    public $image;

    public $color;

    public $publish = false;

    public function setResumeId(int $id)
    {
        $this->resume_id = $id;
    }

    public function store()
    {
        return Skill::create($this->all());
    }
}
