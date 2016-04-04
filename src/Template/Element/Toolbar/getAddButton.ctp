
<div class="btn-group">

    <?php 
        echo $this->Html->link(
            '<i class="fa fa-plus"></i> &nbsp; ' . __( BTN_ADD_NEW ),
            array(
                'controller' => $var_controller,
                'action' => ACTION_ADD,
            ),
            array(
                'class' => 'btn btn-sm btn-white tooltips',
                'data-toggle' => 'tooltip',
                'data-original-title' => __( TOOLTIP_ADD_NEW ),
                'tabindex' => 1,
                'escape' => false
            )
        ); 
    ?>

</div>