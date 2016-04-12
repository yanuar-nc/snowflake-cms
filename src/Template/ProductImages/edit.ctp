
<div class="panel panel-default">
    
<?= $this->Element( 'Panel/edit' )?>

    <div class="panel-body">
        <?php 
        echo $this->Element( 'Toolbar/form_edit' );
        
        // START FORM
        echo $this->Form->create( $data, [ 'class' => 'form-horizontal', 'type' => 'file' ] );      
        
        $this->Form->templates($form_templates['longForm']);     

        echo $this->Form->input('title');
        ?>
        <div class="form-group  required" form-type="number">
            <label class="col-md-2 control-label"></label>
            <div class="col-md-6">
            <?php
            $picture = '/img/productimages/image/' . $data[ 'image_dir' ] . '/' . $data[ 'image' ];
            $thumb   = 'productimages/image/' . $data[ 'image_dir' ] . '/thumb_' . $data[ 'image' ];
            ?>
                <a href="<?= $this->Url->build($picture) ?>" data-rel="prettyPhoto">
                    <?php echo $this->Html->image( $thumb, array( 'class' => 'img-responsive img-thumbnail', 'alt' => '' ) ); ?>
                </a>
            </div>
        </div>
        <?php        
        echo $this->Form->input('image', [ 'type' => 'file' ] );

        echo $this->Form->input('product_id', ['type' => 'hidden']);
        ?>
    </div>
    <div class="panel-footer">
        <?php echo $this->Form->button( __( 'Submit' ), [ 'type' => 'submit','class' => 'btn btn-primary' ] ); ?>
    </div><!--/ .panel-footer -->
        <?= $this->Form->end() ?>
</div>
