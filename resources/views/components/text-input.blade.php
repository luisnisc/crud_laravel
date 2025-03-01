@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border border-blue-500 bg-blue-50 text-blue-900 focus:border-blue-700 focus:ring-blue-700 rounded-md shadow-sm']) }}>