<<<<<<< HEAD
@props(['href', 'active' => false])

<a href="{{ $href }}"
   {{ $attributes->class([
       'rounded-md px-3 py-2 text-sm font-medium',
       $active
           ? 'bg-gray-950/50 text-white'
           : 'text-gray-300 hover:bg-white/5 hover:text-white'
   ]) }}>
    {{ $slot }}
</a>
=======
@props(['active' => false])

<div>
    <a {{ $attributes }} aria-current="page"
        class="{{ $active
            ? 'bg-gray-900 text-white' 
            : 'text-gray-300 hover:bg-white/5 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">
        {{ $slot }}
    </a>
</div>
>>>>>>> 391d12ebfdc4015d2cbd7c1633a9434ce6f05612
