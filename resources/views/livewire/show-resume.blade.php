<div class="flex flex-col w-1/2 p-12 mx-auto">

    <div class="mb-8">
        <h1 class="font-bold text-center text-3xl">{{ $resume->user->name }}</h1>
        <h2 class="font-bold text-center text-2xl">{{ $resume->title }}</h2>
    </div>

    <div>
        <h4 class="py-4 font-bold text-xl border-y-2 border-y-red-400 mb-8 text-center">
            Habilidades
        </h4>

        <div class="space-y-4 w-full">
            @foreach($resume->skills as $skill)
                <div class="mb-4 flex flex-row justify-start items-center w-full">

                    @if($skill->imagen)
                    <img src="{{ $skill->imagen }}" alt="{{ $skill->title }}" class="mt-6 w-12 h-12 bg-cover rounded-full">
                    @else
                        <div class="w-12 h-12 rounded-full mt-6 mr-4" style="background-color: {{ $skill->color ?? '#ABCD00' }}"></div>
                    @endif


                    <div class="flex-1">
                        <div class="font-semibold mb-1 flex justify-between">
                            <div>{{ $skill->title }}</div>

                            <div>{{ $skill->value }}%</div>
                        </div>
                        <div class="w-full border rounded-md">
                            <div class="p-2 rounded-md" style="width: {{ $skill->value }}%; background-color: {{ $skill->color ?? '#ABCD00' }}">

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

</div>
