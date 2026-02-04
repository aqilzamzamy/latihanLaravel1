@props(['href' => null, 'active' => false])

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge([
            'class' => ($active
                ? 'bg-gray-800 text-white'
                : 'text-gray-400 hover:bg-gray-800 hover:text-white')
                . ' flex items-center gap-3 rounded-lg px-4 py-2.5 transition-all duration-150 font-medium'
        ]) }}>
        {{ $slot }}
    </a>
@else
    <div {{ $attributes->merge([
            'class' => 'text-gray-500 flex items-center gap-3 rounded-lg px-4 py-2.5 font-medium cursor-default'
        ]) }}>
        {{ $slot }}
    </div>
@endif
