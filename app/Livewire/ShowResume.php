<?php

namespace App\Livewire;

use App\Models\Resume;
use Livewire\Component;

class ShowResume extends Component
{

    public Resume $resume;

    public function mount($uid): void
    {
        $this->resume = Resume::query()->where('uid', $uid)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.show-resume')
            ->layout('layouts.guest');
    }
}
