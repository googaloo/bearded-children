<div class="bc-slider-meta-text">
 
	<p>
		<?php $metabox->the_field('btn'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>"/>
		</br><span>Enter in the button text.</span>
	</p>
	
	<p>
		<?php $metabox->the_field('link'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>" placeholder="http://" />
		</br><span>Enter the Link (Be sure to use "http://")</span>
	</p>

</div>