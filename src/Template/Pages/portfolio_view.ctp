<?php if (isset($this->request->params['name'])): ?>
    <?php
    $portfolioName = $this->request->params['name'];
    $portfolioData = \Cake\Core\Configure::read('ShowcaseData.portfolio_full.items');
    $portfolioData = $portfolioData[$portfolioName];
    ?>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="jumbotron">
                    <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-generic" data-slide-to="2" class=""></li>

                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <?php $imageCount = count($portfolioData['media']); ?>
                            <?php for ($index = 1; $index < $imageCount; $index++): ?>
                            <li data-target="#carousel-generic" data-slide-to="<?= $index; ?>" class=""></li>
                            <?php endfor; ?>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <?= $this->Html->image($portfolioData['media'][0]['src']); ?>
                            </div>
                            <?php foreach ($portfolioData['media'] as $key => $image): ?>
                                <?php
                                if ($key == 0) {
                                    continue;
                                };
                                ?>
                            <div class="item">
                                <?= $this->Html->image($image['src']); ?>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <div class="jumbotron-contents">
                    </div>
                </div>
            </div>
            <div class="col-md-4 material">
                <h2><?= $portfolioData['title']; ?></h2>
                <p><?= $portfolioData['description']; ?></p>
                <div>
                    <h6><?= __('Keywords'); ?></h6>
                    <?= $this->element('tags', ['tags' => $portfolioData['keywords']]);
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
