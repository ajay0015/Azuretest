"use strict";
var ajaxurl = mycustomsettings.ajaxurl;
jQuery(document).ready(function(){
					jQuery('span.wpyummomatic-delete').on('click', function(){
						var confirm_delete = confirm('Delete This Rule?');
						if (confirm_delete) {
							jQuery(this).parent().parent().remove();
							jQuery('#myForm').submit();						
						}
					});
				});
                var unsaved = false;
                jQuery(document).ready(function () {
                    jQuery(":input").change(function(){
                        var classes = this.className;
                        var classes = this.className.split(' ');
                        var found = jQuery.inArray('actions', classes) > -1;
                        if(this.id != 'select-shortcode' && this.id != 'PreventChromeAutocomplete' && !found)
                            unsaved = true;
                    });
                    function unloadPage(){ 
                        if(unsaved){
                            return "You have unsaved changes on this page. Do you want to leave this page and discard your changes or stay on this page?";
                        }
                    }
                    window.onbeforeunload = unloadPage;
                });

                        function deletePostsManual(number, type)
                        {
                            if (confirm("Are you sure you want to delete all posts generated by this rule?") == true) {
                                document.getElementById("run_img" + number).style.visibility = "visible";
                                document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/running.gif";
                                var data = {
                                    action: 'yummomatic_my_action',
                                    id: number,
                                    type: 0,
                                    how: type
                                };
                                jQuery.post(ajaxurl, data, function(response) {
                                    if(response.trim() == 'ok')
                                    {
                                        document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/ok.gif";
                                    }
                                    else
                                    {
                                        if(response.trim() == 'nochange')
                                        {
                                            document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/nochange.gif";
                                        }
                                        else
                                        {
                                            document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/failed.gif";
                                        }
                                    }
                                });
                            } else {
                                return;
                            }
                        }
                        
                        function duplicatePostsManual(number, type)
                        {
                            if (confirm("Are you sure you want to duplicate this rule?") == true) {
                                document.getElementById("run_img" + number).style.visibility = "visible";
                                document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/running.gif";
                                var data = {
                                    action: 'yummomatic_my_action',
                                    id: number,
                                    type: 0,
                                    how: type
                                };
                                jQuery.post(ajaxurl, data, function(response) {
                                    if(response.trim() == 'ok')
                                    {
                                        document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/ok.gif";
                                        location.reload();
                                    }
                                    else
                                    {
                                        if(response.trim() == 'nochange')
                                        {
                                            document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/nochange.gif";
                                        }
                                        else
                                        {
                                            document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/failed.gif";
                                        }
                                    }
                                });
                            } else {
                                return;
                            }
                        }
                        function runNowManual(number)
                        {
                            if (confirm("Are you sure you want to run this rule now?") == true) {
                                document.getElementById("run_img" + number).style.visibility = "visible";
                                document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/running.gif";
                                var data = {
                                    action: 'yummomatic_run_my_action',
                                    id: number
                                };
                                jQuery.post(ajaxurl, data, function(response) {
                                    if(response.trim() == 'ok')
                                    {
                                        document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/ok.gif";
                                    }
                                    else
                                    {
                                        if(response.trim() == 'nochange')
                                        {
                                            document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/nochange.gif";
                                        }
                                        else
                                        {
                                            document.getElementById("run_img" + number).src= mycustomsettings.plugin_dir_url + "images/failed.gif";
                                        }
                                    }
                                });
                            } else {
                                return;
                            }
                        }


function actionsChangedManual(ruleId, selectedValue)
{
    if (selectedValue==='run')
    {
        if(unsaved){
            alert("You have unsaved changes on this page. Please save your changes before manually running rules!");
            return;
        }
        runNowManual(ruleId);
    }
    else
    {
        if (selectedValue==='duplicate')
        {
            duplicatePostsManual(ruleId, 'duplicate');
        }
        else
        {
            if (selectedValue==='trash')
            {
                deletePostsManual(ruleId, 'trash');
            }
            else
            {
                deletePostsManual(ruleId, 'delete');
            }
        }
    }
}

		jQuery(document).ready(function() {
			jQuery('.yummomatic_image_button').on('click', function(){
				tb_show('',"media-upload.php?type=image&TB_iframe=true");
                window.send_to_editor = function(html) {
                    var url = jQuery(html).attr('src');
                    jQuery('#cr_input_box').val(url);
                    tb_remove();
                };
			});
		});
function thisonChangeHandler(cb) {
if(cb.checked == true)
{
    jQuery("input.activateDeactivateClass:checkbox").each( function () {
        jQuery(this).prop('checked', true);
    });
}
else
{
    jQuery("input.activateDeactivateClass:checkbox").each( function () {
        jQuery(this).prop('checked', false);
    });
}
}
var codemodalfzr = document.getElementById('mymodalfzr');
var btn = document.getElementById("mybtnfzr");
var span = document.getElementById("yummomatic_close");
var ok = document.getElementById("yummomatic_ok");
btn.onclick = function() {
    codemodalfzr.style.display = "block";
}
span.onclick = function() {
    codemodalfzr.style.display = "none";
}
ok.onclick = function() {
    codemodalfzr.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == codemodalfzr) {
        codemodalfzr.style.display = "none";
    }
}
jQuery("#myForm").on('submit', function () {
                    jQuery(this).on('submit', function() {
                        return false;
                    });

                    var this_master = jQuery(this);
jQuery('button[type=submit], input[type=submit]').prop('disabled',true);
                    this_master.find('input[type="checkbox"]').each( function () {
                        var checkbox_this = jQuery(this);

                        if (checkbox_this.attr("id") !== "exclusion")
                        {
                            if( checkbox_this.is(":checked") == true ) {
                                checkbox_this.attr('value','1');
                            } else {
                                checkbox_this.prop('checked',true);  
                                checkbox_this.attr('value','0');
                            }
                        }
                    });
if (typeof mycustomsettings.max_input_vars !== 'undefined' && jQuery('input, textarea, select, button').length >= mycustomsettings.max_input_vars) {
        this_master.append("<span style='color:red;'>Saving settings, please wait...</span>");
        var coderevolution_max_input_var_data = this_master.serialize();
        this_master.find("table").remove();
        this_master.append("<input type='hidden' class='coderevolution_max_input_var_data' name='coderevolution_max_input_var_data'/>");
        this_master.find("input.coderevolution_max_input_var_data").val(coderevolution_max_input_var_data);
    }
                })

function createAdmin(i) {
    var modals = [];
    var btns = [];
    var spans = [];
    var oks = [];
    var btns = [];
    var myarr = [];
    modals = document.getElementById("mymodalfzr" + i);
    btns = document.getElementById("mybtnfzr" + i);
    spans = document.getElementById("yummomatic_close" + i);
    oks = document.getElementById("yummomatic_ok" + i);
    btns.onclick = function(e) {
        modals.style.display = "block";
    }
    spans.onclick = function(e) {
        modals.style.display = "none";
    }
    oks.onclick = function(e) {
        modals.style.display = "none";
    }
    modals.addEventListener("click", function(e) {
        if (e.target !== this)
            return;
        modals.style.display = "none";
    }, false);
}