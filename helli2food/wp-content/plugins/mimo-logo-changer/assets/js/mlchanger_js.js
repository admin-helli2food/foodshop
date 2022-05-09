function lc_check_for_reset_setting() {
    res = confirm('آیا مایل هستید تنظیمات رو به حالت اصلی برگردانید؟' + "\n تمام تغییرات شما از بین خواهد رفت");
    if(res) {
        return true;
    } else {
        return false;
    }
}

jQuery(document).ready(function () {
    jQuery('#mlchanger_custom_html_message').click(function() {
        if(jQuery(this).is(":checked")) {
            jQuery('#mlchanger_login_message').attr('disabled', 'disabled');
            jQuery('#lc_custom_html_message_container').removeClass('lc_display_none');
        } else {
            jQuery('#mlchanger_login_message').removeAttr('disabled', 'disabled');
            jQuery('#lc_custom_html_message_container').addClass('lc_display_none');

        }
    });
});
