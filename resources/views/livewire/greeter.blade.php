<div>

    <div><h1>Hello from {{ $name }}!</h1></div>
        <div class="mt-2">
            <input
                id="newName"
                class="block w-full p-4 border rounded-md bg-gray-700"
                type="text">
        </div>
        <div class="mt-2">
            <button class="text-white font-medium rounded-md bg-blue-600 px-4 py-2"
                    type="submit"
                    wire:click="changeName(document.querySelector('#newName').value)"
            >Greet
            </button>
        </div>

</div>
