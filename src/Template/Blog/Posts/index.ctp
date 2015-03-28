<?php $this->start('pageheader'); ?>
<div class="container-fluid blog-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="post-title">
                    <h2><?= __('Blog'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<?php $this->end(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="posts-view">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9 posts-list">
                        <?php foreach ($posts as $post): ?>
                            <div data-sr>
                                <h3>
                                    <?= $this->Html->link($post->title, ['controller' => 'posts', 'action' => 'view', $post->id]); ?>
                                </h3>
                                <div class="post-details">
                                    <span>
                                        <strong><?php
                                        echo $this->Time->format(
                                            $post->date_published,
                                            \IntlDateFormatter::MEDIUM
                                        );
                                        ?>
                                        </strong>
                                    </span>
                                </div>
                                <div class="post-preview">
                                    <?= $post->preview; ?>
                                </div>
                                <div class="post-keywords">
                                    <?php $post->tags['link'] = ''; ?>
                                    <?= $this->element('tags', ['tags' => $post->tags]); ?>
                                </div>
                                <br/>
                                <p><?= $this->Html->link(__('Read More'), ['controller' => 'posts', 'action' => 'view', $post->id], ['class' => 'btn btn-default btn-sm']); ?></p>
                            </div>
                            <hr />
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-2 post-sidebar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .posts-list > div {
        padding-top: 15px;
    }
    .posts-list h3 a {
        color: #ff514c;
    }
    .posts-list hr {
        border-bottom: 1px solid #ff514c;
    }
</style>
