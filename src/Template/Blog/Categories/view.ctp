<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="categories view large-10 medium-9 columns">
    <h2><?= h($category->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($category->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($category->id) ?></p>
            <h6 class="subheader"><?= __('Post Count') ?></h6>
            <p><?= $this->Number->format($category->post_count) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Posts') ?></h4>
    <?php if (!empty($category->posts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Slug') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Content') ?></th>
            <th><?= __('Date Published') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Post View Count') ?></th>
            <th><?= __('Comment Count') ?></th>
            <th><?= __('Preview') ?></th>
            <th><?= __('Image') ?></th>
            <th><?= __('Category Id') ?></th>
            <th><?= __('Published') ?></th>
            <th><?= __('Keywords') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($category->posts as $posts): ?>
        <tr>
            <td><?= h($posts->id) ?></td>
            <td><?= h($posts->slug) ?></td>
            <td><?= h($posts->title) ?></td>
            <td><?= h($posts->content) ?></td>
            <td><?= h($posts->date_published) ?></td>
            <td><?= h($posts->created) ?></td>
            <td><?= h($posts->modified) ?></td>
            <td><?= h($posts->post_view_count) ?></td>
            <td><?= h($posts->comment_count) ?></td>
            <td><?= h($posts->preview) ?></td>
            <td><?= h($posts->image) ?></td>
            <td><?= h($posts->category_id) ?></td>
            <td><?= h($posts->published) ?></td>
            <td><?= h($posts->keywords) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>