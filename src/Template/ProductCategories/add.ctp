
<div class="panel panel-default">
    
<?= $this->Element( 'Panel/add' )?>

    <div class="panel-body">
        <?php 
        echo $this->Element( 'Toolbar/form_add' );
        
        // START FORM
        echo $this->Form->create( $data, [ 'class' => 'form-horizontal' ] );      
        
        $this->Form->templates($form_templates['longForm']);            
        
        echo $this->Form->input( 'name' );
        echo $this->Form->input( 'parent_id', ['options' => $parentProductCategories, 'empty' => '--- Choose Item ---']);
        ?>

    </div>
    <div class="panel-footer">
        <?php echo $this->Form->button( __( 'Submit' ), [ 'type' => 'submit','class' => 'btn btn-primary' ] ); ?>
    </div><!--/ .panel-footer -->
        <?= $this->Form->end() ?>
</div>
