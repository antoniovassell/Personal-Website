<?php
$jombotronData = [
    'title' => 'Featured Websites',
    'items' => [
        [
            'image' => '/circle-slideshow/images/1.jpg',
            'title' => 'Budget',
            'subtitle' => 'Personal Budgeting Application',
            'description' => 'Personal Budgeting Application Personal Budgeting Application Personal Budgeting Application Personal Budgeting Application',
            'link' => [
                'title' => __('Visit'),
                'url' => '#',
                'options' => ['class' => 'btn btn-warning', 'role' => 'button']
            ]
        ],
        [
            'image' => '/circle-slideshow/images/1.jpg',
            'title' => 'Budget',
            'subtitle' => 'Personal Budgeting Application',
            'description' => 'Personal Budgeting Application Personal Budgeting Application Personal Budgeting Application Personal Budgeting Application',
            'link' => [
                'title' => __('Visit'),
                'url' => '#',
                'options' => ['class' => 'btn btn-warning', 'role' => 'button']
            ]
        ],
        [
            'image' => '/circle-slideshow/images/1.jpg',
            'title' => 'Budget',
            'subtitle' => 'Personal Budgeting Application',
            'description' => 'Personal Budgeting Application Personal Budgeting Application Personal Budgeting Application Personal Budgeting Application',
            'link' => [
                'title' => __('Visit'),
                'url' => '#',
                'options' => ['class' => 'btn btn-warning', 'role' => 'button']
            ]
        ]
    ]
]
;?>
<div class="row">
    <div class="col-md-12">
        <h1 class="text-center"><?php echo __('Featured Websites'); ?></h1>
        <br/>
    </div>
</div>
<div class="row">
    <?php foreach ($jombotronData['items'] as $item): ?>
        <div class="col-md-4">
            <div class="jumbotron">
                <div class="jumbotron-photo">
                    <?= $this->Html->image($item['image']); ?>
                </div>
                <div class="jumbotron-contents">
                    <h1><?= $item['title']; ?></h1>
                    <h2><?= $item['subtitle']; ?></h2>
                    <p><?= $item['description']; ?></p>
                    <p class="text-center">
                        <?= $this->Html->link($item['link']['title'], $item['link']['url'], $item['link']['options']); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
