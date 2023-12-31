@block([
    'heading' => ($post->showTitle ? $post->post_title : false),
    'content' => ($post->showExcerpt ? $post->post_content : false),
    'ratio' => $ratio,
    'meta' => $post->tags,
    'date' => $post->post_date,
    'dateBadge' => $post->dateBadge,
    'filled' => true,
    'image' => ($post->showImage ? [
        'src' => $loop->first && $highlight_first_column
            ? get_the_post_thumbnail_url($post->ID, [$post->thumbnail[1] * 2, $post->thumbnail[2] * 2])
            : $post->thumbnail[0],
            'alt' => $contact['full_name'],
            'backgroundColor' => 'secondary',
        ] : false),
    'hasPlaceholder' => $anyPostHasImage && !isset($post->thumbnail[0]),
    'classList' => ['t-posts-block', ' u-height--100'],
    'context' => ['module.posts.block'],
    'link' => $post->link,
    'postId' => $post->ID,
    'postType' => $post->post_type ?? '',
    'icon' => $post->termIcon['icon'] ? $post->termIcon : false,
    'attributeList' => array_merge($post->attributeList, []),
])
    @slot('floating')
        @if (!empty($post->floating['floating']))
            @icon($post->floating['floating'])
            @endicon
        @endif
    @endslot
@endblock
