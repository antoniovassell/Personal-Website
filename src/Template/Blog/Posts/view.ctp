<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="posts-view">
                <div class="post-title">
                    <h2><?= h($post->title); ?></h2>
                </div>
                <div class="post-details">
                    <span><?= h($post->date_published); ?></span>
                </div>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-9 post-body">
                        <?= $post->content; ?>
                        <br/>
                        <br/>
                        <div class="post-keywords">
                            <?= $post->keywords; ?>
                        </div>
                        <?php echo $this->element('Disqus/comments'); ?>
                    </div>
                    <div class="col-md-2 post-sidebar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

