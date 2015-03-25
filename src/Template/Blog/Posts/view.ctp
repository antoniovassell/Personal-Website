<div class="container-fluid blog-header">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="post-title">
                    <h2><?= h($post->title); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="posts-view">
                <?php if ($post->image): ?>
                    <div class="post-image">
                        <span><?= $this->Html->image($post->image); ?></span>
                    </div>
                <?php endif; ?>
                <br/>
                <div class="post-details">
                    <span><?= h($post->date_published); ?></span>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-1">
                        <div>
                            <ul class="social-bookmarks">
                                <li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>
                                <li class="twitter"><a href="#">twitter</a></li>
                                <li class="wordpress"><a href="#">wordpress</a></li>
                                <li class="googleplus"><a href="#">googleplus</a></li>
                                <li class="linkedin"><a href="#">linkedin</a></li>
                                <li class="myspace"><a href="#">myspace</a></li>
                                <li class="blogger"><a href="#">blogger</a></li>
                                <li class="delicious"><a href="#">delicious</a></li>
                                <li class="digg"><a href="#">digg</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 post-body">
                        <?= $post->content; ?>
                        <br/>
                        <br/>
                        <div class="post-keywords">
                            <?= $this->element('tags', ['tags' => $post->tags]); ?>
                        </div>
                        <br/>
                        <?php echo $this->element('Disqus/comments'); ?>
                    </div>
                    <div class="col-md-2 post-sidebar">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

