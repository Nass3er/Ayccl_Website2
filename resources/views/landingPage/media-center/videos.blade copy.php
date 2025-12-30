@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <style>
        .gallery-item-wrapper {
            position: relative;
            cursor: pointer;
        }

        .gallery-trigger-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .gallery-item-wrapper:hover .gallery-trigger-container {
            opacity: 1;
        }

        .resize-icon {
            color: white;
            font-size: 2em;
        }
        .mfp-title-custom {
    color: #fff;
    text-align: left;
    padding: 10px;
}

/* Custom CSS to create the side panel layout */

    </style>
@endsection

@section('content')
    <x-hero title="{{ $page->title }}" description="{{ $page->content }}" img="{{ asset($page->background) }}" />

    <div class="container mx-auto my-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($posts as $post)
            {{-- Fix: Added a card structure --}}
            <div class="card bg-base-100 shadow-xl overflow-hidden">
                <div class="gallery-item-wrapper relative">
                    {{-- Preview image (the first one) --}}
                    @if ($post->media->isNotEmpty())
                        <figure>
                            <img src="{{ asset($post->media->first()->filepath) }}"
                                alt="{{ $post->media->first()->alt ?? '' }}" class="w-full object-cover">
                        </figure>
                        {{-- Icon overlay --}}
                        <div class="gallery-trigger-container" data-post-id="{{ $post->id }}">
                            <i class="fas fa-expand resize-icon"></i>
                        </div>
                    @else
                        <figure><img src="placeholder.jpg" alt="No image available"></figure>
                    @endif
                </div>

                {{-- Card body with title --}}
                <div class="card-body">
                    <h2 class="card-title">{{ $post->postDetail->first()->title ?? 'No Title' }}</h2>
                </div>
            </div>

            {{-- Hidden gallery links for Magnific Popup --}}
            {{-- Hidden gallery links for Magnific Popup --}}
            <div id="hidden-gallery-{{ $post->id }}" class="hidden">
                @foreach ($post->media as $media)
                    <a href="{{ asset($media->filepath) }}" title="{{ $media->filepath }}"
                        data-date="{{ $media->created_at->format('M d, Y') }}" data-content="{{ $media->id }}">
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection

@section('jsafter')
<script>
    $(document).ready(function() {
        $('.gallery-trigger-container').on('click', function(e) {
            e.preventDefault();
            const postId = $(this).data('post-id');
            const galleryLinks = $(`#hidden-gallery-${postId} a`);
            
            const items = galleryLinks.map(function() {
                return {
                    src: $(this).attr('href'),
            //         data: {
            //             title: $(this).attr('title'),
            //             date: $(this).data('date'),
            //             content: $(this).data('content')
            //         }
                };
            }).get();

            $.magnificPopup.open({
                items: items,
                gallery: {
                    enabled: true
                },
                type: 'image',
                callbacks: {
                    open: function() {
                        // Get the first item's data to display on open
                        const currentItem = this.currItem.data;
                        
                        // Create the HTML for the details panel
                        // const detailsHtml = `
                        //     <div class="mfp-details-panel">
                        //         <h3 class="text-xl font-bold">${currentItem.title}</h3>
                        //         <p class="text-sm my-2">Date: ${currentItem.date}</p>
                        //         <p class="text-base">${currentItem.content}</p>
                        //     </div>
                        // `;
                        
                        // Inject the details panel into the popup's container
                        this.container.append(detailsHtml);
                    },
                }
            });
        });
    });
</script>
@endsection
