<!-- 
<div class="pull-right mb15">
	<?php
	echo $this->Form->create( 'Search', [ 'url' => '/' . $var_controller . '/search', 'type' => 'get', 'class' => 'form-horizontal form-bordered' ] );
	?>
		<div class="input-group">
			<?php 
			echo $this->Form->input( 'keyword', [ 
				'class' => 'form-control', 
				'placeholder' => 'Search', 
				'type' => 'search', 
				'label' => false, 
				'templates' => 	[
					'inputContainer' => '{{content}}'
				]
			] ); 
			?>
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
			</span>
		</div>	
	<?php
	echo $this->Form->end();
	?>
</div>
 -->