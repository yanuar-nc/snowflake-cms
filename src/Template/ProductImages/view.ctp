<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Image'), ['action' => 'edit', $productImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Image'), ['action' => 'delete', $productImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productImages view large-9 medium-8 columns content">
    <h3><?= h($productImage->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($productImage->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($productImage->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Image Dir') ?></th>
            <td><?= h($productImage->image_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productImage->id) ?></td>
        </tr>
    </table>
</div>
