<div class="p-5">

    <div class="flex justify-end">
        <x-button wire:click="create">Crear</x-button>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="p-4 bordered shadow-md rounded-md">
            <div class="text font-bold">Resume 1</div>
            <div class="py-2">
                19 de noviembre de 2023
            </div>
            <div class="flex gap-3 justify-end">
                <x-button>Editar</x-button>
                <x-danger-button>Borrar</x-danger-button>
            </div>
        </div>
    </div>
</div>
