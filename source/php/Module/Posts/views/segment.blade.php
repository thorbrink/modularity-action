@includeWhen(!$hideTitle && !empty($postTitle), 'partials.post-title')
@includeWhen($preamble, 'partials.preamble')

<div class="o-grid 
    {{ $stretch ? 'o-grid--stretch' : '' }} 
    {{ $noGutter ? 'o-grid--no-gutter' : '' }}"
    @if (!$hideTitle && !empty($postTitle)) aria-labelledby="{{ 'mod-posts-' . $ID . '-label' }}" @endif>
    @foreach ($posts as $post)
        <div class="{{ $loop->first && $highlight_first_column ? $highlight_first_column : $posts_columns }}">
            @segment([
                'layout' => 'card',
                'title' => $post->showTitle ? $post->post_title : false,
                'context' => ['module.posts.segment'],
                'meta' => $display_reading_time ? $post->reading_time : false,
                'tags' => $post->tags,
                'image' => $post->thumbnail[0],
                'date' => $post->post_date,
                'dateBadge' => $post->dateBadge,
                'content' => $post->post_content,
                'buttons' => [['text' => $labels['readMore'], 'href' => $post->link, 'color' => 'primary']],
                'containerAware' => true,
                'reverseColumns' => isset($imagePosition) ? $imagePosition : true,
                'classList' => $post->classList,
                'icon' => $post->termIcon['icon'] ? $post->termIcon : false,
                'attributeList' => array_merge($post->attributeList, []),
            ])
                @slot('floating')
                    @if (!empty($post->floating['floating']))
                        @icon($post->floating['floating'])
                        @endicon
                    @endif
                @endslot
            @endsegment
        </div>
    @endforeach
</div>
