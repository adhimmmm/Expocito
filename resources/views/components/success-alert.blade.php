@props(['type' => 'success', 'message'])

@php
    $baseColor = $type === 'error' ? 'red' : 'green';
@endphp

<div x-data="{ open: true }" x-show="open"
     class="flex items-center p-4 mb-4 text-{{ $baseColor }}-800 border-t-4 border-{{ $baseColor }}-300 bg-{{ $baseColor }}-50 dark:text-{{ $baseColor }}-400 dark:bg-gray-800 dark:border-{{ $baseColor }}-800"
     role="alert">
    <svg class="shrink-0 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div class="ms-3 text-sm font-medium">
        {{ $message }}
    </div>
    <button @click="open = false" type="button"
        class="ms-auto text-{{ $baseColor }}-500 hover:bg-{{ $baseColor }}-200 dark:hover:bg-gray-700 rounded-lg p-1.5 h-8 w-8"
        aria-label="Close">
        <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7L1 13"/>
        </svg>
    </button>
</div>