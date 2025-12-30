@php
                        $postDetail = $post->postDetailOne;
                        $content = $postDetail->content;
                        $href = '#';
            
                        if (filter_var($content, FILTER_VALIDATE_EMAIL)) {
                            $href = 'mailto:' . $content;
                        } elseif (preg_match('/^\+?[0-9\s\-()]+$/', $content)) {
                            $href = 'tel:' . preg_replace('/\D/', '', $content); // remove spaces/dashes
                        }
                    @endphp
            
                    <div>
                        <p class="font-bold space-x-2">
                            <x-dynamic-component 
                                :component="$postDetail->color" 
                                class="h-8 w-8 inline text-emerald-900" 
                            />
                            <span>{{ $postDetail->title }}</span>
                            <a {{ $href != '#' ? "href=$href" : '' }} 
                               class="font-bold {{ $href == '#' ? '' : 'text-blue-500' }}"
                               style="direction:ltr; unicode-bidi:embed;">
                                {{ $content }}
                            </a>
                        </p>
                    </div>