<div>
    <form
        wire:submit="changeName()"
    >
        <div class="mt-2">
            {{--            wire:model.live.debounce.1000ms="name" is a Livewire directive that updates the name property every 1000ms--}}
            {{--            wire:model.change="name" is a Livewire directive that updates the name property on change         --}}
            <select
                wire:model.fill="greeting"
                class="p-4 border rounded-md bg-gray-700"
                type="text">
                <option value="Hello">Hello</option>
                <option value="Hola">Hola</option>
                <option value="Bonjour">Bonjour</option>
                <option value="Ciao" selected>Ciao</option>
            </select>

            <input
                wire:model="name"
                class="p-4 border rounded-md bg-gray-700"
                type="text">
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md bg-blue-600 px-4 py-2"
            >Greet
            </button>
        </div>
    </form>

    @if($name ==! '')
        <div><h1 class="py-3 text-2xl text-black font-semibold">{{ $greeting }} from {{ $name }}!</h1></div>
    @endif

</div>
