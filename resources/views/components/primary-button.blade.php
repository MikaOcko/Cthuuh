<button {{ $attributes->merge(['type' => 'submit', 'class' => 'class="inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-black uppercase transition bg-transparent border-2 border-black rounded ripple hover:bg-gray-100 focus:outline-none']) }}>
    {{ $slot }}
</button>
