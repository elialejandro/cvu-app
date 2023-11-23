<?php

namespace App\Livewire\Resume;

use App\Livewire\Forms\Resume\SkillForm;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Skills extends Component
{
    use WithFileUploads;

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

        if ($this->form->image) {
            $this->form->image = Storage::publicUrl($this->form->image->store('skills'));
        }

        $this->skills[] = $this->form->store();
        $this->form->reset();
        $this->form->setResumeId($this->resumeId);
    }

    public function delete(int $id)
    {
        $skill = Skill::query()->findOrFail($id);

        if ($skill->image) {
            Storage::delete('skills/' . Str::of($skill->image)->after('skills/'));
        }

        $skill->delete();
        $this->skills = $this->skills->filter(fn($skill) => $skill->id !== $id);
    }

    public function render()
    {
        return view('livewire.resume.skills');
    }
}
