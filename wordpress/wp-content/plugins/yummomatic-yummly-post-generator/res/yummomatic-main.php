<?php
   function yummomatic_admin_settings()
   {
       $language_names = array(
           esc_html__("Disabled", 'yummomatic-yummly-post-generator'),
           esc_html__("Afrikaans (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Albanian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Arabic (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Amharic (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Armenian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Belarusian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Bulgarian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Catalan (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Chinese Simplified (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Croatian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Czech (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Danish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Dutch (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("English (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Estonian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Filipino (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Finnish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("French (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Galician (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("German (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Greek (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Hebrew (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Hindi (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Hungarian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Icelandic (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Indonesian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Irish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Italian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Japanese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Korean (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Latvian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Lithuanian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Norwegian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Macedonian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Malay (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Maltese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Persian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Polish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Portuguese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Romanian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Russian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Serbian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Slovak (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Slovenian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Spanish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Swahili (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Swedish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Thai (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Turkish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Ukrainian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Vietnamese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Welsh (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Yiddish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Tamil (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Azerbaijani (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Kannada (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Basque (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Bengali (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Latin (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Chinese Traditional (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Esperanto (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Georgian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Telugu (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Gujarati (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Haitian Creole (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Urdu (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Burmese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Bosnian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Cebuano (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Chichewa (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Corsican (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Frisian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Scottish Gaelic (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Hausa (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Hawaian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Hmong (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Igbo (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Javanese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Kazakh (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Khmer (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Kurdish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Kyrgyz (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Lao (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Luxembourgish (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Malagasy (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Malayalam (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Maori (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Marathi (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Mongolian (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Nepali (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Pashto (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Punjabi (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Samoan (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Sesotho (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Shona (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Sindhi (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Sinhala (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Somali (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Sundanese (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Swahili (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Tajik (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Uzbek (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Xhosa (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Yoruba (Google Translate)", 'yummomatic-yummly-post-generator'),
           esc_html__("Zulu (Google Translate)", 'yummomatic-yummly-post-generator')
       );
       $language_codes = array(
           "disabled",
           "af",
           "sq",
           "ar",
           "am",
           "hy",
           "be",
           "bg",
           "ca",
           "zh-CN",
           "hr",
           "cs",
           "da",
           "nl",
           "en",
           "et",
           "tl",
           "fi",
           "fr",
           "gl",
           "de",
           "el",
           "iw",
           "hi",
           "hu",
           "is",
           "id",
           "ga",
           "it",
           "ja",
           "ko",
           "lv",
           "lt",
           "no",
           "mk",
           "ms",
           "mt",
           "fa",
           "pl",
           "pt",
           "ro",
           "ru",
           "sr",
           "sk",
           "sl",
           "es",
           "sw",
           "sv",   
           "th",
           "tr",
           "uk",
           "vi",
           "cy",
           "yi",
           "ta",
           "az",
           "kn",
           "eu",
           "bn",
           "la",
           "zh-TW",
           "eo",
           "ka",
           "te",
           "gu",
           "ht",
           "ur",
           "my",
           "bs",
           "ceb",
           "ny",
           "co",
           "fy",
           "gd",
           "ha",
           "haw",
           "hmn",
           "ig",
           "jw",
           "kk",
           "km",
           "ku",
           "ky",
           "lo",
           "lb",
           "mg",
           "ml",
           "mi",
           "mr",
           "mn",
           "ne",
           "ps",
           "pa",
           "sm",
           "st",
           "sn",
           "sd",
           "si",
           "so",
           "su",
           "sw",
           "tg",
           "uz",
           "xh",
           "yo",
           "zu"
       );
   ?>
<div class="wp-header-end"></div>
<div class="wrap gs_popuptype_holder seo_pops">
   <div>
      <form id="myForm" method="post" action="<?php if(is_multisite() && is_network_admin()){echo '../options.php';}else{echo 'options.php';}?>">
         <div class="cr_autocomplete">
            <input type="password" id="PreventChromeAutocomplete" 
               name="PreventChromeAutocomplete" autocomplete="address-level4" />
         </div>
         <?php
            settings_fields('yummomatic_option_group');
            do_settings_sections('yummomatic_option_group');
            $yummomatic_Main_Settings = get_option('yummomatic_Main_Settings', false);
            if (isset($yummomatic_Main_Settings['yummomatic_enabled'])) {
                $yummomatic_enabled = $yummomatic_Main_Settings['yummomatic_enabled'];
            } else {
                $yummomatic_enabled = '';
            }
            if (isset($yummomatic_Main_Settings['enable_metabox'])) {
                $enable_metabox = $yummomatic_Main_Settings['enable_metabox'];
            } else {
                $enable_metabox = '';
            }
            if (isset($yummomatic_Main_Settings['li_comma'])) {
                $li_comma = $yummomatic_Main_Settings['li_comma'];
            } else {
                $li_comma = '';
            }
            if (isset($yummomatic_Main_Settings['enable_markup'])) {
                $enable_markup = $yummomatic_Main_Settings['enable_markup'];
            } else {
                $enable_markup = '';
            }
            if (isset($yummomatic_Main_Settings['sentence_list'])) {
                $sentence_list = $yummomatic_Main_Settings['sentence_list'];
            } else {
                $sentence_list = '';
            }
            if (isset($yummomatic_Main_Settings['sentence_list2'])) {
                $sentence_list2 = $yummomatic_Main_Settings['sentence_list2'];
            } else {
                $sentence_list2 = '';
            }
            if (isset($yummomatic_Main_Settings['variable_list'])) {
                $variable_list = $yummomatic_Main_Settings['variable_list'];
            } else {
                $variable_list = '';
            }
            if (isset($yummomatic_Main_Settings['enable_detailed_logging'])) {
                $enable_detailed_logging = $yummomatic_Main_Settings['enable_detailed_logging'];
            } else {
                $enable_detailed_logging = '';
            }
            if (isset($yummomatic_Main_Settings['enable_logging'])) {
                $enable_logging = $yummomatic_Main_Settings['enable_logging'];
            } else {
                $enable_logging = '';
            }
            if (isset($yummomatic_Main_Settings['auto_clear_logs'])) {
                $auto_clear_logs = $yummomatic_Main_Settings['auto_clear_logs'];
            } else {
                $auto_clear_logs = '';
            }
            if (isset($yummomatic_Main_Settings['rule_timeout'])) {
                $rule_timeout = $yummomatic_Main_Settings['rule_timeout'];
            } else {
                $rule_timeout = '';
            }
            if (isset($yummomatic_Main_Settings['strip_links'])) {
                $strip_links = $yummomatic_Main_Settings['strip_links'];
            } else {
                $strip_links = '';
            }
            if (isset($yummomatic_Main_Settings['strip_scripts'])) {
                $strip_scripts = $yummomatic_Main_Settings['strip_scripts'];
            } else {
                $strip_scripts = '';
            }
            if (isset($yummomatic_Main_Settings['send_email'])) {
                $send_email = $yummomatic_Main_Settings['send_email'];
            } else {
                $send_email = '';
            }
            if (isset($yummomatic_Main_Settings['email_address'])) {
                $email_address = $yummomatic_Main_Settings['email_address'];
            } else {
                $email_address = '';
            }
            if (isset($yummomatic_Main_Settings['translate'])) {
                $translate = $yummomatic_Main_Settings['translate'];
            } else {
                $translate = '';
            }
            if (isset($yummomatic_Main_Settings['spin_text'])) {
                $spin_text = $yummomatic_Main_Settings['spin_text'];
            } else {
                $spin_text = '';
            }
            if (isset($yummomatic_Main_Settings['best_user'])) {
                $best_user = $yummomatic_Main_Settings['best_user'];
            } else {
                $best_user = '';
            }
            if (isset($yummomatic_Main_Settings['best_password'])) {
                $best_password = $yummomatic_Main_Settings['best_password'];
            } else {
                $best_password = '';
            }
            if (isset($yummomatic_Main_Settings['min_word_title'])) {
                $min_word_title = $yummomatic_Main_Settings['min_word_title'];
            } else {
                $min_word_title = '';
            }
            if (isset($yummomatic_Main_Settings['max_word_title'])) {
                $max_word_title = $yummomatic_Main_Settings['max_word_title'];
            } else {
                $max_word_title = '';
            }
            if (isset($yummomatic_Main_Settings['min_word_content'])) {
                $min_word_content = $yummomatic_Main_Settings['min_word_content'];
            } else {
                $min_word_content = '';
            }
            if (isset($yummomatic_Main_Settings['max_word_content'])) {
                $max_word_content = $yummomatic_Main_Settings['max_word_content'];
            } else {
                $max_word_content = '';
            }
            if (isset($yummomatic_Main_Settings['required_words'])) {
                $required_words = $yummomatic_Main_Settings['required_words'];
            } else {
                $required_words = '';
            }
            if (isset($yummomatic_Main_Settings['banned_words'])) {
                $banned_words = $yummomatic_Main_Settings['banned_words'];
            } else {
                $banned_words = '';
            }
            if (isset($yummomatic_Main_Settings['custom_html2'])) {
                $custom_html2 = $yummomatic_Main_Settings['custom_html2'];
            } else {
                $custom_html2 = '';
            }
            if (isset($yummomatic_Main_Settings['custom_html'])) {
                $custom_html = $yummomatic_Main_Settings['custom_html'];
            } else {
                $custom_html = '';
            }
            if (isset($yummomatic_Main_Settings['skip_no_img'])) {
                $skip_no_img = $yummomatic_Main_Settings['skip_no_img'];
            } else {
                $skip_no_img = '';
            }
            if (isset($yummomatic_Main_Settings['spin_cust'])) {
                $spin_cust = $yummomatic_Main_Settings['spin_cust'];
            } else {
                $spin_cust = '';
            }
            if (isset($yummomatic_Main_Settings['skip_cust'])) {
                $skip_cust = $yummomatic_Main_Settings['skip_cust'];
            } else {
                $skip_cust = '';
            }
            if (isset($yummomatic_Main_Settings['strip_by_id'])) {
                $strip_by_id = $yummomatic_Main_Settings['strip_by_id'];
            } else {
                $strip_by_id = '';
            }
            if (isset($yummomatic_Main_Settings['strip_by_class'])) {
                $strip_by_class = $yummomatic_Main_Settings['strip_by_class'];
            } else {
                $strip_by_class = '';
            }
            if (isset($yummomatic_Main_Settings['app_id'])) {
                $app_id = $yummomatic_Main_Settings['app_id'];
            } else {
                $app_id = '';
            }
            if (isset($yummomatic_Main_Settings['resize_width'])) {
                $resize_width = $yummomatic_Main_Settings['resize_width'];
            } else {
                $resize_width = '';
            }
            if (isset($yummomatic_Main_Settings['resize_height'])) {
                $resize_height = $yummomatic_Main_Settings['resize_height'];
            } else {
                $resize_height = '';
            }
            if (isset($yummomatic_Main_Settings['do_not_check_duplicates'])) {
                $do_not_check_duplicates = $yummomatic_Main_Settings['do_not_check_duplicates'];
            } else {
                $do_not_check_duplicates = '';
            }
            if (isset($yummomatic_Main_Settings['require_all'])) {
                $require_all = $yummomatic_Main_Settings['require_all'];
            } else {
                $require_all = '';
            }
            if (isset($yummomatic_Main_Settings['auto_run'])) {
                $auto_run = $yummomatic_Main_Settings['auto_run'];
            } else {
                $auto_run = '';
            }
            if (isset($_GET['settings-updated'])) {
            ?>
         <div id="message" class="updated">
            <p class="cr_saved_notif"><strong>&nbsp;<?php echo esc_html__('Settings saved.', 'yummomatic-yummly-post-generator');?></strong></p>
         </div>
         <?php
            $get = get_option('coderevolution_settings_changed', 0);
            if($get == 1)
            {
                delete_option('coderevolution_settings_changed');
            ?>
         <div id="message" class="updated">
            <p class="cr_failed_notif"><strong>&nbsp;<?php echo esc_html__('Plugin registration failed!', 'yummomatic-yummly-post-generator');?></strong></p>
         </div>
         <?php 
            }
            elseif($get == 2)
            {
                    delete_option('coderevolution_settings_changed');
            ?>
         <div id="message" class="updated">
            <p class="cr_saved_notif"><strong>&nbsp;<?php echo esc_html__('Plugin registration successful!', 'yummomatic-yummly-post-generator');?></strong></p>
         </div>
         <?php 
            }
                }
            ?>
         <div>
            <div class="yummomatic_class">
               <table>
                  <tr>
                     <td>
                        <h1>
                           <span class="gs-sub-heading"><b>Yummomatic Automatic Post Generator Plugin - <?php echo esc_html__('Main Switch:', 'yummomatic-yummly-post-generator');?></b>&nbsp;</span>
                           <span class="cr_07_font">v2.0&nbsp;</span>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Enable or disable this plugin. This acts like a main switch.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                        </h1>
                     </td>
                     <td>
                        <div class="slideThree">	
                           <input class="input-checkbox" type="checkbox" id="yummomatic_enabled" name="yummomatic_Main_Settings[yummomatic_enabled]"<?php
                              if ($yummomatic_enabled == 'on')
                                  echo ' checked ';
                              ?>>
                           <label for="yummomatic_enabled"></label>
                        </div>
                     </td>
                  </tr>
               </table>
            </div>
            <div><?php if($yummomatic_enabled != 'on'){echo '<div class="crf_bord cr_color_red cr_auto_update">' . esc_html__('This feature of the plugin is disabled! Please enable it from the above switch.', 'yummomatic-yummly-post-generator') . '</div>';}?>
               <table>
                  <tr>
                     <td colspan="2">
                        <?php
                           $plugin = plugin_basename(__FILE__);
                           $plugin_slug = explode('/', $plugin);
                           $plugin_slug = $plugin_slug[0]; 
                           $uoptions = get_option($plugin_slug . '_registration', array());
                           if(isset($uoptions['item_id']) && isset($uoptions['item_name']) && isset($uoptions['created_at']) && isset($uoptions['buyer']) && isset($uoptions['licence']) && isset($uoptions['supported_until']))
                           {
                           ?>
                        <h3><b><?php echo esc_html__("Plugin Registration Info - Automatic Updates Enabled:", 'yummomatic-yummly-post-generator');?></b> </h3>
                        <ul>
                           <li><b><?php echo esc_html__("Item Name:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html($uoptions['item_name']);?></li>
                           <li>
                              <b><?php echo esc_html__("Item ID:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html($uoptions['item_id']);?>
                           </li>
                           <li>
                              <b><?php echo esc_html__("Created At:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html($uoptions['created_at']);?>
                           </li>
                           <li>
                              <b><?php echo esc_html__("Buyer Name:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html($uoptions['buyer']);?>
                           </li>
                           <li>
                              <b><?php echo esc_html__("License Type:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html($uoptions['licence']);?>
                           </li>
                           <li>
                              <b><?php echo esc_html__("Supported Until:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html($uoptions['supported_until']);?>
                           </li>
                        </ul>
                        <?php
                           }
                           else
                           {
                           ?>
                        <div class="notice notice-error is-dismissible"><p><?php echo esc_html__("Automatic updates for this plugin are disabled. Please activate the plugin from below, so you can benefit of automatic updates for it!", 'yummomatic-yummly-post-generator');?></p></div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                           <div class="bws_hidden_help_text cr_min_260px">
                              <?php
                                 echo sprintf( wp_kses( __( 'Please input your Envato purchase code, to enable automatic updates in the plugin. To get your purchase code, please follow <a href="%s" target="_blank">this tutorial</a>. Info submitted to the registration server consists of: purchase code, site URL, site name, admin email. All these data will be used strictly for registration purposes.', 'yummomatic-yummly-post-generator'), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( '//coderevolution.ro/knowledge-base/faq/how-do-i-find-my-items-purchase-code-for-plugin-license-activation/' ) );
                                 ?>
                           </div>
                        </div>
                        <b><?php echo esc_html__("Register Envato Purchase Code To Enable Automatic Updates:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td><input type="text" name="<?php echo esc_html($plugin_slug);?>_register_code" value="" placeholder="<?php echo esc_html__("Envato Purchase Code", 'yummomatic-yummly-post-generator');?>"></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td><input type="submit" name="<?php echo esc_html($plugin_slug);?>_register" id="<?php echo esc_html($plugin_slug);?>_register" class="button button-primary" onclick="unsaved = false;" value="<?php echo esc_html__("Register Purchase Code", 'yummomatic-yummly-post-generator');?>"/>
                        <?php
                           }
                           ?>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <hr/>
                     </td>
                     <td>
                        <hr/>
                     </td>
                  </tr>
               <tr><td colspan="2">
               <h3>
                  <ul>
                     <li><?php echo sprintf( wp_kses( __( 'Need help configuring this plugin? Please check out it\'s <a href="%s" target="_blank">video tutorial</a>.', 'yummomatic-yummly-post-generator'), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( 'https://www.youtube.com/watch?v=Oo4Fuia7NaQ' ) );?>
                     </li>
                     <li><?php echo sprintf( wp_kses( __( 'Having issues with the plugin? Please be sure to check out our <a href="%s" target="_blank">knowledge-base</a> before you contact <a href="%s" target="_blank">our support</a>!', 'yummomatic-yummly-post-generator'), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( '//coderevolution.ro/knowledge-base' ), esc_url('//coderevolution.ro/support' ) );?></li>
                     <li><?php echo sprintf( wp_kses( __( 'Do you enjoy our plugin? Please give it a <a href="%s" target="_blank">rating</a>  on CodeCanyon, or check <a href="%s" target="_blank">our website</a>  for other cool plugins.', 'yummomatic-yummly-post-generator'), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( '//codecanyon.net/downloads' ), esc_url( 'https://coderevolution.ro' ) );?></a></li>
                     <li><br/><br/><span class="cr_color_red"><?php echo esc_html__("Are you looking for a cool new theme that best fits this plugin?", 'yummomatic-yummly-post-generator');?></span> <a onclick="revealRec()" class="cr_cursor_pointer"><?php echo esc_html__("Click here for our theme related recommendation", 'yummomatic-yummly-post-generator');?></a>.
                        <br/><span id="diviIdrec"></span>
                     </li>
                  </ul>
               </h3>
</td>
               </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo sprintf( wp_kses( __( "Insert your Spoonacular APP ID. Get one <a href='%s' target='_blank'>here</a>. Be sure to copy the 'Recipe Search API' key from the right. The 'Nutrition Analysis API' key will not work here.", 'yummomatic-yummly-post-generator'), array(  'a' => array( 'href' => array(), 'target' => array() ) ) ), esc_url( 'https://spoonacular.com/food-api/apps' ) );
                                    ?>
                              </div>
                           </div>
                           <b><a href='https://spoonacular.com/food-api/apps' target='_blank'><?php echo esc_html__("Spoonacular APP ID", 'yummomatic-yummly-post-generator');?></a>:</b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="text" id="app_id" name="yummomatic_Main_Settings[app_id]" value="<?php
                              echo esc_html($app_id);
                              ?>" placeholder="<?php echo esc_html__("Please insert your Spoonacular APP ID", 'yummomatic-yummly-post-generator');?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td></td>
                     <td><br/><input type="submit" name="btnSubmitApp" id="btnSubmitApp" class="button button-primary" onclick="unsaved = false;" value="<?php echo esc_html__("Save Info", 'yummomatic-yummly-post-generator');?>"/>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <hr/>
                     </td>
                     <td>
                        <hr/>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <h3><?php echo esc_html__("After you entered the APP ID, you can start creating rules:", 'yummomatic-yummly-post-generator');?></h3>
                     </td>
                  </tr>
                  <tr>
                     <td><a name="newest" href="admin.php?page=yummomatic_items_panel">- <?php echo esc_html__("Recipes", 'yummomatic-yummly-post-generator');?> -> <?php echo esc_html__("Blog Posts", 'yummomatic-yummly-post-generator');?> -</a></td>
                     <td>
                        (Spoonacular <strong>API</strong>)
                        <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                           <div class="bws_hidden_help_text cr_min_260px">
                              <?php
                                 echo esc_html__("Posts will be generated from the latest entries in Spoonacular's public feed.", 'yummomatic-yummly-post-generator');
                                 ?>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <hr/>
                     </td>
                     <td>
                        <hr/>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <h3><?php echo esc_html__("Plugin Options:", 'yummomatic-yummly-post-generator');?></h3>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    if($auto_run != '')
                                    {
                                        echo sprintf( wp_kses( __( "Set the secret word that will be used to automatically run the plugin by calling this address (you can set a cron task to run this address automatically):<br/><strong>%s</strong>", 'yummomatic-yummly-post-generator'), array(  'strong' => array(), 'br' => array() ) ), esc_url( get_site_url() . "?yummomatic_run=" . urlencode($auto_run) ) );
                                    }
                                    else
                                    {
                                        echo sprintf( wp_kses( __( "Set the secret word that will be used to automatically run the plugin by calling this address (you can set a cron task to run this address automatically):<br/><strong>%s</strong><br/>Please fill in this field, to enable this feature.", 'yummomatic-yummly-post-generator'), array(  'strong' => array(), 'br' => array() ) ), esc_url( get_site_url() . "?yummomatic_run=*secret_word*" ) ) ;
                                    }
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Secret Word Used To Manually Run Importing (or using Cron):", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="text" id="auto_run" placeholder="<?php echo esc_html__("Input the secret word", 'yummomatic-yummly-post-generator');?>" name="yummomatic_Main_Settings[auto_run]" value="<?php
                              echo esc_html($auto_run);
                              ?>"/>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to enable Google Recipe Markup/Pinterest Rich Pins for generated recipe posts.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Enable Google Recipe Markup/ Pinterest Rich Pins:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="enable_markup" name="yummomatic_Main_Settings[enable_markup]"<?php
                        if ($enable_markup == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to skip checking for duplicate posts when publishing new posts (check this if you have 10000+ posts on your blog and you are experiencing slowdows when the plugin is running. If you check this, duplicate posts will be posted! So use it only when it is necesarry.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Do Not Check For Duplicate Posts:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="do_not_check_duplicates" name="yummomatic_Main_Settings[do_not_check_duplicates]"<?php
                        if ($do_not_check_duplicates == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to strip links from the generated post content.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Strip Links From Generated Post Content:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="strip_links" name="yummomatic_Main_Settings[strip_links]"<?php
                        if ($strip_links == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Selec if you wish to separate ingredient/instruction listing by comma instead of list entry.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Separate Ingredients/Instructions By Comma:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="li_comma" name="yummomatic_Main_Settings[li_comma]"<?php
                        if ($li_comma == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to strip javascript from the crawled post content.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Strip javascript From Crawled Content:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="strip_scripts" name="yummomatic_Main_Settings[strip_scripts]"<?php
                        if ($strip_scripts == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to show an extended information metabox under every plugin generated post.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Show Extended Item Information Metabox in Post:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="enable_metabox" name="yummomatic_Main_Settings[enable_metabox]"<?php
                        if ($enable_metabox == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do you want to enable logging for rules?", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Enable Logging for Rules:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="enable_logging" name="yummomatic_Main_Settings[enable_logging]" onclick="mainChanged()"<?php
                        if ($enable_logging == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="hideLog">
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do you want to enable detailed logging for rules? Note that this will dramatically increase the size of the log this plugin generates.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Enable Detailed Logging for Rules:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div class="hideLog">
                           <input type="checkbox" id="enable_detailed_logging" name="yummomatic_Main_Settings[enable_detailed_logging]"<?php
                              if ($enable_detailed_logging == 'on')
                                  echo ' checked ';
                              ?>>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="hideLog">
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to automatically clear logs after a period of time.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Automatically Clear Logs After:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div class="hideLog">
                           <select id="auto_clear_logs" name="yummomatic_Main_Settings[auto_clear_logs]" >
                              <option value="No"<?php
                                 if ($auto_clear_logs == "No") {
                                     echo " selected";
                                 }
                                 ?>><?php echo esc_html__("Disabled", 'yummomatic-yummly-post-generator');?></option>
                              <option value="monthly"<?php
                                 if ($auto_clear_logs == "monthly") {
                                     echo " selected";
                                 }
                                 ?>><?php echo esc_html__("Once a month", 'yummomatic-yummly-post-generator');?></option>
                              <option value="weekly"<?php
                                 if ($auto_clear_logs == "weekly") {
                                     echo " selected";
                                 }
                                 ?>><?php echo esc_html__("Once a week", 'yummomatic-yummly-post-generator');?></option>
                              <option value="daily"<?php
                                 if ($auto_clear_logs == "daily") {
                                     echo " selected";
                                 }
                                 ?>><?php echo esc_html__("Once a day", 'yummomatic-yummly-post-generator');?></option>
                              <option value="twicedaily"<?php
                                 if ($auto_clear_logs == "twicedaily") {
                                     echo " selected";
                                 }
                                 ?>><?php echo esc_html__("Twice a day", 'yummomatic-yummly-post-generator');?></option>
                              <option value="hourly"<?php
                                 if ($auto_clear_logs == "hourly") {
                                     echo " selected";
                                 }
                                 ?>><?php echo esc_html__("Once an hour", 'yummomatic-yummly-post-generator');?></option>
                           </select>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Set the timeout (in seconds) for every rule running. I recommend that you leave this field at it's default value (3600).", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Timeout for Rule Running (seconds):", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" id="rule_timeout" step="1" min="0" placeholder="<?php echo esc_html__("Input rule timeout in seconds", 'yummomatic-yummly-post-generator');?>" name="yummomatic_Main_Settings[rule_timeout]" value="<?php
                              echo esc_html($rule_timeout);
                              ?>"/>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to receive a summary of the rule running in an email.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Send Rule Running Summary in Email:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="send_email" name="yummomatic_Main_Settings[send_email]" onchange="mainChanged()"<?php
                        if ($send_email == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="hideMail">
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Input the email adress where you want to send the report. You can input more email addresses, separated by commas.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Email Address:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div class="hideMail">
                           <input type="email" id="email_address" placeholder="<?php echo esc_html__("Input a valid email adress", 'yummomatic-yummly-post-generator');?>" name="yummomatic_Main_Settings[email_address]" value="<?php
                              echo esc_html($email_address);
                              ?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Set the minimum word count for post titles. Items that have less than this count will not be published. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Minimum Title Word Count (Skip Post Otherwise):", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" id="min_word_title" step="1" placeholder="<?php echo esc_html__("Input the minimum word count for the title", 'yummomatic-yummly-post-generator');?>" min="0" name="yummomatic_Main_Settings[min_word_title]" value="<?php
                              echo esc_html($min_word_title);
                              ?>"/>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Set the maximum word count for post titles. Items that have more than this count will not be published. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Maximum Title Word Count (Skip Post Otherwise):", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" id="max_word_title" step="1" min="0" placeholder="<?php echo esc_html__("Input the maximum word count for the title", 'yummomatic-yummly-post-generator');?>" name="yummomatic_Main_Settings[max_word_title]" value="<?php
                              echo esc_html($max_word_title);
                              ?>"/>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Set the minimum word count for post content. Items that have less than this count will not be published. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Minimum Content Word Count (Skip Post Otherwise):", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" id="min_word_content" step="1" min="0" placeholder="<?php echo esc_html__("Input the minimum word count for the content", 'yummomatic-yummly-post-generator');?>" name="yummomatic_Main_Settings[min_word_content]" value="<?php
                              echo esc_html($min_word_content);
                              ?>"/>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Set the maximum word count for post content. Items that have more than this count will not be published. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Maximum Content Word Count (Skip Post Otherwise):", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" id="max_word_content" step="1" min="0" placeholder="<?php echo esc_html__("Input the maximum word count for the content", 'yummomatic-yummly-post-generator');?>" name="yummomatic_Main_Settings[max_word_content]" value="<?php
                              echo esc_html($max_word_content);
                              ?>"/>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do not include posts that's title or content contains at least one of these words. Separate words by comma. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Banned Words List:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="1" name="yummomatic_Main_Settings[banned_words]" placeholder="<?php echo esc_html__("Do not generate posts that contain at least one of these words", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($banned_words);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do not include posts that's title or content does not contain at least one of these words. Separate words by comma. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Required Words List:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="1" name="yummomatic_Main_Settings[required_words]" placeholder="<?php echo esc_html__("Do not generate posts unless they contain all of these words", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($required_words);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="hideLog">
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do you want to all words defined in the required words list? If you uncheck this, if only one word is found, the article will be published.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Require All Words in the 'Required Words List':", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div class="hideLog">
                           <input type="checkbox" id="require_all" name="yummomatic_Main_Settings[require_all]"<?php
                              if ($require_all == 'on')
                                  echo ' checked ';
                              ?>>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Resize the image that was assigned to be the featured image to the width specified in this text field (in pixels). If you want to disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Featured Image Resize Width:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" min="1" step="1" name="yummomatic_Main_Settings[resize_width]" value="<?php echo esc_html($resize_width);?>" placeholder="<?php echo esc_html__("Please insert the desired width for featured images", 'yummomatic-yummly-post-generator');?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Resize the image that was assigned to be the featured image to the height specified in this text field (in pixels). If you want to disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Featured Image Resize Height:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="number" min="1" step="1" name="yummomatic_Main_Settings[resize_height]" value="<?php echo esc_html($resize_height);?>" placeholder="<?php echo esc_html__("Please insert the desired height for featured images", 'yummomatic-yummly-post-generator');?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Strip HTML elements from final content that have this IDs. You can insert more IDs, separeted by comma. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Strip HTML Elements from Final Content by ID:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="3" cols="70" name="yummomatic_Main_Settings[strip_by_id]" placeholder="<?php echo esc_html__("Ids list", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($strip_by_id);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Strip HTML elements from final content that have this class. You can insert more classes, separeted by comma. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Strip HTML Elements from Final Content by Class:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="3" cols="70" name="yummomatic_Main_Settings[strip_by_class]" placeholder="<?php echo esc_html__("Class list", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($strip_by_class);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Choose if you want to skip posts that do not have images.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Skip Posts That Do Not Have Images:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="skip_no_img" name="yummomatic_Main_Settings[skip_no_img]"<?php
                        if ($skip_no_img == 'on')
                            echo ' checked ';
                        ?>>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Translate also post custom fields.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Spin/Translate Custom Fields:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <input type="checkbox" id="spin_cust" name="yummomatic_Main_Settings[spin_cust]"<?php
                        if ($spin_cust == 'on')
                            echo ' checked ';
                        ?>>
                     </div>  
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert a comma separated list of custom field slugs that will be skipped from spinning/translating.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Skip These Custom Fields From Spinning/Translating:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <input type="text" name="yummomatic_Main_Settings[skip_cust]" value="<?php
                              echo esc_html($skip_cust);
                              ?>" placeholder="<?php echo esc_html__("Custom field slug list", 'yummomatic-yummly-post-generator');?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do you want to automatically translate generated content using Google Translate?", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Automatically Translate Content To:", 'yummomatic-yummly-post-generator');?></b><br/><b><?php echo esc_html__("Info:", 'yummomatic-yummly-post-generator');?></b> <?php echo esc_html__("for translation, the plugin also supports WPML.", 'yummomatic-yummly-post-generator');?> <b><a href="https://wpml.org/?aid=238195&affiliate_key=ix3LsFyq0xKz" target="_blank"><?php echo esc_html__("Get WPML now!", 'yummomatic-yummly-post-generator');?></a></b>
                        </div>
                     </td>
                     <td>
                        <div>
                           <select id="translate" name="yummomatic_Main_Settings[translate]" >
                           <?php
                              $i = 0;
                              foreach ($language_names as $lang) {
                                  echo '<option value="' . esc_html($language_codes[$i]) . '"';
                                  if ($translate == $language_codes[$i]) {
                                      echo ' selected';
                                  }
                                  echo '>' . esc_html($language_names[$i]) . '</option>';
                                  $i++;
                              }
                              ?>
                           </select>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div id="bestspin">
                           <p><?php echo esc_html__("Don't have an 'The Best Spinner' account yet? Click here to get one:", 'yummomatic-yummly-post-generator');?> <b><a href="https://paykstrt.com/10313/38910" target="_blank"><?php echo esc_html__("get a new account now!", 'yummomatic-yummly-post-generator');?></a></b></p>
                        </div>
                        <div id="wordai">
                           <p><?php echo esc_html__("Don't have an 'WordAI' account yet? Click here to get one:", 'yummomatic-yummly-post-generator');?> <b><a href="https://wordai.com/?ref=h17f4" target="_blank"><?php echo esc_html__("get a new account now!", 'yummomatic-yummly-post-generator');?></a></b></p>
                        </div>
                        <div id="spinrewriter">
                           <p><?php echo esc_html__("Don't have an 'SpinRewriter' account yet? Click here to get one:", 'yummomatic-yummly-post-generator');?> <b><a href="https://www.spinrewriter.com/?ref=24b18" target="_blank"><?php echo esc_html__("get a new account now!", 'yummomatic-yummly-post-generator');?></a></b></p>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Do you want to randomize text by changing words of a text with synonyms using one of the listed methods? Note that this is an experimental feature and can in some instances drastically increase the rule running time!", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Spin Text Using Word Synonyms (for automatically generated posts only):", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <select id="spin_text" name="yummomatic_Main_Settings[spin_text]" onchange="mainChanged()">
                     <option value="disabled"
                        <?php
                           if ($spin_text == 'disabled') {
                               echo ' selected';
                           }
                           ?>
                        ><?php echo esc_html__("Disabled", 'yummomatic-yummly-post-generator');?></option>
                     <option value="best"
                        <?php
                           if ($spin_text == 'best') {
                               echo ' selected';
                           }
                           ?>
                        >The Best Spinner - <?php echo esc_html__("High Quality - Paid", 'yummomatic-yummly-post-generator');?></option>
                     <option value="wordai"
                        <?php
                           if($spin_text == 'wordai')
                                   {
                                       echo ' selected';
                                   }
                           ?>
                        >Wordai - <?php echo esc_html__("High Quality - Paid", 'yummomatic-yummly-post-generator');?></option>
                     <option value="spinrewriter"
                        <?php
                           if($spin_text == 'spinrewriter')
                                   {
                                       echo ' selected';
                                   }
                           ?>
                        >SpinRewriter - <?php echo esc_html__("High Quality - Paid", 'yummomatic-yummly-post-generator');?></option>
                     <option value="builtin"
                        <?php
                           if ($spin_text == 'builtin') {
                               echo ' selected';
                           }
                           ?>
                        ><?php echo esc_html__("Built-in - Medium Quality - Free", 'yummomatic-yummly-post-generator');?></option>
                     <option value="wikisynonyms"
                        <?php
                           if ($spin_text == 'wikisynonyms') {
                               echo ' selected';
                           }
                           ?>
                        >WikiSynonyms - <?php echo esc_html__("Low Quality - Free", 'yummomatic-yummly-post-generator');?></option>
                     <option value="freethesaurus"
                        <?php
                           if ($spin_text == 'freethesaurus') {
                               echo ' selected';
                           }
                           ?>
                        >FreeThesaurus - <?php echo esc_html__("Low Quality - Free", 'yummomatic-yummly-post-generator');?></option>
                     </select>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="hideBest">
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert your user name on premium spinner service.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Premium Spinner Service User Name/Email:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div class="hideBest">
                           <input type="text" name="yummomatic_Main_Settings[best_user]" value="<?php
                              echo esc_html($best_user);
                              ?>" placeholder="<?php echo esc_html__("Please insert your premium text spinner service user name", 'yummomatic-yummly-post-generator');?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div class="hideBest">
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert your password for the selected premium spinner service.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Premium Spinner Service Password/API Key:", 'yummomatic-yummly-post-generator');?></b>
                        </div>
                     </td>
                     <td>
                        <div class="hideBest">
                           <input type="password" autocomplete="off" name="yummomatic_Main_Settings[best_password]" value="<?php
                              echo esc_html($best_password);
                              ?>" placeholder="<?php echo esc_html__("Please insert your premium text spinner service password", 'yummomatic-yummly-post-generator');?>">
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <hr/>
                     </td>
                     <td>
                        <hr/>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <h3><?php echo esc_html__("Random Sentence Generator Settings:", 'yummomatic-yummly-post-generator');?></h3>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert some sentences from which you want to get one at random. You can also use variables defined below. %something ==> is a variable. Each sentence must be separated by a new line.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("First List of Possible Sentences (%%random_sentence%%):", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="8" cols="70" name="yummomatic_Main_Settings[sentence_list]" placeholder="<?php echo esc_html__("Please insert the first list of sentences", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($sentence_list);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert some sentences from which you want to get one at random. You can also use variables defined below. %something ==> is a variable. Each sentence must be separated by a new line.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Second List of Possible Sentences (%%random_sentence2%%):", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="8" cols="70" name="yummomatic_Main_Settings[sentence_list2]" placeholder="<?php echo esc_html__("Please insert the second list of sentences", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($sentence_list2);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert some variables you wish to be exchanged for different instances of one sentence. Please format this list as follows:<br/>
                                    Variablename => Variables (seperated by semicolon)<br/>Example:<br/>adjective => clever;interesting;smart;huge;astonishing;unbelievable;nice;adorable;beautiful;elegant;fancy;glamorous;magnificent;helpful;awesome<br/>", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("List of Possible Variables:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="8" cols="70" name="yummomatic_Main_Settings[variable_list]" placeholder="<?php echo esc_html__("Please insert the list of variables", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($variable_list);
                        ?></textarea>
                     </div></td>
                  </tr>
                  <tr>
                     <td>
                        <hr/>
                     </td>
                     <td>
                        <hr/>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <h3><?php echo esc_html__("Custom HTML Code/ Ad Code:", 'yummomatic-yummly-post-generator');?></h3>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert a custom HTML code that will replace the %%custom_html%% variable. This can be anything, even an Ad code.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Custom HTML Code #1:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="3" cols="70" name="yummomatic_Main_Settings[custom_html]" placeholder="<?php echo esc_html__("Custom HTML #1", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($custom_html);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div>
                           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                              <div class="bws_hidden_help_text cr_min_260px">
                                 <?php
                                    echo esc_html__("Insert a custom HTML code that will replace the %%custom_html2%% variable. This can be anything, even an Ad code.", 'yummomatic-yummly-post-generator');
                                    ?>
                              </div>
                           </div>
                           <b><?php echo esc_html__("Custom HTML Code #2:", 'yummomatic-yummly-post-generator');?></b>
                     </td>
                     <td>
                     <textarea rows="3" cols="70" name="yummomatic_Main_Settings[custom_html2]" placeholder="<?php echo esc_html__("Custom HTML #2", 'yummomatic-yummly-post-generator');?>"><?php
                        echo esc_textarea($custom_html2);
                        ?></textarea>
                     </div>
                     </td>
                  </tr>
               </table>
               <hr/>
               <h3><?php echo esc_html__("Affiliate Keyword Replacer Tool Settings:", 'yummomatic-yummly-post-generator');?></h3>
               <div class="table-responsive">
                  <table class="responsive table cr_main_table">
                     <thead>
                        <tr>
                           <th>
                              <?php echo esc_html__("ID", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("This is the ID of the rule.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th class="cr_max_width_40">
                              <?php echo esc_html__("Del", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Do you want to delete this rule?", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Search Keyword", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("This keyword will be replaced with a link you define.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Replacement Keyword", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("This keyword will replace the search keyword you define. Leave this field blank if you only want to add an URL to the specified keyword.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Link to Add", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Define the link you want to appear the defined keyword. Leave this field blank if you only want to replace the specified keyword without linking from it.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                        </tr>
                        <tr>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           echo yummomatic_expand_keyword_rules();
                           ?>
                        <tr>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                           <td>
                              <hr/>
                           </td>
                        </tr>
                        <tr>
                           <td class="cr_short_td">-</td>
                           <td class="cr_shrt_td2"><span class="cr_gray20">X</span></td>
                           <td class="cr_rule_line"><input type="text" name="yummomatic_keyword_list[keyword][]"  placeholder="<?php echo esc_html__("Please insert the keyword to be replaced", 'yummomatic-yummly-post-generator');?>" value="" class="cr_width_100" /></td>
                           <td class="cr_rule_line"><input type="text" name="yummomatic_keyword_list[replace][]"  placeholder="<?php echo esc_html__("Please insert the keyword to replace the search keyword", 'yummomatic-yummly-post-generator');?>" value="" class="cr_width_100" /></td>
                           <td class="cr_rule_line"><input type="url" validator="url" name="yummomatic_keyword_list[link][]" placeholder="<?php echo esc_html__("Please insert the link to be added to the keyword", 'yummomatic-yummly-post-generator');?>" value="" class="cr_width_100" />
                        </tr>
                     </tbody>
                  </table>
               </div>
               </td></tr>
               </table>
            </div>
         </div>
   </div>
   <hr/>
   <p>
   <?php echo esc_html__("Available shortcodes:", 'yummomatic-yummly-post-generator');?> <strong>[yummomatic-list-posts]</strong> <?php echo esc_html__("to include a list that contains only posts imported by this plugin, and", 'yummomatic-yummly-post-generator');?> <strong>[yummomatic-display-posts]</strong> <?php echo esc_html__("to include a WordPress like post listing. Usage:", 'yummomatic-yummly-post-generator');?> [yummomatic-display-posts type='any/post/page/...' title_color='#ffffff' excerpt_color='#ffffff' read_more_text="Read More" link_to_source='yes' order='ASC/DESC' orderby='title/ID/author/name/date/rand/comment_count' title_font_size='19px', excerpt_font_size='19px' posts_per_page=number_of_posts_to_show category='posts_category' ruleid='ID_of_yummomatic_rule'].
   <br/><?php echo esc_html__("Example:", 'yummomatic-yummly-post-generator');?> <b>[yummomatic-list-posts type='any' order='ASC' orderby='date' posts_per_page=50 category= '' ruleid='0']</b>
   <br/><?php echo esc_html__("Example 2:", 'yummomatic-yummly-post-generator');?> <b>[yummomatic-display-posts include_excerpt='true' image_size='thumbnail' wrapper='div']</b>.
   </p>
   <div><p class="submit"><input type="submit" name="btnSubmit" id="btnSubmit" class="button button-primary" onclick="unsaved = false;" value="<?php echo esc_html__("Save Settings", 'yummomatic-yummly-post-generator');?>"/></p></div>
   </form>
</div>
<?php
   }
   if (isset($_POST['yummomatic_keyword_list'])) {
       add_action('admin_init', 'yummomatic_save_keyword_rules');
   }
   function yummomatic_save_keyword_rules($data2)
   {
       $data2 = $_POST['yummomatic_keyword_list'];
       $rules = array();
       if (isset($data2['keyword'][0])) {
           for ($i = 0; $i < sizeof($data2['keyword']); ++$i) {
               if (isset($data2['keyword'][$i]) && $data2['keyword'][$i] != '') {
                   $index         = trim(sanitize_text_field($data2['keyword'][$i]));
                   $rules[$index] = array(
                       trim(sanitize_text_field($data2['link'][$i])),
                       trim(sanitize_text_field($data2['replace'][$i]))
                   );
               }
           }
       }
       update_option('yummomatic_keyword_list', $rules);
   }
   function yummomatic_expand_keyword_rules()
   {
       $rules  = get_option('yummomatic_keyword_list');
       $output = '';
       $cont   = 0;
       if (!empty($rules)) {
           foreach ($rules as $request => $value) {
               $output .= '<tr>
                           <td class="cr_short_td">' . esc_html($cont) . '</td>
                           <td class="cr_shrt_td2"><span class="wpyummomatic-delete">X</span></td>
                           <td class="cr_rule_line"><input type="text" placeholder="' . esc_html__('Input the keyword to be replaced. This field is required', 'yummomatic-yummly-post-generator') . '" name="yummomatic_keyword_list[keyword][]" value="' . esc_html($request) . '" required class="cr_width_100"></td>
                           <td class="cr_rule_line"><input type="text" placeholder="' . esc_html__('Input the replacement word', 'yummomatic-yummly-post-generator') . '" name="yummomatic_keyword_list[replace][]" value="' . esc_html($value[1]) . '" class="cr_width_100"></td>
                           <td class="cr_rule_line"><input type="url" validator="url" placeholder="' . esc_html__('Input the URL to be added', 'yummomatic-yummly-post-generator') . '" name="yummomatic_keyword_list[link][]" value="' . esc_html($value[0]) . '" class="cr_width_100"></td>
   					</tr>';
               $cont++;
           }
       }
       return $output;
   }
   ?>