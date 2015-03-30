<?php
$featurePrices = [
    [
        'title' => '$199',
        'subtitle' => 'Basic',
        'description' => 'Aneika likes this reasonable price',
        'feature_list' => ['Condoms', '1 GB Storage', '3.5% transaction fee'],
        'link' => [
            'title' => __('Try Now'),
            'url' => '#',
            'options' => ['class' => 'btn btn-success']
        ],
        'class' => 'price-primary'
    ],
    [
        'title' => '$599',
        'subtitle' => 'Premium',
        'description' => 'Aneika likes this reasonable price',
        'feature_list' => ['100 SKU', '1 GB Storage', '3.5% transaction fee'],
        'link' => [
            'title' => __('Try Now'),
            'url' => '#',
            'options' => ['class' => 'btn btn-success']
        ],
        'class' => 'price-success active'
    ],
    [
        'title' => '$399',
        'subtitle' => 'Standard',
        'description' => 'Aneika likes this reasonable price',
        'feature_list' => ['389 SKU', '1 GB Storage', '3.5% transaction fee'],
        'link' => [
            'title' => __('Try Now'),
            'url' => '#',
            'options' => ['class' => 'btn btn-success']
        ],
        'class' => 'price-warning'
    ]
];
?>

<div class="pricing">
    <ul>
        <?php foreach ($featurePrices as $item): ?>
        <li class="unit <?= $item['class']; ?>">
            <div class="price-title">
                <h3><?= $item['title']; ?></h3>
                <p>per month</p></div>
            <div class="price-body">
                <h4><?= $item['subtitle']; ?></h4>
                <p><?= $item['description']; ?></p>
                <ul>
                    <?php foreach ($item['feature_list'] as $featureItem): ?>
                    <li><?= $featureItem; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="price-foot">
                <?= $this->Html->link($item['link']['title'], $item['link']['url'], $item['link']['options']); ?>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</div>
