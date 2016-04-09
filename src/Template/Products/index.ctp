
<div class="btn-toolbar">

    <?php
    use Cake\Routing\Router;

    /* GET Button Add Toolbar */
    echo $this->Element( 'Toolbar/getAddButton' );

    /* GET Previous and Refresh Toolbar */
    echo $this->Element( 'Toolbar/getPrevAndRefresh' );

    /* GET SEARCH TOOLBAR */
    echo $this->Element( 'Toolbar/defaultSearch' ); 
    ?>
    
</div><!--/ .btn-toolbar -->

<div class="table-responsive">

    <table class="table table-bordered table-hover">

        <thead>
            <tr>
                <th class="actions"><?= __('') ?></th>
                <th><?= $this->Paginator->sort('picture') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('product_category_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('product_seo') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($products as $product): 

                $id = $product->id;

                $picture_dir    = '/img/' . $var_model . '/picture/' . $product->picture_dir . '/';
                $picture        = $picture_dir . '' . $product->picture;
                $thumb          = $picture_dir . 'thumb_' . $product->picture;

            ?>
            <tr>
                <td width="5%">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-white dropdown-toggle" data-toggle="dropdown">
                            <?php echo __( BTN_ACTION ); ?> &nbsp; <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?php
                                    echo $this->Html->link(
                                        __( 'Add Images' ),
                                        [
                                            'controller' => 'product_images,
                                            'action' => 'edit',
                                            $id
                                        ]
                                    );
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo $this->Html->link(
                                        __( BTN_EDIT ),
                                        [
                                            'controller' => $var_controller,
                                            'action' => 'edit',
                                            $id
                                        ]
                                    );
                                ?>
                            </li>
                            <li>
                                <?php
                                    echo $this->Html->link(
                                        __( BTN_VIEW ),
                                        [
                                            'controller' => $var_controller,
                                            'action' => 'view',
                                            $id
                                        ]
                                    );
                                ?>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <?= $this->Form->postLink(
                                        __( BTN_DELETE ),
                                        ['action' => 'delete', $id],
                                        ['confirm' => __( CONFIRM_DELETE ) ]
                                    )
                                ?>
                            </li>
                        </ul>
                    </div><!--/ .btn-group -->   
                </td>
                <td width="10">
                    <a href="<?= Router::url($picture) ?>" data-rel="prettyPhoto">
                        <?php echo $this->Html->image( $thumb, array( 'class' => 'img-responsive img-thumbnail', 'alt' => '' ) ); ?>
                    </a>
                </td>
                <td><?= $product->has('user') ? $this->Html->link($product->user->username, ['controller' => 'Users', 'action' => 'view', $product->user->id]) : '' ?></td>
                <td><?= $product->has('product_category') ? $this->Html->link($product->product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $product->product_category->id]) : '' ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->product_seo) ?></td>
                <td><?= h($product->year) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Element( 'pagination' ); ?>
</div>
