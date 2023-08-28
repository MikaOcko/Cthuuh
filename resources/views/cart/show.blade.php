<x-app-layout>
    <x-slot name="hero">
        <div class="w-full h-36 bg-gradient-to-r from-orange-100 to-orange-400 p-10">
            {{-- <div class="w-full h-full bg-hero"> --}}
        </div>
    </x-slot>

    <x-slot name="content">

    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>
</x-app-layout>