@props(['value'])

<span {{$attributes->merge(['class' => 'text-gray-700 dark:text-gray-400'])}}>
    {{ $value }}
</span>
