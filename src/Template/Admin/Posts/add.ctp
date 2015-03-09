<div class="row">
<!-- left column -->
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Quick Example</h3>
            <?= $this->Form->create($post); ?>
            <div class="box-body">
                <?php
                    echo $this->Form->input('slug');
                    echo $this->Form->input('title');
                    echo $this->Form->input('content');
                    echo $this->Form->input('date_published');
                    echo $this->Form->input('post_view_count');
                    echo $this->Form->input('comment_count');
                    echo $this->Form->input('preview');
                    echo $this->Form->input('image');
                    echo $this->Form->input('category_id', ['options' => $categories]);
                    echo $this->Form->input('published');
                    echo $this->Form->input('keywords');
                ?>
            </div>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
