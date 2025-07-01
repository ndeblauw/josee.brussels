<div class="w-full text-center">
    @if(!$open)
        <button wire:click.prevent="$set('open', true)" class="bg-sky-300 text-white px-4 py-2 rounded hover:bg-clay-500 cursor-pointer">
            Doe mee / Participez
        </button>
    @else
        <div class="w-full border border-clay-500 rounded p-4 my-2">

            @if($success)
                <div class="text-green-400">
                    <div>
                        Bedankt voor je interesse! Je hoort spoedig van ons. <br/>
                        Merci pour votre intérêt ! Vous nous entendrez bientôt.
                    </div>
                    <button wire:click.prevent="$set('open', false)" class="mt-2 bg-green-400 text-white px-4 py-2 rounded hover:bg-clay-600">
                        Sluiten / Fermer
                    </button>
                </div>
            @else

                <form wire:submit.prevent="submit" class="mb-4">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Naam/Nom</label>
                        <input type="text" wire:model.defer="name" id="name" class="mt-1 p-2 block w-full border-sky-300 bg-white rounded-md focus:border-sky-300 focus:ring-sky-300" required>
                        @error('name')
                        <div class="text-clay-500 text-sm">{{ $message }}</div>
                        @enderror
                        <label for="email" class="block text-sm font-medium text-gray-700 mt-2">E-mail/Email</label>
                        <input type="email" wire:model.defer="email" id="email" class="mt-1 p-2 block w-full border-sky-300 bg-white rounded-md focus:border-sky-300 focus:ring-sky-300" required>
                        @error('email')
                            <div class="text-clay-500 text-sm">{{ $message }}</div>
                        @enderror

                        <button type="submit" class="mt-4 bg-sky-300 text-white px-4 py-2 rounded hover:bg-clay-500">
                            Verstuur/Envoyer
                        </button>
                    </div>
                </form>

            @endif






        </div>
    @endif
</div>
