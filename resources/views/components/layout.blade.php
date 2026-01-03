<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title'}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
<div class="min-h-full">
    <x-navbar>
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/blog">Blog</x-nav-link>
        <x-nav-link href="/contact">Contact</x-nav-link>
    </x-navbar>
    <x-header>
        {{ $header ?? 'Default' }}
    </x-header>

  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
    </div>
  </main>
</div>

</body>
</html>