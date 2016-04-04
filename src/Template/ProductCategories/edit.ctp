<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Parent Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($productCategory) ?>
    <fieldset>
        <legend><?= __('Edit Product Category') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('lft');
            echo $this->Form->input('rght');
            echo $this->Form->input('parent_id', ['options' => $parentProductCategories, 'empty' => true]);
            echo $this->Form->input('row_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
