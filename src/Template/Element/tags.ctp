<?php if (isset($link)): ?>
<?php foreach ($tags as $tag): ?>
    <?= $this->Html->link($tag->name, '/posts/tags/' . $tag->name, ['class' => 'btn btn-xs btn-default']); ?>
<?php endforeach; ?>
<?php else: ?>
    <?php foreach ($tags as $tag): ?>
        <?= $this->Html->link($tag, '#', ['class' => 'btn btn-xs btn-default']); ?>
    <?php endforeach; ?>
<?php endif; ?>
