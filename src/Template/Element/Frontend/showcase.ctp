<div class="row">
    <div class="col-md-12">
        <h1 class="text-center"><?= $showcaseData['title']; ?></h1>
    </div>
</div>
<div class="row">
    <?php foreach ($showcaseData['items'] as $item): ?>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <div class="caption text-center">
                    <?php
                    if (isset($item['image'])) {
                        echo $this->Html->image($item['image']);
                    }
                    ?>
                    <h3><?= $item['title']; ?></h3>

                    <p><?= $item['description']; ?></p>

                    <p class="text-center">
                        <?= $this->Html->link($item['link']['title'], $item['link']['url'], $item['link']['options']); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<p class="text-center">
    <?php if (isset($showcaseData['links'])): ?>
        <?php foreach($showcaseData['links'] as $link): ?>
            <?= $this->Html->link($link['title'], $link['url'], $link['options']); ?>
        <?php endforeach; ?>
    <?php endif; ?>
</p>
