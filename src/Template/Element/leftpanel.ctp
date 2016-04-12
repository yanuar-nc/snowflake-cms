<div class="leftpanel">
    <div class="media profile-left">
        <?php
            echo $this->Html->link( $this->Html->image( $auth_picture, [ 'class' => 'img-circle' ] ),
                [
                    'controller' => 'users',
                    'action' => 'profile',
                    $auth_id
                ],
                [ 'class' => 'pull-left profile-thumb', 'escape' => false ]
            );
        ?>
        <div class="media-body">
            <h4 class="media-heading"><?= $auth_display_name; ?></h4>
            <small class="text-muted"><?= $auth_role; ?></small>
        </div>
    </div><!-- media -->
    
    <h5 class="leftpanel-title">Navigation</h5>
    <ul class="nav nav-pills nav-stacked">
        <li <?php echo bootstrap_nav_active( $this->request->controller, 'Home' ); ?>>
            <?php 
                echo $this->Html->link(
                    '<i class="fa fa-dashboard"></i>&nbsp;<span>' . __( 'Dashboard' ) . '</span>',
                    [
                        'controller' => 'home',
                        'action' => 'index'
                    ],
                    [
                        'escape' => false,
                        'class' => ''
                    ]
                ); 
            ?>
        </li>
             
        <li <?php echo bootstrap_nav_active( $this->request->controller, 'Users' ); ?>>
            <?php 
                echo $this->Html->link(
                    '<i class="fa fa-user"></i>&nbsp;<span>' . __( 'User' ) . '</span>',
                    [
                        'controller' => 'users',
                        'action' => 'index'
                    ],
                    [
                        'escape' => false,
                        'class' => ''
                    ]
                ); 
            ?>
        </li> 
        <?php $nav_array_contents = [ 'Products', 'product_categories', 'product_images' ]; ?>
        <li class="<?php echo bootstrap_nav_active( $var_controller, $nav_array_contents, false, 'active' ); ?> parent">
            <a href=""><i class="fa fa-gift"></i> <span><?php echo __( 'Products' ); ?></span></a>
            <ul class="children" <?php echo bootstrap_nav_active( $var_controller, $nav_array_contents, false, 'style="display: block"' ); ?>>

                <li <?php echo bootstrap_nav_active( $this->request->controller, 'Products' ); ?>>
                    <?php 
                        echo $this->Html->link(
                            __( 'Products' ) . '</span>',
                            [
                                'controller' => 'Products',
                                'action' => 'index'
                            ],
                            [
                                'escape' => false,
                                'class' => ''
                            ]
                        ); 
                    ?>
                </li>                                            
                <li <?php echo bootstrap_nav_active( $this->request->controller, 'product_categories' ); ?>>
                    <?php 
                        echo $this->Html->link(
                            __( 'Categories' ),
                            [
                                'controller' => 'product_categories',
                                'action' => 'index'
                            ],
                            [
                                'escape' => false,
                                'class' => ''
                            ]
                        ); 
                    ?>
                </li> 
                <li <?php echo bootstrap_nav_active( $this->request->controller, 'product_images' ); ?>>
                    <?php 
                        echo $this->Html->link(
                            __( 'Images' ),
                            [
                                'controller' => 'product_images',
                                'action' => 'index'
                            ],
                            [
                                'escape' => false,
                                'class' => ''
                            ]
                        ); 
                    ?>
                </li>                          
            </ul>
        </li>

    </ul>
    
</div><!-- leftpanel -->