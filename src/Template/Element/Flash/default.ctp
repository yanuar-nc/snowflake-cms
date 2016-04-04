<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
?>
<div class="row">
    
    <div class="col-lg-12">
    
        <div class="alert alert-info alert-block <?= h($class) ?>">
            <button data-dismiss="alert" class="close close-sm" type="button">
            	<i class="fa fa-times"></i>
            </button>
            <h4><i class="fa fa-question-circle"></i> <?php echo __( 'Message!' ); ?></h4>
            <p><?php echo __( $message ); ?></p>
        </div><!--/ .alert -->
        
    </div><!--/ .col-lg-12 -->
    
</div><!--/ .row -->
