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

$this->assign('title', $message);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $this->fetch('title') ?></title>

        <?php
        $theme_styles   = array( 'style.default' );

        echo $this->Html->css( $theme_styles, array( 'media' => 'screen' ), array( 'block' => 'css' ) );
        echo $this->fetch( 'css' );
        ?>
    </head>
    <body>
        <section>
            <div class="notfoundpanel">
                <h1><?= $code ?>!</h1>
                <h3><?= $message ?>!</h3>
                <p><?= sprintf(
                        __d('cake', 'The requested address %s was not found on this server.'),
                        "<strong>'{$url}'</strong>"
                    ) ?>
                </p>
                <?php if (!empty($error->queryString)) : ?>
                    <p class="notice">
                        <strong>SQL Query: </strong>
                        <?= h($error->queryString) ?>
                    </p>
                <?php endif; ?>
                <?php if (!empty($error->params)) : ?>
                        <strong>SQL Query Params: </strong>
                        <?= Debugger::dump($error->params) ?>
                <?php endif; ?>
                <?= $this->element('auto_table_warning') ?>
                <?php
                    if (extension_loaded('xdebug')):
                        xdebug_print_function_stack();
                    endif;

                    $this->end();
                ?>
                <form action="search-results.html">
                    <input type="text" class="form-control" placeholder="Search for page" /> <button class="btn btn-primary">Search</button>
                </form>
            </div><!-- notfoundpanel -->
        </section>
    </body>

    <?php
    $js = array( 'jquery-1.11.1.min', 
                 'jquery-migrate-1.2.1.min', 
                 'bootstrap.min',
                 'modernizr.min',
                 'pace.min',
                 'retina.min'
                 );
    echo $this->Html->script( $js );
    echo $this->fetch( 'script' );
    // echo $this->Html->script( 'custom' );

    ?>   

</html>