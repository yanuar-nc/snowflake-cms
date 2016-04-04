
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
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('updated') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($users as $user): 

                $id       = $user->id;
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
                                        __( BTN_DELETE ),
                                        ['action' => 'delete', $id],
                                        ['confirm' => __( CONFIRM_DELETE ), '', 'escape' => false ]
                                    )
                                ?>
                            </li>
                        </ul>
                    </div><!--/ .btn-group -->   
                </td>
                <td><?= $this->Number->format($id) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->created->format(DATE_RFC850)) ?></td>
                <td><?= !empty( $user->modified ) ? h($user->modified->format(DATE_RFC850)) : null ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->Element( 'pagination' ); ?>
</div>
