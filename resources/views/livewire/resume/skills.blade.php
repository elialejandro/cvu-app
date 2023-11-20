
<div class="max-w-7xl mx-auto pb-12">
    <div class="flex flex-row w-full justify-center gap-4">
        <div class="w-1/2 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="p-5" wire:submit="add">

                    <div class="mb-4">
                        <x-label>Título</x-label>
                        <x-input class="w-full" wire:model="form.title"></x-input>
                        @error('form.title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="col-span-1">
                            <x-label>Puntuación</x-label>
                            <x-input type="number" class="w-full" wire:model="form.value" min="0" step="5" max="100"></x-input>
                            @error('form.value') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="col-span-1">
                            <x-label>Color</x-label>
                            <x-input type="color" class="w-full" wire:model="form.color"></x-input>
                            @error('form.color') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <x-label>Imagen</x-label>
                        <x-input type="file" class="w-full" wire:model="form.imagen"></x-input>
                        @error('form.imagen') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <label for="publish" class="flex items-center">
                            <x-checkbox id="publish" name="publish" wire:model="form.publish"/>
                            <span class="ms-2 text-sm text-gray-600">Publicar</span>
                        </label>
                    </div>

                    <div class="flex justify-end">
                        <x-button>Agregar</x-button>
                    </div>

                </form>
            </div>
        </div>

        <div class="w-1/2 sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($skills as $skill)
                <div>
                    {{ $skill->id }}
                    {{ $skill->resume_id }}
                    {{ $skill->title }}
                    {{ $skill->value }}
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
