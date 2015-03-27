<?php
$showcaseData = [
    'title' => 'Blog',
    'items' => [],
    'links' => [
        [
            'title' => __('View Blog'),
            'url' => '/blog',
            'options' => ['class' => 'btn btn-warning', 'role' => 'button']
        ]
    ]
];
foreach ($posts as $post) {
    $showcaseData['items'][] = [
        'image' => null,
        'title' => $post->title,
        'description' => $post->preview,
        'link' => [
            'title' => __('Read More'),
            'url' => ['controller' => 'posts', 'action' => 'view', $post->id, 'prefix' => 'blog'],
            'options' => ['class' => 'btn btn-warning', 'role' => 'button']
        ]
    ];
}
?>

<?= $this->element('Frontend/showcase', ['showcaseData' => $showcaseData]); ?>
