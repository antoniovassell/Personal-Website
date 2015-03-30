<div class="row">
    <div class="col-md-12" data-sr>
        <h1 class="text-center"><?= $jombotronData['title'] ?></h1>
        <br/>
    </div>
</div>
<div class="row">
    <?php foreach ($jombotronData['items'] as $item): ?>
        <div class="col-md-4" data-sr>
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
