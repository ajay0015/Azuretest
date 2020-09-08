<?php
   function yummomatic_items_panel()
   {
   $yummomatic_Main_Settings = get_option('yummomatic_Main_Settings', false);
   if(isset($yummomatic_Main_Settings['app_id']) && $yummomatic_Main_Settings['app_id'] != '')
   {
   }
   else
   {
   ?>
<h1><?php echo esc_html__("You must add a Spoonacular API Key before you can use this feature!", 'yummomatic-yummly-post-generator');?></h1>
<?php
   return;
   }
   ?>
<div class="wp-header-end"></div>
<div class="wrap gs_popuptype_holder seo_pops">
   <div>
      <form id="myForm" method="post" action="admin.php?page=yummomatic_items_panel">
         <?php
            wp_nonce_field('yummomatic_save_rules', '_yummomaticr_nonce');
            
            
            if (isset($_GET['settings-updated'])) {
            ?>
         <div>
            <p class="cr_saved_notif"><strong><?php echo esc_html__("Settings saved.", 'yummomatic-yummly-post-generator');?></strong></p>
         </div>
         <?php
            }
            ?>
         <div>
            <div class="hideMain">
               <hr/>
               <div class="table-responsive">
                  <table id="mainRules" class="responsive table cr_main_table">
                     <thead>
                        <tr>
                           <th>
                              <?php echo esc_html__("ID", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("This is the ID of the rule. ", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Query Keywords", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Input the query keywords based on which you want to get results. If you wish to search for any recipe that matches your other queries from this rule, please enter: *", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Schedule", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Select the interval in hours after which you want this rule to run. Defined in hours.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Max # Posts", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Select the maximum number of posts that this rule can create at once. 0-100 interval allowed.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Post Status", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Select the status that you want for the automatically generated posts to have.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Item Type", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Select the type (post/page) for your automatically generated item.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("Post Author", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Select the author that you want to assign for the automatically generated posts.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th>
                              <?php echo esc_html__("More Options", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Shows advanced settings for this rule.", 'yummomatic-yummly-post-generator');
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
                           <th class="cr_max_55">
                              <?php echo esc_html__("Active", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Do you want to enable this rule? You can deactivate any rule (you don't have to delete them to deactivate them).", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                              <br/>
                              <input type="checkbox" onchange="thisonChangeHandler(this)" id="exclusion">
                           </th>
                           <th class="cr_max_42">
                              <?php echo esc_html__("Info", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("The number of items (posts, pages) this rule has generated so far.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                           <th class="cr_actions">
                              <?php echo esc_html__("Actions", 'yummomatic-yummly-post-generator');?>
                              <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                 <div class="bws_hidden_help_text cr_min_260px">
                                    <?php
                                       echo esc_html__("Do you want to run this rule now? Note that only one instance of a rule is allowed at once.", 'yummomatic-yummly-post-generator');
                                       ?>
                                 </div>
                              </div>
                           </th>
                        </tr>
                        
                     </thead>
                     <tbody>
                        <?php
                           echo yummomatic_expand_rules_manual();
                           ?>
                        
                        <tr>
                           <td class="cr_short_td">-</td>
                           <td class="cr_sz"><input type="text" name="yummomatic_rules_list[date][]" placeholder="Please input a query string" value="" class="cr_width_full"/></td>
                           <td class="cr_comm_td"><input type="number" step="1" min="1" name="yummomatic_rules_list[schedule][]" class="cr_width_60" placeholder="Select the rule schedule interval" value="24"/></td>
                           <td class="cr_comm_td"><input type="number" step="1" min="0" max="100" name="yummomatic_rules_list[max][]" placeholder="Select the max # of generated posts" value="10" class="cr_width_60"/></td>
                           <td class="cr_status">
                              <select id="submit_status" name="yummomatic_rules_list[submit_status][]" class="cr_width_70">
                                 <option value="pending"><?php echo esc_html__("Pending -> Moderate", 'yummomatic-yummly-post-generator');?></option>
                                 <option value="draft"><?php echo esc_html__("Draft -> Moderate", 'yummomatic-yummly-post-generator');?></option>
                                 <option value="publish" selected><?php echo esc_html__("Published", 'yummomatic-yummly-post-generator');?></option>
                                 <option value="private"><?php echo esc_html__("Private", 'yummomatic-yummly-post-generator');?></option>
                                 <option value="trash"><?php echo esc_html__("Trash", 'yummomatic-yummly-post-generator');?></option>
                              </select>
                           </td>
                           <td class="cr_comm_td"><select id="default_type" name="yummomatic_rules_list[default_type][]" class="cr_width_auto">
                              <?php
                                 $is_first = true;
                                 foreach ( get_post_types( '', 'names' ) as $post_type ) {
                                    echo '<option value="' . esc_attr($post_type) . '"';
                                    if($is_first === true)
                                    {
                                        echo ' selected';
                                        $is_first = false;
                                    }
                                    echo '>' . esc_html($post_type) . '</option>';
                                 }
                                 ?>
                              </select>  
                           </td>
                           <td class="cr_author"><select id="post_author" name="yummomatic_rules_list[post_author][]" class="cr_width_auto cr_max_width_150">
                              <?php
                                 $blogusers = get_users( [ 'role__in' => [ 'contributor', 'author', 'editor', 'administrator' ] ] );
                                 foreach ($blogusers as $user) {
                                     echo '<option value="' . esc_html($user->ID) . '"';
                                     echo '>' . esc_html($user->display_name) . '</option>';
                                 }
                                 ?>
                              </select>  
                           </td>
                           <td class="cr_width_70">
                              <input type="button" id="mybtnfzr" value="Settings">
                              <div id="mymodalfzr" class="codemodalfzr">
                                 <div class="codemodalfzr-content">
                                    <div class="codemodalfzr-header">
                                       <span id="yummomatic_close" class="codeclosefzr">&times;</span>
                                       <h2><span class="cr_color_white"><?php echo esc_html__("New Rule", 'yummomatic-yummly-post-generator');?></span> <?php echo esc_html__("Advanced Settings", 'yummomatic-yummly-post-generator');?></h2>
                                    </div>
                                    <div class="codemodalfzr-body">
                                       <div class="table-responsive">
                                          <table class="responsive table cr_main_table_nowr">
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Set the title of the generated posts for user rules. You can use the following shortcodes: %%random_sentence%%, %%random_sentence2%%, %%item_title%%, %%item_description%%, %%item_content%%, %%item_original_content%%, %%item_cat%%, %%item_tags%%", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Generated Post Title:", 'yummomatic-yummly-post-generator');?></b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                                                </td>
                                                <td>
                                                <input type="text" name="yummomatic_rules_list[post_title][]" value="%%item_title%%" placeholder="Please insert your desired post title. Example: %%item_title%%" class="cr_width_full">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Set the content of the generated posts for user rules. You can use the following shortcodes: %%custom_html%%, %%custom_html2%%, %%random_sentence%%, %%random_sentence2%%, %%item_servings%%, %%item_labels%%, %%item_words%%, %%item_author%%, %%item_attribution_url%%, %%item_attribution_logo%%, %%item_attribution_text%%, %%item_author_link%%, %%item_content%%, %%item_content_plain_text%%, %%item_read_more_button%%, %%item_show_image%%, %%item_description%%, %%item_id%%, %%item_title%%, %%item_url%%, %%recipe_description%%, %%item_image_url%%, %%item_yield%%, %%item_ingredients%%, %%item_instructions%%, %%item_cooking_time%%, %%item_rating%%, %%item_cuisine%%, %%item_course%%", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Generated Post Content:", 'yummomatic-yummly-post-generator');?></b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                                                </td>
                                                <td>
                                                <textarea rows="2" cols="70" name="yummomatic_rules_list[post_content][]" placeholder="Please insert your desired post content. Example: %%item_content%%<br/>%%item_read_more_button%%" class="cr_width_full">%%item_content%%<br/><br/>%%item_read_more_button%%</textarea>
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Do you want to remember last posted item and continue search from it the next time the importing rule runs?", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Remember Last Posted Item And Continue Search From It:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="checkbox" id="continue_search" name="yummomatic_rules_list[continue_search][]" checked>
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Select the cuisine you wish to import recipes for.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Recipe Cuisine:", 'yummomatic-yummly-post-generator');?></b>   
                                                </td>
                                                <td class="cr_min_width_200">
                                                <select id="recipe_cuisine" name="yummomatic_rules_list[recipe_cuisine][]" class="cr_width_full">
                                                <option value="any"  selected><?php echo esc_html__("Any", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="african"><?php echo esc_html__("African", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="american"><?php echo esc_html__("American", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="british"><?php echo esc_html__("British", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="cajun"><?php echo esc_html__("Cajun", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="caribbean"><?php echo esc_html__("Caribbean", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="chinese"><?php echo esc_html__("Chinese", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="eastern%20european"><?php echo esc_html__("Eastern European", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="european"><?php echo esc_html__("European", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="french"><?php echo esc_html__("French", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="german"><?php echo esc_html__("German", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="greek"><?php echo esc_html__("Greek", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="indian"><?php echo esc_html__("Indian", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="irish"><?php echo esc_html__("Irish", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="italian"><?php echo esc_html__("Italian", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="japanese"><?php echo esc_html__("Japanese", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="jewish"><?php echo esc_html__("Jewish", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="korean"><?php echo esc_html__("Korean", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="latin%20american"><?php echo esc_html__("Latin American", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="mediterranean"><?php echo esc_html__("Mediterranean", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="mexican"><?php echo esc_html__("Mexican", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="middle%20eastern"><?php echo esc_html__("Middle Eastern", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="nordic"><?php echo esc_html__("Nordic", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="southern"><?php echo esc_html__("Southern", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="spanish"><?php echo esc_html__("Spanish", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="thai"><?php echo esc_html__("Thai", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="vietnamese"><?php echo esc_html__("Vietnamese", 'yummomatic-yummly-post-generator');?></option>
                                                </select>     
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Select the diet you wish to import recipes for.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Recipe Diet:", 'yummomatic-yummly-post-generator');?></b>   
                                                </td>
                                                <td class="cr_min_width_200">
                                                <select id="recipe_diet" name="yummomatic_rules_list[recipe_diet][]" class="cr_width_full">
                                                <option value="any"  selected><?php echo esc_html__("Any", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Gluten Free"><?php echo esc_html__("Gluten Free", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Ketogenic"><?php echo esc_html__("Ketogenic", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Vegetarian"><?php echo esc_html__("Vegetarian", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Lacto-Vegetarian"><?php echo esc_html__("Lacto-Vegetarian", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Ovo-Vegetarian"><?php echo esc_html__("Ovo-Vegetarian", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Vegan"><?php echo esc_html__("Vegan", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Pescetarian"><?php echo esc_html__("Pescetarian", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Paleo"><?php echo esc_html__("Paleo", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Primal"><?php echo esc_html__("Primal", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="Whole30"><?php echo esc_html__("Whole30", 'yummomatic-yummly-post-generator');?></option>
                                                </select>     
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("A comma-separated list of ingredients or ingredient types that the recipes must not contain.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Excluded Ingredients:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="text" name="yummomatic_rules_list[excluded_ingredients][]" value="" placeholder="Exluded ingredient list" class="cr_width_full">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("A comma-separated list of intolerances. All recipes returned must not contain ingredients that are not suitable for people with the intolerances entered. Possible values: Dairy, Egg, Gluten, Grain, Peanut, Seafood, Sesame, Shellfish, Soy, Sulfite, Tree Nut, Wheat", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Intolerance List:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="text" name="yummomatic_rules_list[intolerances][]" value="" placeholder="Intolerance list" class="cr_width_full">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Do you want to skip the first X number of posts from the results?", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Post Search Offset:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="number" min="1" step="1" id="skip_posts" name="yummomatic_rules_list[skip_posts][]" value="" placeholder="Please insert a post count to skip" class="cr_width_full">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Whether the recipes should have an open license that allows display with proper attribution.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Limit License:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="checkbox" id="limit_license" name="yummomatic_rules_list[limit_license][]">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Whether the recipes must have instructions.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Instructions Required:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="checkbox" id="instructions_required" name="yummomatic_rules_list[instructions_required][]">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Do you want to strip images from generated content?", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Strip Images From Content:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="checkbox" id="strip_images" name="yummomatic_rules_list[strip_images][]">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Do you want to limit the title's lenght to a specific word count? To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Limit Title Word Count:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="number" min="1" step="1" id="limit_title_word_count" name="yummomatic_rules_list[limit_title_word_count][]" value="" placeholder="Please insert a limit for title" class="cr_width_full">
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Do you want to disable post excerpt generation?", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Disable Post Excerpt:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <input type="checkbox" id="disable_excerpt" name="yummomatic_rules_list[disable_excerpt][]">   
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("If your template supports 'Post Formats', than you can select one here. If not, leave this at it's default value.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Generated Post Format:", 'yummomatic-yummly-post-generator');?></b>   
                                                </td>
                                                <td class="cr_min_width_200">
                                                <select id="post_format" name="yummomatic_rules_list[post_format][]" class="cr_width_full">
                                                <option value="post-format-standard"  selected><?php echo esc_html__("Standard", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-aside"><?php echo esc_html__("Aside", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-gallery"><?php echo esc_html__("Gallery", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-link"><?php echo esc_html__("Link", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-image"><?php echo esc_html__("Image", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-quote"><?php echo esc_html__("Quote", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-status"><?php echo esc_html__("Status", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-video"><?php echo esc_html__("Video", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-audio"><?php echo esc_html__("Audio", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="post-format-chat"><?php echo esc_html__("Chat", 'yummomatic-yummly-post-generator');?></option>
                                                </select>     
                                                </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="cr_min_width_200">
                                                   <div>
                                                      <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                                         <div class="bws_hidden_help_text cr_min_260px">
                                                            <?php
                                                               echo esc_html__("Select the post category that you want for the automatically generated posts to have. To select more categories, hold down the CTRL key.", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Additional Post Category:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <select multiple id="default_category" name="yummomatic_rules_list[default_category][]" class="cr_width_full">
                                                <option value="yummomatic_no_category_12345678" selected><?php echo esc_html__("Do Not Add a Category", 'yummomatic-yummly-post-generator');?></option>
                                                <?php
                                                   $cat_args   = array(
                                                       'orderby' => 'name',
                                                       'hide_empty' => 0,
                                                       'order' => 'ASC'
                                                   );
                                                   $categories = get_categories($cat_args);
                                                   foreach ($categories as $category) {
                                                   ?>
                                                <option value="<?php
                                                   echo esc_html($category->term_id);
                                                   ?>"><?php
                                                   echo esc_html(sanitize_text_field($category->name));
                                                   ?></option>
                                                <?php
                                                   }
                                                   ?>
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
                                                               echo esc_html__("Do you want to automatically add post categories from the News items?", 'yummomatic-yummly-post-generator');
                                                               ?>
                                                         </div>
                                                      </div>
                                                      <b><?php echo esc_html__("Auto Add Categories:", 'yummomatic-yummly-post-generator');?></b>
                                                </td>
                                                <td>
                                                <select id="auto_categories" name="yummomatic_rules_list[auto_categories][]" class="cr_width_full">
                                                <option value="disabled" selected><?php echo esc_html__("Disabled", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="labels"><?php echo esc_html__("Recipe Course", 'yummomatic-yummly-post-generator');?></option> 
                                                <option value="hlabels"><?php echo esc_html__("Recipe Cuisine", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="title"><?php echo esc_html__("Title", 'yummomatic-yummly-post-generator');?></option>
                                                <option value="both"><?php echo esc_html__("Recipe Labels & Title", 'yummomatic-yummly-post-generator');?></option>                       
                                                </div>
                                                </td>
                                             </tr>
                                             <tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("This feature will try to remove the WordPress's default post category. This may fail in case no additional categories are added, because WordPress requires at least one post category for every post.", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Remove WP Default Post Category:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="remove_default" name="yummomatic_rules_list[remove_default][]" checked>
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Do you want to automatically add post tags from the News items?", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Auto Add Tags:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <select id="auto_tags" name="yummomatic_rules_list[auto_tags][]" class="cr_width_full">
                                             <option value="disabled" selected><?php echo esc_html__("Disabled", 'yummomatic-yummly-post-generator');?></option>
                                             <option value="labels"><?php echo esc_html__("Recipe Course", 'yummomatic-yummly-post-generator');?></option>
                                             <option value="hlabels"><?php echo esc_html__("Recipe Cuisine", 'yummomatic-yummly-post-generator');?></option>                     
                                             <option value="title"><?php echo esc_html__("Title", 'yummomatic-yummly-post-generator');?></option>
                                             <option value="both"><?php echo esc_html__("Recipe Labels & Title", 'yummomatic-yummly-post-generator');?></option>                   
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Select the post tags that you want for the automatically generated posts to have.", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Additional Post Tags:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="text" name="yummomatic_rules_list[default_tags][]" value="" placeholder="Please insert your additional post tags here" class="cr_width_full">
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Do you want to enable comments for the generated posts?", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Enable Comments For Posts:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="enable_comments" name="yummomatic_rules_list[enable_comments][]" checked>
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Do you want to enable pingbacks/trackbacks for the generated posts?", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Enable Pingback/Trackback:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="enable_pingback" name="yummomatic_rules_list[enable_pingback][]" checked>
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Do you want to set featured image for generated post (to the first image that was found in the post)? If you don't check the 'Get Image From Pixabay' checkbox, this will work only when 'Get Full Content' is also checked.", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Auto Get Featured Image:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="featured_image" name="yummomatic_rules_list[featured_image][]" checked>
                                             </div>
                                             </td></tr><tr><td>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Insert a comma separated list of links to valid images that will be set randomly for the featured image for the posts that do not have a valid image attached or if you disabled automatical featured image generation. You can also use image numeric IDs from images found in the Media Gallery. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Default Featured Image List:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input class="cr_width_60p" type="text" name="yummomatic_rules_list[image_url][]" placeholder="Please insert the link to a valid image" id="cr_input_box"  value=""/>
                                             <input class="cr_width_33p yummomatic_image_button" type="button" value=">>>"/>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px"><?php echo esc_html__("Do you want to get extended recipe information (source url, yield, featured image, nutrition attribute)? If you enable this, 1 additional API call will be made for each posted recipe.", 'yummomatic-yummly-post-generator');?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Get Extended Recipe Information:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="get_extended" name="yummomatic_rules_list[get_extended][]" checked>               
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px"><?php echo esc_html__("Do you want to try to get full recipe content from the linked URL? This will have no effect if you do not check the above 'Get Extended Recipe Information:' settings field (to get the source URL).", 'yummomatic-yummly-post-generator');?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Try to Get Full Recipe Content:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="full_content" name="yummomatic_rules_list[full_content][]">               
                                             </div>
                                             </td></tr><tr><td>
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px"><?php echo esc_html__("Do you want skip recipes that cannot be parsed using the built-in recipe parser? If you uncheck this, recipes will be posted using the full content found on the source websites.", 'yummomatic-yummly-post-generator');?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Skip Recipes That Cannot Be Parsed:", 'yummomatic-yummly-post-generator');?></b>
                                             </td><td>
                                             <input type="checkbox" id="skip_parsed" name="yummomatic_rules_list[skip_parsed][]">               
                                             </div>
                                             </td></tr><tr><td class="cr_min_width_200">
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Set the custom fields that will be set for generated posts. The syntax for this field is the following: custom_field_name1 => custom_field_value1, custom_field_name2 => custom_field_value2, ... . In custom_field_valueX, you can use shortcodes, same like in post content. Example (without quotes): 'title_custom_field => %%item_title%%'. You can use the following shortcodes: %%custom_html%%, %%custom_html2%%, %%random_sentence%%, %%random_sentence2%%, %%item_servings%%, %%item_labels%%, %%item_words%%, %%item_author%%, %%item_attribution_url%%, %%item_attribution_logo%%, %%item_attribution_text%%, %%item_author_link%%, %%item_content%%, %%item_content_plain_text%%, %%item_read_more_button%%, %%item_show_image%%, %%item_description%%, %%item_id%%, %%item_title%%, %%item_url%%, %%recipe_description%%, %%item_image_url%%, %%item_yield%%, %%item_ingredients%%, %%item_instructions%%, %%item_cooking_time%%, %%item_rating%%, %%item_cuisine%%, %%item_course%%", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Post Custom Fields:", 'yummomatic-yummly-post-generator');?></b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                                             </td><td>
                                             <textarea rows="1" cols="70" name="yummomatic_rules_list[custom_fields][]" placeholder="Please insert your desired custom fields. Example: title_custom_field => %%item_title%%" class="cr_width_full"></textarea>
                                             </div>
                                             </td></tr><tr><td class="cr_min_width_200">
                                             <div>
                                             <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                             <div class="bws_hidden_help_text cr_min_260px">
                                             <?php
                                                echo esc_html__("Set the custom taxonomies that will be set for generated posts. The syntax for this field is the following: custom_taxonomy_name1 => custom_taxonomy_value1A, custom_taxonomy_value1B; custom_taxonomy_name2 => custom_taxonomy_value2A, custom_taxonomy_value2B; ... . In custom_taxonomy_valueX, you can use shortcodes. Example (without quotes): 'cats_taxonomy_field => manualtax1, %%item_title%%; tags_taxonomy_field => manualtax2, %%item_title%%'. You can use the following shortcodes: %%custom_html%%, %%custom_html2%%, %%random_sentence%%, %%random_sentence2%%, %%item_servings%%, %%item_labels%%, %%item_words%%, %%item_author%%, %%item_attribution_url%%, %%item_attribution_logo%%, %%item_attribution_text%%, %%item_author_link%%, %%item_content%%, %%item_content_plain_text%%, %%item_read_more_button%%, %%item_show_image%%, %%item_description%%, %%item_id%%, %%item_title%%, %%item_url%%, %%recipe_description%%, %%item_image_url%%, %%item_yield%%, %%item_ingredients%%, %%item_instructions%%, %%item_cooking_time%%, %%item_rating%%, %%item_cuisine%%, %%item_course%%", 'yummomatic-yummly-post-generator');
                                                ?>
                                             </div>
                                             </div>
                                             <b><?php echo esc_html__("Post Custom Taxonomies:", 'yummomatic-yummly-post-generator');?></b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                                             </td><td>
                                             <textarea rows="1" cols="70" name="yummomatic_rules_list[custom_tax][]" placeholder="Please insert your desired custom taxonomies. Example: custom_taxonomy_name => %%item_cats%%" class="cr_width_full"></textarea>
                                             </div>
                                             </td></tr>
                                          </table>
                                       </div>
                                    </div>
                                    <div class="codemodalfzr-footer">
                                    <br/>
                                    <h3 class="cr_inline">Yummomatic Automatic Post Generator</h3><span id="yummomatic_ok" class="codeokfzr cr_inline">OK&nbsp;</span>
                                    <br/><br/>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="cr_shrt_td2"><span class="cr_gray20">X</span></td>
                           <td class="cr_short_td"><input type="checkbox" name="yummomatic_rules_list[active][]" value="1" checked />
                           <input type="hidden" name="yummomatic_rules_list[last_run][]" value="1988-01-27 00:00:00"/></td>
                           <td class="cr_short_td"><div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                           <div class="bws_hidden_help_text cr_min_260px">
                           <?php
                              echo esc_html__("No info.", 'yummomatic-yummly-post-generator');
                              ?>
                           </div>
                           </div></td>
                           <td class="cr_center">
                           <div>
                           <img src="<?php
                              echo esc_url(plugin_dir_url(dirname(__FILE__)) . 'images/running.gif');
                              ?>" alt="Running" class="cr_running">
                           <div class="codemainfzr cr_gray_back">
                           <select id="actions" class="actions" name="actions" disabled>
                           <option value="select" disabled selected><?php echo esc_html__("Select an Action", 'yummomatic-yummly-post-generator');?></option>
                           <option value="run" onclick=""><?php echo esc_html__("Run This Rule Now", 'yummomatic-yummly-post-generator');?></option>
                           <option value="trash" onclick=""><?php echo esc_html__("Move All Posts To Trash", 'yummomatic-yummly-post-generator');?></option>
                           <option value="duplicate" onclick=""><?php echo esc_html__("Duplicate This Rule", 'yummomatic-yummly-post-generator');?></option>
                           <option value="delete" onclick=""><?php echo esc_html__("Permanently Delete All Posts", 'yummomatic-yummly-post-generator');?></option>
                           </select>
                           </div>
                           </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         <hr/>
         <div>
            <p class="submit"><input type="submit" name="btnSubmit" id="btnSubmit" class="button button-primary" onclick="unsaved = false;" value="<?php echo esc_html__("Save Settings", 'yummomatic-yummly-post-generator');?>"/></p>
         </div>
         <div>
            <a href="https://www.youtube.com/watch?v=5rbnu_uis7Y" target="_blank"><?php echo esc_html__("Nested Shortcodes also supported!", 'yummomatic-yummly-post-generator');?></a><br/><?php echo esc_html__("Confused about rule running status icons?", 'yummomatic-yummly-post-generator');?> <a href="http://coderevolution.ro/knowledge-base/faq/how-to-interpret-the-rule-running-visual-indicators-red-x-yellow-diamond-green-tick-from-inside-plugins/" target="_blank"><?php echo esc_html__("More info", 'yummomatic-yummly-post-generator');?></a><br/>
            <div class="cr_none" id="midas_icons">
               <table>
                  <tr>
                     <td><img id="run_img" src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)) . 'images/running.gif');?>" alt="Running" title="status"></td>
                     <td><?php echo esc_html__("In Progress", 'yummomatic-yummly-post-generator');?> - <b><?php echo esc_html__("Importing is Running", 'yummomatic-yummly-post-generator');?></b></td>
                  </tr>
                  <tr>
                     <td><img id="ok_img" src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)) . 'images/ok.gif');?>" alt="OK"  title="status"></td>
                     <td><?php echo esc_html__("Success", 'yummomatic-yummly-post-generator');?> - <b><?php echo esc_html__("New Posts Created", 'yummomatic-yummly-post-generator');?></b></td>
                  </tr>
                  <tr>
                     <td><img id="fail_img" src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)) . 'images/failed.gif');?>" alt="Faield" title="status"></td>
                     <td><?php echo esc_html__("Failed", 'yummomatic-yummly-post-generator');?> - <b><?php echo esc_html__("An Error Occurred.", 'yummomatic-yummly-post-generator');?> <b><?php echo esc_html__("Please check 'Activity and Logging' plugin menu for details.", 'yummomatic-yummly-post-generator');?></b></td>
                  </tr>
                  <tr>
                     <td><img id="nochange_img" src="<?php echo esc_url(plugin_dir_url(dirname(__FILE__)) . 'images/nochange.gif');?>" alt="NoChange" title="status"></td>
                     <td><?php echo esc_html__("No Change - No New Posts Created", 'yummomatic-yummly-post-generator');?> - <b><?php echo esc_html__("Possible reasons:", 'yummomatic-yummly-post-generator');?></b></td>
                  </tr>
                  <tr>
                     <td></td>
                     <td>
                        <ul>
                           <li>&#9658; <?php echo esc_html__("Already all posts are published that match your search and posts will be posted when new content will be available", 'yummomatic-yummly-post-generator');?></li>
                           <li>&#9658; <?php echo esc_html__("Some restrictions you defined in the plugin's 'Main Settings'", 'yummomatic-yummly-post-generator');?> <i>(<?php echo esc_html__("example: 'Minimum Content Word Count', 'Maximum Content Word Count', 'Minimum Title Word Count', 'Maximum Title Word Count', 'Banned Words List', 'Reuired Words List', 'Skip Posts Without Images'", 'yummomatic-yummly-post-generator');?>)</i> <?php echo esc_html__("prevent posting of new posts.", 'yummomatic-yummly-post-generator');?></li>
                        </ul>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
      </form>
   </div>
</div>
<?php
   }
   if (isset($_POST['yummomatic_rules_list'])) {
       add_action('admin_init', 'yummomatic_save_rules_manual');
   }
   
   function yummomatic_save_rules_manual($data2)
   {
       check_admin_referer('yummomatic_save_rules', '_yummomaticr_nonce');
       
       $data2 = $_POST['yummomatic_rules_list'];
       $rules = array();
       $cont  = 0;
       $cat_cont = 0;
       if (isset($data2['date'][0])) {
           for ($i = 0; $i < sizeof($data2['date']); ++$i) {
               $bundle = array();
               if (isset($data2['schedule'][$i]) && $data2['schedule'][$i] != '' && $data2['date'][$i] != '') {
                   $bundle[] = trim(sanitize_text_field($data2['limit_title_word_count'][$i]));
                   $bundle[] = trim(sanitize_text_field($data2['schedule'][$i]));
                   if (isset($data2['active'][$i])) {
                       $bundle[] = trim(sanitize_text_field($data2['active'][$i]));
                   } else {
                       $bundle[] = '0';
                   }
                   $bundle[]     = trim(sanitize_text_field($data2['last_run'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['submit_status'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['default_type'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['post_author'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['default_tags'][$i]));
                   if($i == sizeof($data2['schedule']) - 1)
                   {
                       if(isset($data2['default_category']))
                       {
                           $bundle[]     = $data2['default_category'];
                       }
                       else
                       {
                           if(!isset($data2['default_category' . $cat_cont]))
                           {
                               $cat_cont++;
                           }
                           if(!isset($data2['default_category' . $cat_cont]))
                           {
                               $bundle[]     = array('yummomatic_no_category_12345678');
                           }
                           else
                           {
                               $bundle[]     = $data2['default_category' . $cat_cont];
                           }
                       }
                   }
                   else
                   {
                       if(!isset($data2['default_category' . $cat_cont]))
                       {
                           $cat_cont++;
                       }
                       if(!isset($data2['default_category' . $cat_cont]))
                       {
                           $bundle[]     = array('yummomatic_no_category_12345678');
                       }
                       else
                       {
                           $bundle[]     = $data2['default_category' . $cat_cont];
                       }
                   }
                   $bundle[]     = trim(sanitize_text_field($data2['auto_categories'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['auto_tags'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['enable_comments'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['featured_image'][$i]));
                   $bundle[]     = trim($data2['image_url'][$i]);
                   $bundle[]     = $data2['post_title'][$i];
                   $bundle[]     = $data2['post_content'][$i];
                   $bundle[]     = trim(sanitize_text_field($data2['enable_pingback'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['post_format'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['date'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['strip_images'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['skip_posts'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['max'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['full_content'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['disable_excerpt'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['remove_default'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['skip_parsed'][$i]));
                   $bundle[]     = trim($data2['get_extended'][$i]);
                   $bundle[]     = trim(sanitize_text_field($data2['continue_search'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['custom_fields'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['custom_tax'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['recipe_cuisine'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['recipe_diet'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['excluded_ingredients'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['intolerances'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['limit_license'][$i]));
                   $bundle[]     = trim(sanitize_text_field($data2['instructions_required'][$i]));
                   $rules[$cont] = $bundle;
                   $cont++;
                   $cat_cont++;
               }
           }
       }
       update_option('yummomatic_rules_list', $rules, false);
   }
   function yummomatic_expand_rules_manual()
   {
       if (!get_option('yummomatic_running_list')) {
           $running = array();
       } else {
           $running = get_option('yummomatic_running_list');
       }
       $GLOBALS['wp_object_cache']->delete('yummomatic_rules_list', 'options');
       $rules  = get_option('yummomatic_rules_list');
       $output = '';
       $cont   = 0;
       if (!empty($rules)) {
           $posted_items = array();
           $post_list = array();
           $postsPerPage = 50000;
           $paged = 0;
           do
           {
               $postOffset = $paged * $postsPerPage;
               $query = array(
                   'post_status' => array(
                       'publish',
                       'draft',
                       'pending',
                       'trash',
                       'private',
                       'future'
                   ),
                   'post_type' => array(
                       'any'
                   ),
                   'numberposts' => $postsPerPage,
                   'meta_key' => 'yummomatic_parent_rule',
                   'fields' => 'ids',
                   'offset'  => $postOffset
               );
               $got_me = get_posts($query);
               $post_list = array_merge($post_list, $got_me);
               $paged++;
           }while(!empty($got_me));
           wp_suspend_cache_addition(true);
           foreach ($post_list as $post) {
               $rule_id = get_post_meta($post, 'yummomatic_parent_rule', true);
               $exp = explode('-', $rule_id);
               if(isset($exp[0]) && isset($exp[1]) && $exp[0] == '0')
               {
                   $posted_items[] = $exp[1];
               }
           }
           wp_suspend_cache_addition(false);
           $counted_vals = array_count_values($posted_items);
           foreach ($rules as $request => $bundle[]) {
               if (isset($counted_vals[$cont])) {
                   $generated_posts = $counted_vals[$cont];
               } else {
                   $generated_posts = 0;
               }
               $bundle_values          = array_values($bundle);
               $myValues               = $bundle_values[$cont];
               $array_my_values        = array_values($myValues);for($iji=0;$iji<count($array_my_values);++$iji){if(is_string($array_my_values[$iji])){$array_my_values[$iji]=stripslashes($array_my_values[$iji]);}}
               $limit_title_word_count             = $array_my_values[0];
               $schedule               = $array_my_values[1];
               $active                 = $array_my_values[2];
               $last_run               = $array_my_values[3];
               $status                 = $array_my_values[4];
               $def_type               = $array_my_values[5];
               $post_user_name         = $array_my_values[6];
               $default_tags           = $array_my_values[7];
               $default_category       = $array_my_values[8];
               $auto_categories        = $array_my_values[9];
               $auto_tags              = $array_my_values[10];
               $enable_comments        = $array_my_values[11];
               $featured_image         = $array_my_values[12];
               $image_url              = $array_my_values[13];
               $post_title             = $array_my_values[14];
               $post_content           = $array_my_values[15];
               $enable_pingback        = $array_my_values[16];
               $post_format            = $array_my_values[17];
               $date                   = $array_my_values[18];
               $strip_images           = $array_my_values[19];
               $skip_posts             = $array_my_values[20];
               $max                    = $array_my_values[21];
               $full_content           = $array_my_values[22];
               $disable_excerpt        = $array_my_values[23];
               $remove_default         = $array_my_values[24];
               $skip_parsed            = $array_my_values[25];
               $get_extended           = $array_my_values[26];
               $continue_search        = $array_my_values[27];
               $custom_fields          = $array_my_values[28];
               $custom_tax             = $array_my_values[29];
               $recipe_cuisine         = $array_my_values[30];
               $recipe_diet            = $array_my_values[31];
               $excluded_ingredients   = $array_my_values[32];
               $intolerances           = $array_my_values[33];
               $limit_license          = $array_my_values[34];
               $instructions_required  = $array_my_values[35];
               wp_add_inline_script('yummomatic-footer-script', 'createAdmin(' . esc_html($cont) . ');', 'after');
               $output .= '<tr>
                           <td class="cr_short_td">' . esc_html($cont) . '</td>
                           <td class="cr_sz"><input type="text" placeholder="Please input a query parameter" name="yummomatic_rules_list[date][]" value="' . esc_attr($date) . '" class="cr_width_full" required></td>
   						<td class="cr_comm_td"><input type="number" step="1" min="1" placeholder="# h" name="yummomatic_rules_list[schedule][]" value="' . esc_attr($schedule) . '" class="cr_width_full" required></td>
                           <td class="cr_comm_td"><input type="number" step="1" min="0" placeholder="# max" max="100" name="yummomatic_rules_list[max][]" value="' . esc_attr($max) . '" class="cr_width_full" required></td>
                           <td class="cr_status"><select id="submit_status" name="yummomatic_rules_list[submit_status][]" class="cr_width_70">
                                     <option value="pending"';
               if ($status == 'pending') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Pending -> Moderate", 'yummomatic-yummly-post-generator') . '</option>
                                     <option value="draft"';
               if ($status == 'draft') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Draft -> Moderate", 'yummomatic-yummly-post-generator') . '</option>
                                     <option value="publish"';
               if ($status == 'publish') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Published", 'yummomatic-yummly-post-generator') . '</option>
                                     <option value="private"';
               if ($status == 'private') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Private", 'yummomatic-yummly-post-generator') . '</option>
                                     <option value="trash"';
               if ($status == 'trash') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Trash", 'yummomatic-yummly-post-generator') . '</option>
                       </select>  </td>
                       <td class="cr_comm_td"><select id="default_type" name="yummomatic_rules_list[default_type][]" class="cr_width_auto">';
               foreach ( get_post_types( '', 'names' ) as $post_type ) {
                  $output .= '<option value="' . esc_attr($post_type) . '"';
                  if ($def_type == $post_type) {
                       $output .= ' selected';
                   }
                  $output .= '>' . esc_html($post_type) . '</option>';
               }
               $output .= '</select>  </td>
                       <td class="cr_author"><select id="post_author" name="yummomatic_rules_list[post_author][]" class="cr_width_auto cr_max_width_150">';
               $blogusers = get_users( [ 'role__in' => [ 'contributor', 'author', 'editor', 'administrator' ] ] );
               foreach ($blogusers as $user) {
                   $output .= '<option value="' . esc_html($user->ID) . '"';
                   if ($post_user_name == $user->ID) {
                       $output .= " selected";
                   }
                   $output .= '>' . esc_html($user->display_name) . '</option>';
               }
               $output .= '</select>  </td>
                       <td class="cr_width_70">
                       <input type="button" id="mybtnfzr' . esc_html($cont) . '" value="Settings">
                       <div id="mymodalfzr' . esc_html($cont) . '" class="codemodalfzr">
     <div class="codemodalfzr-content">
       <div class="codemodalfzr-header">
         <span id="yummomatic_close' . esc_html($cont) . '" class="codeclosefzr">&times;</span>
         <h2>' . esc_html__('Rule', 'yummomatic-yummly-post-generator') . ' <span class="cr_color_white">ID ' . esc_html($cont) . '</span> ' . esc_html__('Advanced Settings', 'yummomatic-yummly-post-generator') . '</h2>
       </div>
       <div class="codemodalfzr-body">
       <div class="table-responsive">
         <table class="responsive table cr_main_table_nowr">
       <tr><td class="cr_min_width_200">
       <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Set the title of the generated posts for user rules. You can use the following shortcodes:  %%random_sentence%%, %%random_sentence2%%, %%item_title%%, %%item_description%%, %%item_content%%, %%item_cat%%, %%item_tags%%, %%item_show_image%%, %%item_image_URL%%, %%author%%, %%author_link%%", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Generated Post Title", 'yummomatic-yummly-post-generator') . ':</b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                       
                       </td><td>
                       <input type="text" name="yummomatic_rules_list[post_title][]" value="' . esc_attr(htmlspecialchars($post_title)) . '" placeholder="Please insert your desired post title. Example: %%item_title%%" class="cr_width_full">
                           
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Set the content of the generated posts for user rules. You can use the following shortcodes: %%custom_html%%, %%custom_html2%%, %%random_sentence%%, %%random_sentence2%%, %%item_servings%%, %%item_labels%%, %%item_words%%, %%item_author%%, %%item_attribution_url%%, %%item_attribution_logo%%, %%item_attribution_text%%, %%item_author_link%%, %%item_content%%, %%item_content_plain_text%%, %%item_read_more_button%%, %%item_show_image%%, %%item_description%%, %%item_id%%, %%item_title%%, %%item_url%%, %%recipe_description%%, %%item_image_url%%, %%item_yield%%, %%item_ingredients%%, %%item_instructions%%, %%item_cooking_time%%, %%item_rating%%, %%item_cuisine%%, %%item_course%%", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Generated Post Content", 'yummomatic-yummly-post-generator') . ':</b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                       
                       </td><td>
                       <textarea rows="2" cols="70" name="yummomatic_rules_list[post_content][]" placeholder="Please insert your desired post content. Example:%%item_content%%" class="cr_width_full">' . htmlspecialchars($post_content) . '</textarea>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to remember last posted item and continue search from it the next time the importing rule runs?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Remember Last Posted Item And Continue Search From It", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="continue_search" name="yummomatic_rules_list[continue_search][]"';
               if ($continue_search == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__('Select the cuisine you wish to import recipes for', 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Recipe Cuisine", 'yummomatic-yummly-post-generator') . ':</b>   
                       </td><td>
                       <select id="recipe_cuisine" name="yummomatic_rules_list[recipe_cuisine][]" class="cr_width_full">
                       <option value="any"';
               if ($recipe_cuisine == 'any') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Any", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="african"';
               if ($recipe_cuisine == 'african') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("African", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="american"';
               if ($recipe_cuisine == 'american') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("American", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="british"';
               if ($recipe_cuisine == 'british') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("British", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="cajun"';
               if ($recipe_cuisine == 'cajun') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Cajun", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="caribbean"';
               if ($recipe_cuisine == 'caribbean') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Caribbean", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="chinese"';
               if ($recipe_cuisine == 'chinese') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Chinese", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="eastern%20european"';
               if ($recipe_cuisine == 'eastern%20european') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Eastern European", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="european"';
               if ($recipe_cuisine == 'european') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("European", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="french"';
               if ($recipe_cuisine == 'french') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("French", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="german"';
               if ($recipe_cuisine == 'german') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("German", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="greek"';
               if ($recipe_cuisine == 'greek') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Greek", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="indian"';
               if ($recipe_cuisine == 'indian') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Indian", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="irish"';
               if ($recipe_cuisine == 'irish') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Irish", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="italian"';
               if ($recipe_cuisine == 'italian') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Italian", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="japanese"';
               if ($recipe_cuisine == 'japanese') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Japanese", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="jewish"';
               if ($recipe_cuisine == 'jewish') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Jewish", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="korean"';
               if ($recipe_cuisine == 'korean') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Korean", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="latin%20american"';
               if ($recipe_cuisine == 'latin%20american') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Latin American", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="mediterranean"';
               if ($recipe_cuisine == 'mediterranean') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Mediterranean", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="mexican"';
               if ($recipe_cuisine == 'mexican') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Mexican", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="middle%20eastern"';
               if ($recipe_cuisine == 'middle%20eastern') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Middle Eastern", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="nordic"';
               if ($recipe_cuisine == 'nordic') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Nordic", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="southern"';
               if ($recipe_cuisine == 'southern') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Southern", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="spanish"';
               if ($recipe_cuisine == 'spanish') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Spanish", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="thai"';
               if ($recipe_cuisine == 'thai') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Thai", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="vietnamese"';
               if ($recipe_cuisine == 'vietnamese') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Vietnamese", 'yummomatic-yummly-post-generator') . '</option>
                   </select>     
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__('Select the diet you wish to import recipes for', 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Recipe Diet", 'yummomatic-yummly-post-generator') . ':</b>   
                       </td><td>
                       <select id="recipe_diet" name="yummomatic_rules_list[recipe_diet][]" class="cr_width_full">
                       <option value="any"';
               if ($recipe_diet == 'any') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Any", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Gluten Free"';
               if ($recipe_diet == 'Gluten Free') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Gluten Free", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Ketogenic"';
               if ($recipe_diet == 'Ketogenic') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Ketogenic", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Vegetarian"';
               if ($recipe_diet == 'Vegetarian') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Vegetarian", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Lacto-Vegetarian"';
               if ($recipe_diet == 'Lacto-Vegetarian') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Lacto-Vegetarian", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Ovo-Vegetarian"';
               if ($recipe_diet == 'Ovo-Vegetarian') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Ovo-Vegetarian", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Vegan"';
               if ($recipe_diet == 'Vegan') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Vegan", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Pescetarian"';
               if ($recipe_diet == 'Pescetarian') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Pescetarian", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Paleo"';
               if ($recipe_diet == 'Paleo') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Paleo", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Primal"';
               if ($recipe_diet == 'Primal') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Primal", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="Whole30"';
               if ($recipe_diet == 'Whole30') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Whole30", 'yummomatic-yummly-post-generator') . '</option>
                   </select>     
           </div>
           <tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("A comma-separated list of ingredients or ingredient types that the recipes must not contain.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Excluded Ingredients", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="text" name="yummomatic_rules_list[excluded_ingredients][]" value="' . htmlspecialchars($excluded_ingredients) . '" placeholder="Excluded ingredients list" class="cr_width_full">
                           
           </div>
           <tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("A comma-separated list of intolerances. All recipes returned must not contain ingredients that are not suitable for people with the intolerances entered. Possible values: Dairy, Egg, Gluten, Grain, Peanut, Seafood, Sesame, Shellfish, Soy, Sulfite, Tree Nut, Wheat", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Intolerance List", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="text" name="yummomatic_rules_list[intolerances][]" value="' . htmlspecialchars($intolerances) . '" placeholder="Intolerance list" class="cr_width_full">
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to skip the first X number of posts from the results?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Post Search Offset", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="number" min="1" step="1" id="skip_posts" name="yummomatic_rules_list[skip_posts][]" value="' . esc_attr($skip_posts) . '" placeholder="Please insert a post count to skip" class="cr_width_full">
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Whether the recipes should have an open license that allows display with proper attribution.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Limit License", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="limit_license" name="yummomatic_rules_list[limit_license][]"';
               if ($limit_license == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Whether the recipes must have instructions.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Instructions Required", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="instructions_required" name="yummomatic_rules_list[instructions_required][]"';
               if ($instructions_required == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to strip images from generated content?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Strip Images From Content", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="strip_images" name="yummomatic_rules_list[strip_images][]"';
               if ($strip_images == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to limit the title\'s lenght to a specific word count? To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Limit Title Word Count", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="number" min="1" step="1" id="limit_title_word_count" name="yummomatic_rules_list[limit_title_word_count][]" value="' . esc_attr($limit_title_word_count) . '" placeholder="Please insert a title limit count" class="cr_width_full">
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to disable post excerpt generation?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Disable Post Excerpt", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="disable_excerpt" name="yummomatic_rules_list[disable_excerpt][]"';
               if ($disable_excerpt == '1') {
                   $output .= ' checked';
               }
               $output .= '>   
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__('If your template supports "Post Formats", than you can select one here. If not, leave this at it\'s default value.', 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Generated Post Format", 'yummomatic-yummly-post-generator') . ':</b>   
                       </td><td>
                       <select id="post_format" name="yummomatic_rules_list[post_format][]" class="cr_width_full">
                       <option value="post-format-standard"';
               if ($post_format == 'post-format-standard') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Standard", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-aside"';
               if ($post_format == 'post-format-aside') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Aside", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-gallery"';
               if ($post_format == 'post-format-gallery') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Gallery", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-link"';
               if ($post_format == 'post-format-link') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Link", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-image"';
               if ($post_format == 'post-format-image') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Image", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-quote"';
               if ($post_format == 'post-format-quote') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Quote", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-status"';
               if ($post_format == 'post-format-status') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Status", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-video"';
               if ($post_format == 'post-format-video') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Video", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-audio"';
               if ($post_format == 'post-format-audio') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Audio", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="post-format-chat"';
               if ($post_format == 'post-format-chat') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Chat", 'yummomatic-yummly-post-generator') . '</option>
                   </select>     
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Select the post category that you want for the automatically generated posts to have. To select more categories, hold down the CTRL key.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Additional Post Category", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <select multiple class="cr_width_full" id="default_category" name="yummomatic_rules_list[default_category' . esc_html($cont) . '][]">
                       <option value="yummomatic_no_category_12345678"';
                       if(!is_array($default_category))
                       {
                           $default_category = array();
                       }
                       foreach($default_category as $dc)
                       {
                           if ("yummomatic_no_category_12345678" == $dc) {
                               $output .= ' selected';
                           }
                       }
                       $output .= '>' . esc_html__("Do Not Add a Category", 'yummomatic-yummly-post-generator') . '</option>';
               $cat_args   = array(
                   "orderby" => "name",
                   "hide_empty" => 0,
                   "order" => "ASC"
               );
               $categories = get_categories($cat_args);
               
               foreach ($categories as $category) {
                   $output .= '<option value="' . esc_attr($category->term_id) . '"';
                   foreach($default_category as $dc)
                   {
                       if ($category->term_id == $dc) {
                           $output .= ' selected';
                       }
                   }
                   
                   $output .= '>' . sanitize_text_field($category->name) . '</option>';
               }
               $output .= '</select>     
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to automatically add post categories, from the feed items?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Auto Add Categories", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td> 
                       <select id="auto_categories" name="yummomatic_rules_list[auto_categories][]" class="cr_width_full">
                       <option value="disabled"';
               if ($auto_categories == 'disabled') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Disabled", 'yummomatic-yummly-post-generator') . '</option>
               <option value="labels"';
               if ($auto_categories == 'labels') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Recipe Course", 'yummomatic-yummly-post-generator') . '</option>
               <option value="hlabels"';
               if ($auto_categories == 'hlabels') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Recipe Cuisine", 'yummomatic-yummly-post-generator') . '</option>
               <option value="title"';
               if ($auto_categories == 'title') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Title", 'yummomatic-yummly-post-generator') . '</option>
               <option value="both"';
               if ($auto_categories == 'both') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Recipe Labels & Title", 'yummomatic-yummly-post-generator') . '</option></select>              
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("This feature will try to remove the WordPress\'s default post category. This may fail in case no additional categories are added, because WordPress requires at least one post category for every post.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Remove WP Default Post Category", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="remove_default" name="yummomatic_rules_list[remove_default][]"';
           if($remove_default == '1')
           {
               $output .= ' checked';
           }
           $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to automatically add post tags from the feed items?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Auto Add Tags", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <select id="auto_tags" name="yummomatic_rules_list[auto_tags][]" class="cr_width_full">
                       <option value="disabled"';
               if ($auto_tags == 'disabled') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Disabled", 'yummomatic-yummly-post-generator') . '</option>
                       <option value="labels"';
               if ($auto_tags == 'labels') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Recipe Course", 'yummomatic-yummly-post-generator') . '</option>
               <option value="hlabels"';
               if ($auto_tags == 'hlabels') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Recipe Cuisine", 'yummomatic-yummly-post-generator') . '</option>
               <option value="title"';
               if ($auto_tags == 'title') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Title", 'yummomatic-yummly-post-generator') . '</option>
               <option value="both"';
               if ($auto_tags == 'both') {
                   $output .= ' selected';
               }
               $output .= '>' . esc_html__("Recipe Labels & Title", 'yummomatic-yummly-post-generator') . '</option>';
               $output .= '</select>        
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Select the post tags that you want for the automatically generated posts to have.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Additional Post Tags", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input class="cr_width_full" type="text" name="yummomatic_rules_list[default_tags][]" value="' . esc_attr($default_tags) . '" placeholder="Please insert your additional post tags here" >
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to enable comments for the generated posts?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Enable Comments For Posts", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="enable_comments" name="yummomatic_rules_list[enable_comments][]"';
               if ($enable_comments == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to enable pingbacks and trackbacks for the generated posts?", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Enable Pingback/Trackback", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="enable_pingback" name="yummomatic_rules_list[enable_pingback][]"';
               if ($enable_pingback == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to set featured image for generated post (to the first image that was found in the post)? This works only when \'Get Full Content\' is also checked.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Auto Get Featured Image", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="featured_image" name="yummomatic_rules_list[featured_image][]"';
               if ($featured_image == '1') {
                   $output .= ' checked';
               }
               $output .= '>
                           
           </div>
           </td></tr><tr><td>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Insert a comma separated list of links to valid images that will be set randomly for the featured image for the posts that do not have a valid image attached or if you disabled automatical featured image generation. You can also use image numeric IDs from images found in the Media Gallery. To disable this feature, leave this field blank.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Default Featured Image List", 'yummomatic-yummly-post-generator') . ':</b>
                       </td><td>
                       <input class="cr_width_full" type="text" name="yummomatic_rules_list[image_url][]" placeholder="Please insert the link to a valid image" value="' . esc_attr($image_url) . '"/>
                       
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to get extended recipe information (source url, yield, featured image, nutrition attribute)? If you enable this, 1 additional API call will be made for each posted recipe.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Get Extended Recipe Information", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="get_extended" name="yummomatic_rules_list[get_extended][]"';
           if($get_extended == '1')
           {
               $output .= ' checked';
           }
           $output .= '>               
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want to try to get full recipe content from the linked URL? This will have no effect if you do not check the above \'Get Extended Recipe Information:\' settings field (to get the source URL).", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Try to Get Full Recipe Content", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="full_content" name="yummomatic_rules_list[full_content][]"';
           if($full_content == '1')
           {
               $output .= ' checked';
           }
           $output .= '>               
           </div>
           </td></tr><tr><td>
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Do you want skip recipes that cannot be parsed using the built-in recipe parser? If you uncheck this, recipes will be posted using the full content found on the source websites.", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Skip Recipes That Cannot Be Parsed", 'yummomatic-yummly-post-generator') . ':</b>
                       
                       </td><td>
                       <input type="checkbox" id="skip_parsed" name="yummomatic_rules_list[skip_parsed][]"';
           if($skip_parsed == '1')
           {
               $output .= ' checked';
           }
           $output .= '>               
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Set the custom fields that will be set for generated posts. The syntax for this field is the following: custom_field_name1 => custom_field_value1, custom_field_name2 => custom_field_value2, ... . In custom_field_valueX, you can use shortcodes, same like in post content. Example (without quotes): \'title_custom_field => %%item_title%%\'. You can use the following shortcodes: %%custom_html%%, %%custom_html2%%, %%random_sentence%%, %%random_sentence2%%, %%item_servings%%, %%item_labels%%, %%item_words%%, %%item_author%%, %%item_attribution_url%%, %%item_attribution_logo%%, %%item_attribution_text%%, %%item_author_link%%, %%item_content%%, %%item_content_plain_text%%, %%item_read_more_button%%, %%item_show_image%%, %%item_description%%, %%item_id%%, %%item_title%%, %%item_url%%, %%recipe_description%%, %%item_image_url%%, %%item_yield%%, %%item_ingredients%%, %%item_instructions%%, %%item_cooking_time%%, %%item_rating%%, %%item_cuisine%%, %%item_course%%", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Post Custom Fields", 'yummomatic-yummly-post-generator') . ':</b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                       
                       </td><td>
                       <textarea rows="1" cols="70" name="yummomatic_rules_list[custom_fields][]" placeholder="Please insert your desired custom fields. Example: title_custom_field => %%item_title%%" class="cr_width_full">' . esc_textarea($custom_fields) . '</textarea>
                           
           </div>
           </td></tr><tr><td class="cr_min_width_200">
           <div>
           <div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                                           <div class="bws_hidden_help_text cr_min_260px">' . esc_html__("Set the custom taxonomies that will be set for generated posts. The syntax for this field is the following: custom_taxonomy_name1 => custom_taxonomy_value1A, custom_taxonomy_value1B; custom_taxonomy_name2 => custom_taxonomy_value2A, custom_taxonomy_value2B; ... . In custom_taxonomy_valueX, you can use shortcodes. Example (without quotes): \'cats_taxonomy_field => manualtax1, %%item_title%%; tags_taxonomy_field => manualtax2, %%item_title%%\'. You can use the following shortcodes: %%custom_html%%, %%custom_html2%%, %%random_sentence%%, %%random_sentence2%%, %%item_servings%%, %%item_labels%%, %%item_words%%, %%item_author%%, %%item_attribution_url%%, %%item_attribution_logo%%, %%item_attribution_text%%, %%item_author_link%%, %%item_content%%, %%item_content_plain_text%%, %%item_read_more_button%%, %%item_show_image%%, %%item_description%%, %%item_id%%, %%item_title%%, %%item_url%%, %%recipe_description%%, %%item_image_url%%, %%item_yield%%, %%item_ingredients%%, %%item_instructions%%, %%item_cooking_time%%, %%item_rating%%, %%item_cuisine%%, %%item_course%%", 'yummomatic-yummly-post-generator') . '
                           </div>
                       </div>
                       <b>' . esc_html__("Post Custom Taxonomies", 'yummomatic-yummly-post-generator') . ':</b>&nbsp;<b><a href="https://coderevolution.ro/knowledge-base/faq/post-template-reference-advanced-usage/" target="_blank">&#9432;</a></b>
                       </td><td>
                           <textarea rows="1" cols="70" name="yummomatic_rules_list[custom_tax][]" placeholder="Please insert your desired custom taxonomies. Example: custom_taxonomy_name => %%item_cats%%" class="cr_width_full">' . esc_textarea($custom_tax) . '</textarea>
           </div>
           </td></tr></table></div>
       </div>
       <div class="codemodalfzr-footer">
         <br/>
         <h3 class="cr_inline">Yummomatic Automatic Post Generator</h3><span id="yummomatic_ok' . esc_html($cont) . '" class="codeokfzr cr_inline">OK&nbsp;</span>
         <br/><br/>
       </div>
     </div>
   
   </div>       
                       </td>
   						<td class="cr_shrt_td2"><span class="wpyummomatic-delete">X</span></td>
                           <td class="cr_short_td"><input type="checkbox" name="yummomatic_rules_list[active][]" class="activateDeactivateClass" value="1"';
               if (isset($active) && $active === '1') {
                   $output .= ' checked';
               }
               $output .= '/>
                           <input type="hidden" name="yummomatic_rules_list[last_run][]" value="' . esc_attr($last_run) . '"/></td>
                           <td class="cr_shrt_td2"><div class="bws_help_box bws_help_box_right dashicons dashicons-editor-help cr_align_middle">
                           <div class="bws_hidden_help_text cr_min_260px">' . sprintf( wp_kses( __( 'Shortcode for this rule<br/>(to cross-post from this plugin in other plugins):', 'yummomatic-yummly-post-generator'), array(  'br' => array( ) ) ) ) . '<br/><b>%%yummomatic_0_' . esc_html($cont) . '%%</b><br/>' . esc_html__('Posts Generated:', 'yummomatic-yummly-post-generator') . ' ' . esc_html($generated_posts) . '<br/>';
               if ($generated_posts != 0) {
                   $output .= '<a href="' . get_admin_url() . 'edit.php?coderevolution_post_source=Yummomatic_0_' . esc_html($cont) . '&post_type=' . esc_html($def_type) . '" target="_blank">' . esc_html__('View Generated Posts', 'yummomatic-yummly-post-generator') . '</a><br/>';
               }
               $output .= esc_html__('Last Run: ', 'yummomatic-yummly-post-generator');
               if ($last_run == '1988-01-27 00:00:00') {
                   $output .= 'Never';
               } else {
                   $output .= $last_run;
               }
               $output .= '<br/>' . esc_html__('Next Run: ', 'yummomatic-yummly-post-generator');
               $nextrun = yummomatic_add_hour($last_run, $schedule);
               $now     = yummomatic_get_date_now();
               if ( defined( 'DISABLE_WP_CRON' ) && DISABLE_WP_CRON ) {
                   $output .= esc_html__('WP-CRON Disabled. Rules will not automatically run!', 'yummomatic-yummly-post-generator');
               }
               else
               {
                   if (isset($active) && $active === '1') {
                       $yummomatic_hour_diff = (int) yummomatic_hour_diff($now, $nextrun);
                       if ($yummomatic_hour_diff >= 0) {
                           $append = 'Now.';
                           $cron   = _get_cron_array();
                           if ($cron != FALSE) {
                               $date_format = _x('Y-m-d H:i:s', 'Date Time Format1', 'yummomatic-yummly-post-generator');
                               foreach ($cron as $timestamp => $cronhooks) {
                                   foreach ((array) $cronhooks as $hook => $events) {
                                       if ($hook == 'yummomaticaction') {
                                           foreach ((array) $events as $key => $event) {
                                               $append = date_i18n($date_format, $timestamp);
                                           }
                                       }
                                   }
                               }
                           }
                           $output .= $append;
                       } else {
                           $output .= $nextrun;
                       }
                   } else {
                       $output .= esc_html__('Rule Disabled', 'yummomatic-yummly-post-generator');
                   }
               }
               $output .= '<br/>' . esc_html__('Local Time: ', 'yummomatic-yummly-post-generator') . $now;
               $output .= '</div>
                       </div></td>
                           <td class="cr_center">
                           <div>
                           <img id="run_img' . esc_html($cont) . '" src="' . plugin_dir_url(dirname(__FILE__)) . 'images/running.gif' . '" alt="Running" class="cr_status_icon';
               if (!empty($running)) {
                   if (!in_array($cont, $running)) {
                       $output .= ' cr_hidden';
                   }
                   else
                   {
                       $f = fopen(get_temp_dir() . 'yummomatic_' . $cont, 'w');
                       if($f !== false)
                       {
                           if (!flock($f, LOCK_EX | LOCK_NB)) {
                           }
                           else
                           {
                               $output .= ' cr_hidden';
                               flock($f, LOCK_UN);
                               if (($xxkey = array_search($cont, $running)) !== false) {
                                   unset($running[$xxkey]);
                                   update_option('yummomatic_running_list', $running);
                               }
                           }
                       }
                   }
               } else {
                   $output .= ' cr_hidden';
               }
               $output .= '" title="status">
                           <div class="codemainfzr">
                           <select id="actions" class="actions" name="actions" onchange="actionsChangedManual(' . esc_html($cont) . ', this.value);" onfocus="this.selectedIndex = 0;">
                               <option value="select" disabled selected>' . esc_html__("Select an Action", 'yummomatic-yummly-post-generator') . '</option>
                               <option value="run">' . esc_html__("Run This Rule Now", 'yummomatic-yummly-post-generator') . '</option>
                               <option value="trash">' . esc_html__("Move All Posts To Trash", 'yummomatic-yummly-post-generator') . '</option>
                               <option value="duplicate">' . esc_html__("Duplicate This Rule", 'yummomatic-yummly-post-generator') . '</option>
                               <option value="delete">' . esc_html__("Permanently Delete All Posts", 'yummomatic-yummly-post-generator') . '</option>
                           </select>
                           </div>
                           </div>
                           </td>
   					</tr>	
   					';
               $cont = $cont + 1;
           }
       }
       return $output;
   }
   ?>