<x-filament-panels::page>
    <form wire:submit="save">
    {{ $this->form }}

        <x-filament::button type="submit">Submit</x-filament::button>
    </form>
</x-filament-panels::page>
