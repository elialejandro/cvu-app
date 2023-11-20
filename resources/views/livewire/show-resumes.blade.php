<div class="p-5">

    <div class="flex justify-end">
        <x-button wire:click="create">Crear</x-button>
    </div>

    <div class="grid grid-cols-3 gap-4">
        @foreach($resumes as $resume)
        <div class="p-4 bordered shadow-md rounded-md">
            <div class="text font-bold">{{ $resume->title }}</div>
            <div class="py-2">
                <span class="text-gray-500">{{ $resume->created_at->locale('es-MX.UTF8')->isoFormat('DD [de] MMMM [de] YYYY, HH:mm a')  }}</span>
            </div>
            <div class="flex gap-3 justify-end">
                <a href="{{ route('resume.edit', ['resume' => $resume->id]) }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Editar
                </a>
                <x-danger-button wire:click="delete({{ $resume->id }})">Borrar</x-danger-button>
            </div>
        </div>
        @endforeach
    </div>
</div>
