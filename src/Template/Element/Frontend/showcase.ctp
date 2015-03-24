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
                        $this->Html->image($item['image']);
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
    <?= $this->Html->link(__('View Portfolio'), '/portfolio', ['role' => 'button', 'class' => 'btn btn-warning']); ?>
    <?= $this->Html->link(__('View Resume'), '/resume', ['role' => 'button', 'class' => 'btn btn-warning']); ?>
</p>
