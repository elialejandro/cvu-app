<?php

namespace App\Livewire;

use App\Models\Resume;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Str;
use Livewire\Component;

class ShowResumes extends Component
{
    public function render(): View
    {
        $resumes = Resume::query()->where('user_id', auth()->id())->get();
        return view('livewire.show-resumes', [
            'resumes' => $resumes
        ]);
    }

    public function create()
    {
        $resume = Resume::create([
            'user_id' => auth()->user()->id,
            'uid' => Str::random(8),
            'title' => 'Nuevo CV'
        ]);

        return redirect()->route('resume.edit', ['resume' => $resume->id]);
    }

    public function delete($id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();
    }

}
