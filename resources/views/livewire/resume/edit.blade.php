<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="p-5" wire:submit="save">

                    <div class="mb-4">
                        <x-label>Título</x-label>
                        <x-input class="w-full" wire:model="form.title"></x-input>
                        @error('form.title') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        <x-label>Contenido</x-label>
                        <textarea wire:model="form.content" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                        @error('form.content') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-4 gap-4 mb-4">
                        <div class="col-span-1">
                            <x-label>Teléfono</x-label>
                            <x-input class="w-full" wire:model="form.phone"></x-input>
                            @error('form.phone') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1">
                            <x-label>Dirección (1)</x-label>
                            <x-input class="w-full" wire:model="form.address_1"></x-input>
                            @error('form.address_1') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1">
                            <x-label>Dirección 2</x-label>
                            <x-input class="w-full" wire:model="form.address_2"></x-input>
                            @error('form.address_2') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1">
                            <x-label>Ciudad</x-label>
                            <x-input class="w-full" wire:model="form.city"></x-input>
                            @error('form.city') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div class="col-span-1">
                            <x-label>Estado</x-label>
                            <x-input class="w-full" wire:model="form.state"></x-input>
                            @error('form.state') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1">
                            <x-label>País</x-label>
                            <x-input class="w-full" wire:model="form.country"></x-input>
                            @error('form.country') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class="col-span-1">
                            <x-label>Código Postal</x-label>
                            <x-input type="number" class="w-full" wire:model="form.postal_code"></x-input>
                            @error('form.postal_code') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <x-button>Guardar</x-button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <livewire:resume.skills :resume_id="$form->resume->id" />

</div>
