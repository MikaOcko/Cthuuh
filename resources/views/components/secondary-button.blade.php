<button {{ $attributes->merge(['type' => 'button', 'class' => 'py-2 px-4 bg-transparent text-white font-semibold border-2 border-white rounded hover:bg-white hover:text-black hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0']) }}>
    {{ $slot }}
</button>
