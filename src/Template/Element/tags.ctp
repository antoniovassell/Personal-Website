<?php foreach ($tags as $tag): ?>
    <?= $this->Html->link($tag->name, '/posts/tags/' . $tag->name, ['class' => 'btn btn-xs btn-default']); ?>
<?php endforeach; ?>
