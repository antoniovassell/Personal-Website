<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Views'), ['controller' => 'PostViews', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post View'), ['controller' => 'PostViews', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="posts view large-10 medium-9 columns">
    <h2><?= h($post->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Slug') ?></h6>
            <p><?= h($post->slug) ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($post->title) ?></p>
            <h6 class="subheader"><?= __('Image') ?></h6>
            <p><?= h($post->image) ?></p>
            <h6 class="subheader"><?= __('Category') ?></h6>
            <p><?= $post->has('category') ? $this->Html->link($post->category->name, ['controller' => 'Categories', 'action' => 'view', $post->category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Keywords') ?></h6>
            <p><?= h($post->keywords) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($post->id) ?></p>
            <h6 class="subheader"><?= __('Post View Count') ?></h6>
            <p><?= $this->Number->format($post->post_view_count) ?></p>
            <h6 class="subheader"><?= __('Comment Count') ?></h6>
            <p><?= $this->Number->format($post->comment_count) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Date Published') ?></h6>
            <p><?= h($post->date_published) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($post->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($post->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Published') ?></h6>
            <p><?= $post->published ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($post->content)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Preview') ?></h6>
            <?= $this->Text->autoParagraph(h($post->preview)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Comments') ?></h4>
    <?php if (!empty($post->comments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Email Address') ?></th>
            <th><?= __('Comment') ?></th>
            <th><?= __('Date') ?></th>
            <th><?= __('Post Id') ?></th>
            <th><?= __('Is Spam') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($post->comments as $comments): ?>
        <tr>
            <td><?= h($comments->id) ?></td>
            <td><?= h($comments->name) ?></td>
            <td><?= h($comments->email_address) ?></td>
            <td><?= h($comments->comment) ?></td>
            <td><?= h($comments->date) ?></td>
            <td><?= h($comments->post_id) ?></td>
            <td><?= h($comments->is_spam) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related PostViews') ?></h4>
    <?php if (!empty($post->post_views)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Post Id') ?></th>
            <th><?= __('Date') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($post->post_views as $postViews): ?>
        <tr>
            <td><?= h($postViews->id) ?></td>
            <td><?= h($postViews->post_id) ?></td>
            <td><?= h($postViews->date) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'PostViews', 'action' => 'view', $postViews->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'PostViews', 'action' => 'edit', $postViews->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostViews', 'action' => 'delete', $postViews->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postViews->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
