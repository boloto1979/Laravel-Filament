<!-- <img src="https://media.licdn.com/dms/image/D4D22AQEIsyCwQ24aLw/feedshare-shrink_800/0/1683769457446?e=1686787200&v=beta&t=QgSE0Z38VYR-sVZAVysH-b0WY1R4tS2NGEwRHIymvOU"> -->
<form wire:submit.prevent="authenticate" class="space-y-8">
    {{ $this->form }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>
</form>
