
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
                <th class="actions"><?= __('Actions') ?></th>
                <th></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($productImages as $productImage): 

                    $id = $productImage->id;

                    $picture_dir    = '/img/productimages/image/' . $productImage->image_dir . '/';
                    $picture        = $picture_dir . '' . $productImage->image;
                    $thumb          = $picture_dir . 'thumb_' . $productImage->image;

            ?>
            <tr>
                <td width="10">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-white dropdown-toggle" data-toggle="dropdown">
                            <?php echo __( BTN_ACTION ); ?> &nbsp; <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
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
                            <!-- <li>
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
                            </li> -->
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
                <td><?= $this->Number->format($productImage->id) ?></td>
                <td><?= $productImage->has('product') ? $this->Html->link($productImage->product->name, ['controller' => 'Products', 'action' => 'view', $productImage->product->id]) : '' ?></td>
                <td><?= h($productImage->title) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
     <?= $this->Element( 'pagination' ); ?>
</div>
