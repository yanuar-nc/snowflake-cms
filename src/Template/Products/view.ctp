<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $product->has('user') ? $this->Html->link($product->user->name, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product Category') ?></th>
            <td><?= $product->has('product_category') ? $this->Html->link($product->product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $product->product_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Product Seo') ?></th>
            <td><?= h($product->product_seo) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= h($product->year) ?></td>
        </tr>
        <tr>
            <th><?= __('Picture Dir') ?></th>
            <td><?= h($product->picture_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Picture') ?></th>
            <td><?= h($product->picture) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th><?= __('View Count') ?></th>
            <td><?= $this->Number->format($product->view_count) ?></td>
        </tr>
        <tr>
            <th><?= __('Product Photo Count') ?></th>
            <td><?= $this->Number->format($product->product_photo_count) ?></td>
        </tr>
        <tr>
            <th><?= __('Row Status') ?></th>
            <td><?= $this->Number->format($product->row_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Product Condition') ?></h4>
        <?= $this->Text->autoParagraph(h($product->product_condition)); ?>
    </div>
</div>
