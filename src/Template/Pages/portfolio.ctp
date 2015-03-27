<div class="container-fluid blog-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post-title">
                    <h2><?= __('Portfolio'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>

<div class="container">
    <?= $this->element('Frontend/showcase', ['showcaseData' => Cake\Core\Configure::read('ShowcaseData.portfolio_full')]); ?>
</div>
