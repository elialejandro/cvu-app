<?php

namespace App\Livewire\Resume;

use App\Livewire\Forms\Resume\SkillForm;
use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public $skills = [];

    public SkillForm $form;

    public int $resumeId;

    public function mount(int $resumeId)
    {
        $this->resumeId = $resumeId;
        $this->form->setResumeId($resumeId);

        $this->skills = Skill::query()->where('resume_id', $resumeId)->get();
    }

    public function add()
    {
        $this->form->validate();
        $this->skills[] = $this->form->store();
        $this->form->reset();
        $this->form->setResumeId($this->resumeId);
    }

    public function render()
    {
        return view('livewire.resume.skills');
    }
}
