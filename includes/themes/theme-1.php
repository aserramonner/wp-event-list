<?php
// Settings Value :::::::::::::::::::::::::::::::::::::::;
?>
<div class="mep-default-theme spring_field">
    <div class="mep_flex">
        <div class="spring_field_banner">
            <div class="mep-default-feature-image">
                <div class="mep-event-thumbnail">
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($event->post->ID), 'full' ); ?>
<img src="<?php echo $image[0]; ?>" class="attachment-full size-full wp-post-image" alt="" sizes="(max-width: 1920px) 100vw, 1920px" width="1920" height="870">
                </div>
            </div>
        </div>
        <div class="spring_field_banner_right">
            <div class="mep-default-title">
              <h2>
                <?php echo $event->title; ?>
              </h2>
            </div>
            <?php if ($hide_calendar_details == 'no') { ?>
                <div class="mep-default-sidrbar-calender-btn">
                    <?php do_action('mep_event_add_calender'); ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="mep-default-sidrbar-map">
      <h3>Lloc:</h3>
      <div class="mep-gmap-sec">
         <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $event->location; ?>&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style='width: 100%;min-height: 250px;'></iframe>
      </div>

    </div>
    <div class="mep_spring_date">
            <div class="mep-default-feature-date">
                <div class="df-ico"><i class="fa fa-calendar"></i></div>
                <div class='df-dtl'>
                    <h3><?php _e('Data:', 'mage-eventpress'); ?></h3>
                    <p><?php echo $event->startdate; ?></p>
                </div>
            </div>
            <div class="mep-default-feature-time">
                <div class="df-ico"><i class="fa fa-clock-o"></i></div>
                <div class='df-dtl'>
                    <h3><?php _e('Hora:', 'mage-eventpress'); ?></h3>
                    <p><?php echo $event->starttime; ?></p>
                </div>
            </div>
            <div class="mep-default-feature-location">
                <div class="df-ico"><i class="fa fa-map-marker"></i></div>
                <div class='df-dtl'>
                    <h3>
                       Lloc
                    </h3>
                    <p><?php echo $event->location; ?></p>
                </div>
            </div>
    </div>
    <div class="mep-default-feature-content">
        <h4 class="mep-cart-table-title"><?php _e('Descripció', 'mage-eventpress'); ?></h4>
        <?php echo $event->content; ?>
        <div class="mep-theme1-faq-sec">
            <?php do_action('mep_event_faq'); ?>
        </div>
    </div>
</div>
