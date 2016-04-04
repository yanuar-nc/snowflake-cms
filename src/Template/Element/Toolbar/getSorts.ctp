<div class="btn-group">

    <?php 
        echo $this->Html->link(
            '<i class="fa fa-sort"></i> &nbsp; ' . __( BTN_SORT_BY ),
            array(
                'controller' => $var_controller,
                'action' => $action,
            ),
            array(
                'class' => 'btn btn-sm btn-white tooltips',
                'data-toggle' => 'tooltip',
                'data-original-title' => __( TOOLTIP_SORT_BY ),
                'tabindex' => 1,
                'escape' => false
            )
        ); 
    ?>
    
    <button type="button" class="btn btn-sm btn-white dropdown-toggle" data-toggle="dropdown">
        <span class="caret"></span>
    </button>
    
    <ul class="dropdown-menu" role="menu">
        <?php
        foreach( $sortOptions as $key => $val )
        {

            if( $key != 'Link' ){
        ?>
                <li><?php echo $this->Paginator->sort( $key, $val ); ?></li>
        <?php
            } else {
                foreach( $val as $link )
                {
                    $action  = isset( $link[ 'action' ] ) ? $link[ 'action' ] : 'index';
                    $keyword = isset( $_GET[ 'keyword' ] ) ? '?keyword=' . $_GET[ 'keyword' ] : null;
        ?>
                    <li><?= $this->Html->link( $link[ 'caption' ], [ 'action' => $action, $link[ 'sort' ], $link[ 'direction' ], $keyword ] ); ?></li>
        <?php
                }
            }
        }
        ?>
    </ul>
</div><!--/ .btn-group --> 