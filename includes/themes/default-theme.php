<div class="event-single-flex">
    <div class="event-single-content">
        <div class="event-single-title">
            <h2><?php echo $event->title; ?></h2>
        </div>
        <div class="event-default-feature-image">
            <div class="event-event-thumbnail">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($event->post->ID), 'full' ); ?>
<img src="<?php echo $image[0]; ?>" class="attachment-full size-full wp-post-image" alt="" sizes="(max-width: 1920px) 100vw, 1920px" width="1920" height="870">
            </div>
        </div>
        <div class="event-single-feature-date-time-location-wrapper">
                <div class="event-single-feature-date-location">
                    <div class="f-ico"><i class="fa fa-calendar"></i></div>
                    <div class='f-dtl'>
                        <h3>
                            <?php echo mep_get_option('mep_event_date_text', 'label_setting_sec') ? mep_get_option('mep_event_date_text', 'label_setting_sec') : _e('Data', 'mage-eventpress'); ?>
                        </h3>
                        <p><?php echo $event->startdate; ?></p>
                    </div>
                </div>
                <div class="event-single-feature-time">
                    <div class="f-ico"><i class="fa fa-clock-o"></i></div>
                    <div class='f-dtl'>
                        <h3>
                            <?php echo mep_get_option('mep_event_time_text', 'label_setting_sec') ? mep_get_option('mep_event_time_text', 'label_setting_sec') : _e('Hora', 'mage-eventpress'); ?>
                        </h3>
                        <p><?php echo $event->starttime; ?></p>
                    </div>
                </div>
                <div class="event-single-feature-date-location">
                    <div class="f-ico"><i class="fa fa-map-marker"></i></div>
                    <div class='f-dtl'>
                        <h3>
                            <?php echo mep_get_option('mep_event_location_text', 'label_setting_sec') ? mep_get_option('mep_event_location_text', 'label_setting_sec') : _e('Lloc', 'mage-eventpress'); ?>
                        </h3>
                        <p>
                        <?php echo $event->location; ?>
                        </p>
                    </div>
                </div>
        </div>
        <div class="event-single-feature-content">
                        <?php echo $event->content; ?>
        </div>
    </div>
    <div class="event-sidebar">
        <div class="event-sidebar-map">
            <h3>
                Mapa
            </h3>
      <div class="event-gmap-sec">
         <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $event->location; ?>&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style='width: 100%;min-height: 250px;'></iframe>
      </div>

        </div>
        <div class="df-sidebar-part">
                <div class="event-single-sidebar-social">
<div class="event-event-meta">
         Compartir és estimar !<ul class="event-social-share">
		 <li> <a data-toggle="tooltip" title="" class="facebook" onclick="window.open('https://www.facebook.com/sharer.php?u=<?php echo get_permalink($event->post->ID)?>','Facebook','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink($event->post->ID)?>" data-original-title="Comparteix al Facebook"><i class="fa fa-facebook"></i></a></li>
		 <li><a data-toggle="tooltip" title="" class="twitter" onclick="window.open('https://twitter.com/share?url=<?php echo get_permalink($event->post->ID)?>','Compartir al Twitter','width=600,height=300,left='+(screen.availWidth/2-300)+',top='+(screen.availHeight/2-150)+''); return false;" href="http://twitter.com/share?url=<?php echo get_permalink($event->post->ID)?>" data-original-title="Comparteix al Twitter"><i class="fa fa-twitter"></i></a></li>
          </ul>
                </div>
        </div>
    </div>
</div>
