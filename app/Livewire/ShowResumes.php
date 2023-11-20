<?php

namespace App\Livewire;

use App\Models\Resume;
use Livewire\Component;

class ShowResumes extends Component
{
    public function render()
    {
        return view('livewire.show-resumes');
    }

    public function create()
    {
        $resume = Resume::create([
            'title' => 'Nuevo CV'
        ]);

        return redirect()->route('resume.edit', ['id' => $resume->id]);
    }

}
