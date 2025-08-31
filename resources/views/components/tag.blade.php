@props(['size' => 'base'])

@php
    $classes = 'bg-white/10 py-1 rounded-xl text-xs font-bold hover:bg-white/25 transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-5';
    }

    if ($size === 'small') {
        $classes .= ' px-3';
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot }}</a>