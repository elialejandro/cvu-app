<?php

namespace App\Livewire\Resume;

use App\Livewire\Forms\Resume\EditForm;
use App\Models\Resume;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Edit extends Component
{
    public EditForm $form;

    public function mount(Resume $resume)
    {
        $this->form->setResume($resume);
    }

    public function render()
    {
        return view('livewire.resume.edit');
    }

    public function save()
    {
        $this->form->validate();
        $this->form->update();
    }
}
