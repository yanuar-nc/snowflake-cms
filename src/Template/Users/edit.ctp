
<div class="panel panel-default">
    
<?= $this->Element( 'Panel/edit' )?>
    <div class="panel-body">
        <?php 
        echo $this->Element( 'Toolbar/form_edit' );
        
        // START FORM
        echo $this->Form->create( $data, [ 'class' => 'form-horizontal',  ] );      
        
        $this->Form->templates($form_templates['longForm']);            
        
        echo $this->Form->input( 'username' );
        echo $this->Form->input( 'email' );
        echo $this->Form->input( 'password' );
        ?>

    </div>
    <div class="panel-footer">
        <?php echo $this->Form->submit( __( 'Submit' ), [ 'class' => 'btn btn-primary' ] ); ?>
    </div><!--/ .panel-footer -->
    <?= $this->Form->end() ?>
</div>
