<x-filament-panels::page>
    <form wire:submit.prevent="submit" class="space-y-6">
        {{-- Form field dari Filament --}}
        {{ $this->form }}

        {{-- Tombol Ajukan Kerjasama --}}
        @if ($status === null || $status === 'rejected' || $status === 'cancelled')
            <x-filament::button type="submit">
                Ajukan Kerjasama
            </x-filament::button>
        @endif

        {{-- Tombol Batalkan (pakai Filament Action) --}}
        @if ($status === 'pending')
            {{ $this->cancelCooperation }}
        @endif
    </form>
</x-filament-panels::page>
