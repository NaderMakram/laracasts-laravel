{{-- key => default value --}}
@props(['active' => false, 'type' => 'anchor'])

@php
    $element_tag = $type === 'button' ? 'button' : 'a';
    $href = $attributes->get('href', '#')
@endphp

<{{$element_tag}}
    {{$attributes}}
    {!! $type === 'button' ? "onclick=\"window.location.href='{$href}'\"" : '' !!}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current="{{ $active ? 'page' : 'false' }}"
>
    {{$slot}}
</{{$element_tag}}>
