<?php
    $id = $data->id;

    $picture_dir    = '/img/' . $var_model . '/picture/' . $data->picture_dir . '/';
    $picture        = $picture_dir . '' . $data->picture;
    $thumb          = $picture_dir . 'thumb_' . $data->picture;

    // echo $this->Element( 'Toolbar/form_view' );
?>

<div class="table-responsive">

    <table class="table table-bordered">
    
        <tr>
            <td width="10">
                <a href="<?= $this->Url->build($picture) ?>" data-rel="prettyPhoto">
                    <?php echo $this->Html->image( $thumb, array( 'class' => 'img-responsive img-thumbnail', 'alt' => '' ) ); ?>
                </a>
            </td>
            <td>
                <h3><?= h($data->name) ?></h3>            
                <p>
                <i class="fa fa-flag"></i> <?= __( 'Category' ) ?>: <?= $data->has('product_category') ? $this->Html->link($data->product_category->name, ['controller' => 'ProductCategories', 'action' => 'view', $data->product_category->id]) : '' ?> &nbsp; 
                <i class="fa fa-clock-o"></i> <?= __( 'Post date' ) ?>: <?= !empty( $data->modified ) ? h($data->modified->format(DATE_RFC850)) : null ?> &nbsp; 
                <i class="fa fa-money"></i> <?= __( 'Price' ) ?> <?= $this->Number->format($data->price) ?> &nbsp;
                <i class="fa fa-eye"></i> <?= __( 'Seen' ) ?> <?= $this->Number->format($data->view_count) ?>
                </p>
                <p>
                Description: <br>
                <?= $this->Text->autoParagraph(h($data->description)); ?>
                </p>
            </td>
        </tr>
    </table>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <!--
        <div class="panel-btns">
            <a href="" class="panel-minimize tooltips" data-toggle="tooltip" title="Minimize Panel"><i class="fa fa-minus"></i></a>
        </div><!--/ .ppanel-btns -->
        
        <h4 class="panel-title">Images</h4>
        
    </div><!--/ .panel-heading -->    
    <div class="panel-body">
    <?php
    foreach( $data->product_images as $pimage ):

        $picture_dir    = '/img/productimages/image/' . $pimage->image_dir . '/';
        $picture        = $picture_dir . '' . $pimage->image;
        $thumb          = $picture_dir . 'thumb_' . $pimage->image;        
    ?>
        <a href="<?= $this->Url->build($picture) ?>" data-rel="prettyPhoto">
            <?php echo $this->Html->image( $thumb, array( 'class' => 'img-responsive img-thumbnail', 'alt' => '' ) ); ?>
        </a>
    <?php
    endforeach;
    ?>
    </div>
</div>
<!-- <div class="products view large-9 medium-8 columns content">
    <h3><?= h($data->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            
        </tr>
        <tr>
            <th><?= __('Product Category') ?></th>
            
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($data->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Product Seo') ?></th>
            <td><?= h($data->product_seo) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= h($data->year) ?></td>
        </tr>
        <tr>
            <th><?= __('Picture Dir') ?></th>
            <td><?= h($data->picture_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Picture') ?></th>
            <td><?= h($data->picture) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($data->price) ?></td>
        </tr>
        <tr>
            <th><?= __('View Count') ?></th>
            <td><?= $this->Number->format($data->view_count) ?></td>
        </tr>
        <tr>
            <th><?= __('Product Photo Count') ?></th>
            <td><?= $this->Number->format($data->product_photo_count) ?></td>
        </tr>
        <tr>
            <th><?= __('Row Status') ?></th>
            <td><?= $this->Number->format($data->row_status) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($data->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Product Condition') ?></h4>
        <?= $this->Text->autoParagraph(h($data->product_condition)); ?>
    </div>
</div>
 -->