
<div class="panel panel-default">
    
<?= $this->Element( 'Panel/add' )?>

    <div class="panel-body">
        <?php 
        echo $this->Element( 'Toolbar/form_add' );
        
        // START FORM
        echo $this->Form->create( $data, [ 'class' => 'form-horizontal', 'type' => 'file' ] );      
        
        $this->Form->templates($form_templates['longForm']);            
        
        // echo $this->Form->input('user_id', ['options' => $users]);
        echo $this->Form->input('product_category_id', ['options' => $productCategories]);
        echo $this->Form->input('name');
        echo $this->Form->input('product_seo');
        echo $this->Form->input('description');
        echo $this->Form->input('product_condition');
        echo $this->Form->input('year');
        echo $this->Form->input('price');
        // echo $this->Form->input('picture_dir');
        echo $this->Form->input('picture', [ 'type' => 'file' ] );
        echo $this->Form->input('ProductImages.image', [ 'type' => 'file' ] );
        // echo $this->Form->input('view_count');
        // echo $this->Form->input('product_photo_count');
        // echo $this->Form->input('row_status');
        ?>

    </div>
    <div class="panel-footer">
        <?php echo $this->Form->button( __( 'Submit' ), [ 'type' => 'submit','class' => 'btn btn-primary' ] ); ?>
    </div><!--/ .panel-footer -->
        <?= $this->Form->end() ?>
</div>
