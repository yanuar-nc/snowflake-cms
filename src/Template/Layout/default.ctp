<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title_for_layout; ?></title>

        <?php
        $theme_styles   = array( 'style.default','bootstrap-wysihtml5', 'flags/flags', 'prettyPhoto', 'custom' );

        echo $this->Html->css( $theme_styles, array( 'media' => 'screen' ), array( 'block' => 'css' ) );
        echo $this->fetch( 'css' );
        ?>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        
        <?php echo $this->Element( 'header' ); ?>
        
        <section>
            <div class="mainwrapper">
                <?php echo $this->Element( 'leftpanel' ); ?>

                
                <div class="mainpanel">
                    <div class="pageheader">
                        <div class="media">
                            <div class="pageicon pull-left">
                                <i class="<?= $module_icon ?>"></i>
                            </div>
                            <div class="media-body">
                                <ul class="breadcrumb">
                                    <li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
                                    <li>Dashboard</li>
                                </ul>
                                <h4><?= __( $module_title ) ?></h4>
                            </div>
                        </div><!-- media -->
                    </div><!-- pageheader -->
                    
                    <div class="contentpanel">
                        <?php 
                        echo $this->Flash->render();
                        echo $this->fetch( 'content' ); 
                        // echo $this->element( 'sql_dump' );
                        ?> 
                    </div><!-- contentpanel -->
                    
                </div><!-- mainpanel -->
            </div><!-- mainwrapper -->
        </section>


    </body>

    <?php
    $js = array( 'jquery-1.11.1.min', 
                 'jquery-migrate-1.2.1.min', 
                 'jquery-ui-1.10.3.min',
                 'bootstrap.min',
                 'modernizr.min',
                 'pace.min',
                 'retina.min',
                 'jquery.cookies',
                 'ckeditor/ckeditor.js',
                 'ckeditor/adapters/jquery.js',
                 'jquery.prettyPhoto',
                 );
    echo $this->Html->script( $js );
    echo $this->fetch( 'script' );
    echo $this->Html->script( 'custom' );

    ?>   

</html>
