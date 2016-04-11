<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Product Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productImages form large-9 medium-8 columns content">
    <?= $this->Form->create($productImage, [ 'type' => 'file' ]) ?>
    <fieldset>
        <legend><?= __('Add Product Image') ?></legend>
        <?php
        // pr( $products );
            echo $this->Form->input('product_id', ['type' => 'hidden']);
            echo $this->Form->input('title');
            echo $this->Form->input('image', [ 'type' => 'file' ] );
            // echo $this->Form->input('image_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
