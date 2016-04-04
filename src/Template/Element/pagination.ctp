
<div class="text-center">
    
    
    <small style="display: block;"><?php echo $this->Paginator->counter( __( 'Page {{page}} of {{pages}}, showing {{current}} records out of
{{count}} total, starting on record {{start}}, ending on {{end}}' ) ); ?></small>

    <ul class="pagination pagination-sm">
        <?php
        $paging = $this->request->params[ 'paging' ][ $var_model ];

        if ( $paging[ 'prevPage' ] == true || $paging[ 'nextPage' ] == true ):
        echo $this->Paginator->prev( 'Previous Page', 
            array( 
                'tag' => 'li', 'escape' => false 
            ), 
            null, 
            array( 
                'tag' => 'li','class' => 'disabled','disabledTag' => 'a', 'escape' => false
            )
        );
        echo $this->Paginator->numbers(
            array('modulus' => 5,
                'separator' => false,
                'before' => '',
                'after' => '',
                'tag' => 'li',
                'class' => false,
                'currentClass' => 'active',
                'currentTag' => 'span',
                'first' => 1,
                'last' => 1,
                'ellipsis' => "&hellip;"
            )
        );

        echo $this->Paginator->next( 'Next Page', 
            array( 
                'tag' => 'li', 'escape' => false 
            ), 
            null, 
            array( 
                'tag' => 'li','class' => 'disabled', 'disabledTag' => 'a', 'escape' => false 
            ) 
        );
        endif;
        ?>
    </ul>
    
</div>