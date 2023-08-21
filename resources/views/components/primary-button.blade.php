<button {{ $attributes->merge(['type' => 'submit', 'class' => 'py-2 px-4 bg-transparent text-black font-semibold border-2 border-black rounded hover:bg-black hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0']) }}>
    {{ $slot }}
</button>


