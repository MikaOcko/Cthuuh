<x-app-layout>
    <x-slot name="hero">
        <div class="w-full h-full bg-gradient-to-r from-orange-100 to-orange-400 p-10">
            {{-- <div class="w-full h-full bg-hero"> --}}
                <div class="container flex flex-col px-6 py-10 mx-auto space-y-6">
                    <div class="w-full">
                        <div>
                            <h1>
                                Profile de {{ Auth::user()->name }}
                            </h1>
                            
                            <div class="mt-8 space-y-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </x-slot>

    <x-slot name="content">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-footer/>
    </x-slot>
</x-app-layout>
