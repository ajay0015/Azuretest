<?php
   function yummomatic_logs()
   {
       global $wp_filesystem;
       if ( ! is_a( $wp_filesystem, 'WP_Filesystem_Base') ){
           include_once(ABSPATH . 'wp-admin/includes/file.php');$creds = request_filesystem_credentials( site_url() );
           wp_filesystem($creds);
       }
       if(isset($_POST['yummomatic_delete']))
       {
           if($wp_filesystem->exists(WP_CONTENT_DIR . '/yummomatic_info.log'))
           {
               $wp_filesystem->delete(WP_CONTENT_DIR . '/yummomatic_info.log');
           }
       }
       if(isset($_POST['yummomatic_delete_rules']))
       {
           $running = array();
           update_option('yummomatic_running_list', $running);
       }
       if(isset($_POST['yummomatic_restore_defaults']))
       {
           yummomatic_activation_callback(true);
       }
       if(isset($_POST['yummomatic_delete_all']))
       {
           yummomatic_delete_all_posts();
       }
   ?>
<div class="wp-header-end"></div>
<div class="wrap gs_popuptype_holder seo_pops">
<div>
   <div>
      <h3>
         <?php echo esc_html__("System Info:", 'yummomatic-yummly-post-generator');?> 
         <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
            <div class="bws_hidden_help_text cr_min_260px">
               <?php
                  echo esc_html__("Some general system information.", 'yummomatic-yummly-post-generator');
                  ?>
            </div>
         </div>
      </h3>
      <hr/>
      <table class="cr_server_stat">
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("User Agent:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo $_SERVER['HTTP_USER_AGENT'] ?></td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("Web Server:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("PHP Version:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo phpversion(); ?></td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("PHP Max POST Size:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo ini_get('post_max_size'); ?></td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("PHP Max Upload Size:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo ini_get('upload_max_filesize'); ?></td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("PHP Memory Limit:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo ini_get('memory_limit'); ?></td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("PHP DateTime Class:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo (class_exists('DateTime') && class_exists('DateTimeZone')) ? '<span class="cdr-green">' . esc_html__('Available', 'yummomatic-yummly-post-generator') . '</span>' : '<span class="cdr-red">' . esc_html__('Not available', 'yummomatic-yummly-post-generator') . '</span> | <a href="http://php.net/manual/en/datetime.installation.php" target="_blank">more info&raquo;</a>'; ?> </td>
         </tr>
         <tr class="cdr-dw-tr">
            <td class="cdr-dw-td"><?php echo esc_html__("PHP Curl:", 'yummomatic-yummly-post-generator');?></td>
            <td class="cdr-dw-td-value"><?php echo (function_exists('curl_version')) ? '<span class="cdr-green">' . esc_html__('Available', 'yummomatic-yummly-post-generator') . '</span>' : '<span class="cdr-red">' . esc_html__('Not available', 'yummomatic-yummly-post-generator') . '</span>'; ?> </td>
         </tr>
         <?php do_action('coderevolution_dashboard_widget_server') ?>
      </table>
   </div>
   <div>
      <br/>
      <hr class="cr_special_hr"/>
      <div>
         <h3>
            <?php echo esc_html__("Rules Currently Running:", 'yummomatic-yummly-post-generator');?>
            <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
               <div class="bws_hidden_help_text cr_min_260px">
                  <?php
                     echo esc_html__("These rules are currently running on your server.", 'yummomatic-yummly-post-generator');
                     ?>
               </div>
            </div>
         </h3>
         <div>
            <?php
               if (!get_option('yummomatic_running_list')) {
                   $running = array();
               } else {
                   $running = get_option('yummomatic_running_list');
               }
               if (!empty($running)) {
                   echo '<ul>';
                   foreach($running as $key => $thread)
                   {
                       foreach($thread as $param => $type)
                       {
                           echo '<li><b>' . esc_html($type) . '</b> - ID' . esc_html($param) . '</li>';
                       }
                   }
                   echo '</ul>';        
               }
               else
               {
                   echo esc_html__('No rules are running right now', 'yummomatic-yummly-post-generator');
               }
               ?>
         </div>
         <hr/>
         <form method="post" onsubmit="return confirm('<?php echo esc_html__('Are you sure you want to clear the running list?', 'yummomatic-yummly-post-generator');?>');">
            <input name="yummomatic_delete_rules" type="submit" title="<?php echo esc_html__('Caution! This is for debugging purpose only!', 'yummomatic-yummly-post-generator');?>" value="<?php echo esc_html__('Clear Running Rules List', 'yummomatic-yummly-post-generator');?>">
         </form>
      </div>
      <div>
         <br/>
         <hr class="cr_special_hr"/>
         <div>
            <h3>
               <?php echo esc_html__('Restore Plugin Default Settings', 'yummomatic-yummly-post-generator');?> 
               <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                  <div class="bws_hidden_help_text cr_min_260px">
                     <?php
                        echo esc_html__('Hit this button and the plugin settings will be restored to their default values. Warning! All settings will be lost!', 'yummomatic-yummly-post-generator');
                        ?>
                  </div>
               </div>
            </h3>
            <hr/>
            <form method="post" onsubmit="return confirm('<?php echo esc_html__('Are you sure you want to restore the default plugin settings?', 'yummomatic-yummly-post-generator');?>');"><input name="yummomatic_restore_defaults" type="submit" value="<?php echo esc_html__('Restore Plugin Default Settings', 'yummomatic-yummly-post-generator');?>"></form>
         </div>
         <br/>
         <hr class="cr_special_hr"/>
         <div>
            <h3>
               <?php echo esc_html__('Delete All Posts Generated by this Plugin:', 'yummomatic-yummly-post-generator');?> 
               <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                  <div class="bws_hidden_help_text cr_min_260px">
                     <?php
                        echo esc_html__('Hit this button and all posts generated by this plugin will be deleted!', 'yummomatic-yummly-post-generator');
                        ?>
                  </div>
               </div>
            </h3>
            <hr/>
            <form method="post" onsubmit="return confirm('<?php echo esc_html__('Are you sure you want to delete all generated posts? This can take a while, please wait until it finishes.', 'yummomatic-yummly-post-generator');?>');"><input name="yummomatic_delete_all" type="submit" value="<?php echo esc_html__('Delete All Generated Posts', 'yummomatic-yummly-post-generator');?>"></form>
         </div>
         <br/>
         <hr class="cr_special_hr"/>
         <h3>
            <?php echo esc_html__('Activity Log:', 'yummomatic-yummly-post-generator');?>
            <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
               <div class="bws_hidden_help_text cr_min_260px">
                  <?php
                     echo esc_html__('This is the main log of your plugin. Here will be listed every single instance of the rules you run or are automatically run by schedule jobs (if you enable logging, in the plugin configuration).', 'yummomatic-yummly-post-generator');
                     ?>
               </div>
            </div>
         </h3>
         <div>
            <?php
               if($wp_filesystem->exists(WP_CONTENT_DIR . '/yummomatic_info.log'))
               {
                    $log = $wp_filesystem->get_contents(WP_CONTENT_DIR . '/yummomatic_info.log');
                    echo $log;
               }
               else
               {
                   echo esc_html__('Log empty', 'yummomatic-yummly-post-generator');
               }
               ?>
         </div>
      </div>
      <hr/>
      <form method="post" onsubmit="return confirm('<?php echo esc_html__('Are you sure you want to delete all logs?', 'yummomatic-yummly-post-generator');?>');">
         <input name="yummomatic_delete" type="submit" value="<?php echo esc_html__('Delete Logs', 'yummomatic-yummly-post-generator');?>">
      </form>
   </div>
</div>
<?php
   }
   ?>