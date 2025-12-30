<div>
    <a  href="{{ $url }}" target="_blank" >
        <img src=" {{ asset($icon) }}" {{ $attributes->merge(['class' => 'transition-all duration-300  h-10 w-10 rounded-4xl space-x-2 hover:scale-110']) }} alt="{{ $label }}"></i>
    </a>
</div>