<div>
    
    <a wire:click="showProductDetails({{ $id }})" class="btn btn-sm btn-primary">
        {{ __('adminlte::landingpage.moredetails') }}
    </a>
    @if ($pro)
        {{-- <x-product-details 
            :image="$pro->pimage" 
            :title="$pro->pname" 
            :description="$pro->description" 
            :specs="$pro->specs" 
        /> --}}
        <p class="text-center text-gray-500">pro =     {{$pro}}</p>
    @else
        <p class="text-center text-gray-500">Select a product to view details    {{$pro}}</p>
    @endif
</div>