@include('partials.post-filters')

@card([
    'heading'       => $postTitle,
    'classList'     => [$classes],
    'attributeList' => [
        'aria-labelledby' => 'mod-posts-' . $ID . '-label'
    ],
    'context'       => 'module.posts.list'
])
    @if (!$hideTitle && !empty($postTitle))
        <div class="c-card__header">
            @typography([
                'id'        => 'mod-posts-' . $ID . '-label',
                'element'   => 'h2',
                'variant' => 'h4'
            ])
                {!! $postTitle !!}
            @endtypography
        </div>
    @endif

    @if (!empty($prepareList))
        <div class="o-grid {{ $stretch ? 'o-grid--stretch' : '' }}">
            <div class="o-grid-12">
                @collection([
                    'sharpTop' => true,
                    'bordered' => true
                ])
                    @foreach($prepareList as $post)
                        @if ($post['href'] && $post['columns'] && $post['columns'][0])
                            @collection__item([
                                'icon' => 'arrow_forward',
                                'link' => $post['href']
                                ])

                            @typography(['element' => 'h2', 'variant' => 'h4'])
                                {{$post['columns'][0]}}
                            @endtypography

                            @endcollection__item
                        @endif
                    @endforeach
                @endcollection
            </div>
        </div>
    @endif
@endcard
