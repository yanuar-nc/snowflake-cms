
<div class="panel panel-default">
    
<?= $this->Element( 'Panel/add' )?>

    <div class="panel-body">
        <?php 
        echo $this->Element( 'Toolbar/form_add' );
        
        // START FORM
        echo $this->Form->create( $data, [ 'class' => 'form-horizontal', 'type' => 'file' ] );      
        
        $this->Form->templates($form_templates['longForm']);     
        // pr( $products );
            echo $this->Form->input('title');
            echo $this->Form->input('image', [ 'type' => 'file' ] );
            // echo $this->Form->input('image_dir');
            echo $this->Form->input('product_id', ['type' => 'hidden']);
        ?>
    </div>
    <div class="panel-footer">
        <?php echo $this->Form->button( __( 'Submit' ), [ 'type' => 'submit','class' => 'btn btn-primary' ] ); ?>
    </div><!--/ .panel-footer -->
        <?= $this->Form->end() ?>
</div>
