<?php if (isset($this->request->params['name'])): ?>
    <?php
    $portfolioName = $this->request->params['name'];
    $portfolioData = \Cake\Core\Configure::read('ShowcaseData.portfolio_full.items');
    $portfolioData = $portfolioData[0];
    ?>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="jumbotron">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <?= $this->Html->image($portfolioData['images'][0]['src']); ?>
                            </div>
                            <?php foreach ($portfolioData['images'] as $key => $image): ?>
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
                    <?php
                    $tags = ['Web Development', 'Data Science', 'Jquery', 'CakePHP'];
                    echo $this->element('tags', ['tags' => $tags]);
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
