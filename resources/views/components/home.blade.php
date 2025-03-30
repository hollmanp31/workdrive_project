<div x-data="{ open: localStorage.getItem('sidebar') === 'true' }" 
     x-init="$watch('open', value => localStorage.setItem('sidebar', value))" 
     class="bg-gray-200 w-16 h-screen flex flex-col items-center py-4">

    <!-- Botón de menú -->
    <button @click="open = !open" class="bg-gray-800 p-2 rounded-lg text-white mb-4">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Íconos del menú SIEMPRE visibles a menos que el usuario lo cierre -->
    <div x-show="open" class="flex flex-col items-center">
        @foreach ($menuItems as $item)
            <a href="{{ route($item['route']) }}" class="mb-4 p-2 rounded-md hover:bg-gray-300">
                <i class="{{ $item['icon'] }} text-gray-700 text-xl"></i>
            </a>
        @endforeach
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.0/cdn.min.js" defer></script>