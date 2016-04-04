<div class="btn-toolbar">

    <div class="btn-group">
    
        <a href="javascript:history.go(-1);" class="btn btn-sm btn-white tooltips" data-toggle="tooltip" data-original-title="<?php echo __( TOOLTIP_PREVIOUS ); ?>">
            <i class="fa fa-chevron-left"></i> &nbsp; <?php echo __( BTN_PREVIOUS ); ?>
        </a>
    
        <a href="<?php echo $this->request->here; ?>" class="btn btn-sm btn-white tooltips" data-toggle="tooltip" data-original-title="<?php echo __( TOOLTIP_REFRESH ); ?>">
            <i class="fa fa-refresh"></i> &nbsp; <?php echo __( BTN_REFRESH ); ?>
        </a>
        
    </div><!--/ .btn-group -->
    
</div><!--/ .btn-toolbar -->