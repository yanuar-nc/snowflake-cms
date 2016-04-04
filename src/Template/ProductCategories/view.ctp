<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Category'), ['action' => 'edit', $productCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Category'), ['action' => 'delete', $productCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Category'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Product Categories'), ['controller' => 'ProductCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Product Category'), ['controller' => 'ProductCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productCategories view large-9 medium-8 columns content">
    <h3><?= h($productCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($productCategory->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Parent Product Category') ?></th>
            <td><?= $productCategory->has('parent_product_category') ? $this->Html->link($productCategory->parent_product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $productCategory->parent_product_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($productCategory->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lft') ?></th>
            <td><?= $this->Number->format($productCategory->lft) ?></td>
        </tr>
        <tr>
            <th><?= __('Rght') ?></th>
            <td><?= $this->Number->format($productCategory->rght) ?></td>
        </tr>
        <tr>
            <th><?= __('Row Status') ?></th>
            <td><?= $this->Number->format($productCategory->row_status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($productCategory->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($productCategory->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Product Categories') ?></h4>
        <?php if (!empty($productCategory->child_product_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Lft') ?></th>
                <th><?= __('Rght') ?></th>
                <th><?= __('Parent Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Row Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productCategory->child_product_categories as $childProductCategories): ?>
            <tr>
                <td><?= h($childProductCategories->id) ?></td>
                <td><?= h($childProductCategories->name) ?></td>
                <td><?= h($childProductCategories->lft) ?></td>
                <td><?= h($childProductCategories->rght) ?></td>
                <td><?= h($childProductCategories->parent_id) ?></td>
                <td><?= h($childProductCategories->created) ?></td>
                <td><?= h($childProductCategories->modified) ?></td>
                <td><?= h($childProductCategories->row_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductCategories', 'action' => 'view', $childProductCategories->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductCategories', 'action' => 'edit', $childProductCategories->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductCategories', 'action' => 'delete', $childProductCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childProductCategories->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($productCategory->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Product Category Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Product Seo') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Product Condition') ?></th>
                <th><?= __('Year') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Picture Dir') ?></th>
                <th><?= __('Picture') ?></th>
                <th><?= __('View Count') ?></th>
                <th><?= __('Product Photo Count') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Row Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($productCategory->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->user_id) ?></td>
                <td><?= h($products->product_category_id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->product_seo) ?></td>
                <td><?= h($products->description) ?></td>
                <td><?= h($products->product_condition) ?></td>
                <td><?= h($products->year) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->picture_dir) ?></td>
                <td><?= h($products->picture) ?></td>
                <td><?= h($products->view_count) ?></td>
                <td><?= h($products->product_photo_count) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <td><?= h($products->row_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
