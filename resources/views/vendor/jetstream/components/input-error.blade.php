@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600 dark:text-gray-200']) }}>{{ $message }}</p>

@enderror
