<x-layout>
    <x-slot:header>
        {{ $title }}
    </x-slot:header>
    
    <article class="py-8 max-wscreen-md border-b border-gray-300">
        <h2 class="mb-2 text-3xl tracking-tight font-bold text-gray-900">Judul Artikel 1</h2>
        <div>
            <span class="text-sm text-gray-500">Oleh Kevin Smith</span>
            <span class="text-sm text-gray-500">Diposting pada 1 Januari 2024</span>
        </div>
        <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt a fuga, neque molestiae ab fugiat! Eligendi obcaecati temporibus molestiae quae unde voluptates corrupti commodi error culpa eveniet, perferendis magnam?</p>
    </article>
    
    <article class="py-8">
        <h2 class="mb-2 text-2xl tracking-tight font-bold text-gray-900">Judul Artikel 2</h2>
        <div>
            <span class="text-sm text-gray-500">Oleh John Doe</span>
            <span class="text-sm text-gray-500">Diposting pada 2 Januari 2024</span>
        </div>
        <p class="my-2 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro incidunt a fuga, neque molestiae ab fugiat! Eligendi obcaecati temporibus molestiae quae unde voluptates corrupti commodi error culpa eveniet, perferendis magnam?</p>
    </article>  
</x-layout>