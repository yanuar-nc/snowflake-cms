<div class="btn-group">

    <?php 
        echo $this->Html->link(
            '<i class="fa fa-sort"></i> &nbsp; ' . __( 'Filter By' ),
            array(
                'controller' => $var_controller,
                'action' => $action,
            ),
            array(
                'class' => 'btn btn-sm btn-white tooltips',
                'data-toggle' => 'tooltip',
                'data-original-title' => __( 'Filter by, click to reset' ),
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
        foreach( $options as $key => $val )
        {
                // $action  = isset( $link[ 'action' ] ) ? $link[ 'action' ] : 'index';
                // $keyword = isset( $_GET[ 'keyword' ] ) ? '?keyword=' . $_GET[ 'keyword' ] : null;
        ?>
            <li><?= $this->Html->link( $val, [ 'action' => $action, $key ] ); ?></li>
        <?php
        }
        ?>
    </ul>
</div><!--/ .btn-group --> 