
<div class="btn-toolbar">

    <?php

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
                <th class="actions"></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('parent_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($productCategories as $productCategory): 

                $id       = $productCategory->id;
                $created  = h($productCategory->created->format(DATE_RFC850));
                $modified = !empty( $productCategory->modified ) ? h($productCategory->modified->format(DATE_RFC850)) : null;
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
                                        '<i class="fa fa-trash-o"></i> &nbsp; ' . __( BTN_DELETE ),
                                        ['action' => 'delete', $id],
                                        ['confirm' => __( CONFIRM_DELETE ), 'class="btn btn-sm btn-white"', 'escape' => false ]
                                    )
                                ?>
                            </li>
                        </ul>
                    </div><!--/ .btn-group -->   
                </td>
                <td><?= $this->Number->format($productCategory->id) ?></td>
                <td><?= h($productCategory->name) ?></td>
                <td><?= $productCategory->has('parent_product_category') ? $this->Html->link($productCategory->parent_product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $productCategory->parent_product_category->id]) : '' ?></td>
                <td><?= $created ?></td>
                <td><?= $modified ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Element( 'pagination' ); ?>
</div>
