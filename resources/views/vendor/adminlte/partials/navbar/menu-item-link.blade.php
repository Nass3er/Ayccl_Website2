@isset($item['route'])
    @php
        if (is_array($item['route'])) {
            $routeName = $item['route'][0]; // first element = route name
            $routePara = $item['route'][1] ?? []; // second element = parameters
        }
        else{
            $routeName = $item['route']; // first element = route name
            $routePara = null; // second element = parameters
        }
    @endphp
@endisset

<li @isset($item['id']) id="{{ $item['id'] }}" @endisset class="nav-item">

    <a class="nav-link {{ $item['class'] }}"
        @if(isset($routePara))
            href="{{ localizedRoute($routeName, $routePara) }}" 
            @else
            href="{{ localizedRoute($routeName) }}" 
        @endif
        @isset($item['target']) target="{{ $item['target'] }}" @endisset {!! $item['data-compiled'] ?? '' !!}>
        {{-- Icon (optional) --}}
        {{-- Icon (optional) --}}
        @isset($item['icon'])
            <i class="{{ $item['icon'] }} {{ isset($item['icon_color']) ? 'text-' . $item['icon_color'] : '' }}"></i>
        @endisset

        {{-- Text --}}
        {{ $item['text'] }}

        {{-- Label (optional) --}}
        @isset($item['label'])
            <span class="badge badge-{{ $item['label_color'] ?? 'primary' }}">
                {{ $item['label'] }}
            </span>
        @endisset

    </a>

</li>
