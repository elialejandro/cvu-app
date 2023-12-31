
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
{{--                        <x-input type="file" class="w-full" wire:model="form.image"></x-input>--}}
                        <div
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <!-- File Input -->
                            <input type="file" wire:model="form.image">

                            <!-- Progress Bar -->
                            <div x-show="isUploading">
                                <progress max="100" x-bind:value="progress"></progress>
                            </div>
                        </div>
                        @error('form.image') <span class="text-red-500">{{ $message }}</span> @enderror
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
                <div class="mb-4 flex flex-row items-center gap-4">
                    @if($skill->image)
                        <img src="{{ $skill->image }}" alt="{{ $skill->title }}" class="mt-6 mr-4 w-12 h-12 bg-cover rounded-full border">
                    @else
                        <div class="w-12 h-12 rounded-full mt-6 mr-4" style="background-color: {{ $skill->color ?? '#ABCD00' }}"></div>
                    @endif
                    <div class="flex-1">
                        <div class="font-semibold mb-1">{{ $skill->title }}</div>
                        <div class="w-full border rounded-md">
                            <div class="p-2 rounded-md" style="width: {{ $skill->value }}%; background-color: {{ $skill->color ?? '#ABCD00' }}">
                                <span class="font-bold [text-shadow:1px_1px_1px_var(--tw-shadow-color)] shadow-white">{{ $skill->value }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button class="w-8 h-8 rounded-md border hover:border-red-600 flex items-center justify-center" wire:click="delete({{ $skill->id }})" title="Eliminar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
