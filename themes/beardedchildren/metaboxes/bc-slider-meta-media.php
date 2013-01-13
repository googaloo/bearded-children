<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control metabox">
  
    <?php $mb->the_field('main-slide-img'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('Insert Slide Image'); ?>
 
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Set Slider image (ie: 890 x 335)')); ?>
    </p>
 
    <?php $mb->the_field('sidebar-img'); ?>
    <?php $wpalchemy_media_access->setGroupName('nn2')->setInsertButtonLabel('Insert Sidebar Image'); ?>
 
    <p>
        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Set Side image (ie: 210 x 125)')); ?>
    </p>
 
</div>