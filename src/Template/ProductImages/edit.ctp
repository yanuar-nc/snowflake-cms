<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productImages form large-9 medium-8 columns content">
    <?= $this->Form->create($productImage) ?>
    <fieldset>
        <legend><?= __('Edit Product Image') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('image');
            echo $this->Form->input('image_dir');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
