<?php
use Cake\Routing\Router;
?>

<div class="panel panel-default">
    
<?= $this->Element( 'Panel/edit' )?>

    <div class="panel-body">
        <?php 
        echo $this->Element( 'Toolbar/form_edit' );
        
        // START FORM
        echo $this->Form->create( $data, [ 'class' => 'form-horizontal', 'type' => 'file' ] );      
        
        $this->Form->templates($form_templates['longForm']);            
        
        // echo $this->Form->input('user_id', ['options' => $users]);
        echo $this->Form->input('product_category_id', ['options' => $productCategories]);
        echo $this->Form->input('name');
        echo $this->Form->input('product_seo');
        echo $this->Form->input('description');
        echo $this->Form->input('year');
        echo $this->Form->input('price');
        // echo $this->Form->input('picture_dir');
        ?>
        <div class="form-group  required" form-type="number">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-6">
            <?php
            $picture = '/img/Products/picture/' . $data[ 'picture_dir' ] . '/' . $data[ 'picture' ];
            $thumb   = 'Products/picture/' . $data[ 'picture_dir' ] . '/thumb_' . $data[ 'picture' ];
            ?>
                <a href="<?= Router::url($picture) ?>" data-rel="prettyPhoto">
                    <?php echo $this->Html->image( $thumb, array( 'class' => 'img-responsive img-thumbnail', 'alt' => '' ) ); ?>
                </a>
            </div>
        </div>
        <?php
        echo $this->Form->input('picture', [ 'type' => 'file', 'required' => false ] );
        // echo $this->Form->input('ProductImages.image', [ 'type' => 'file' ] );
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
