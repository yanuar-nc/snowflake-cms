<div class="btn-group">
    
    <a href="javascript:history.go(-1);" class="btn btn-sm btn-white tooltips" data-toggle="tooltip" data-original-title="<?= __( TOOLTIP_PREVIOUS ); ?>">
        <i class="fa fa-chevron-left"></i> &nbsp; <?= __( BTN_PREVIOUS ); ?>
    </a>

    <a href="<?= $this->request->here; ?>" class="btn btn-sm btn-white tooltips" data-toggle="tooltip" data-original-title="<?= __( TOOLTIP_REFRESH ); ?>">
        <i class="fa fa-refresh"></i> &nbsp; <?= __( BTN_REFRESH ); ?>
    </a>
    
</div><!--/ .btn-group -->
