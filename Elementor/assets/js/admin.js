jQuery.noConflict();
(function ($) {
    var styleid = '';
    var childid = '';
    jQuery(".oxi-filp-box-elementor-extension-enable").on("click", function (e) {
        e.preventDefault();
        $(".oxi-sa-cards .oxi-sa-cards-switcher input:enabled").each(
                function (i) {
                    $(this).prop("checked", true).change();
                }
        );
    });
    jQuery(".oxi-filp-box-elementor-extension-disable").on("click", function (e) {
        e.preventDefault();
        $(".oxi-sa-cards .oxi-sa-cards-switcher input:enabled").each(
                function (i) {
                    $(this).prop("checked", false).change();
                }
        );
    });
    jQuery(".oxi-filp-box-elementor-extension-save").on("click", function (e) {
        e.preventDefault();
        var rawdata = $("#oxi-fli-box-elementor-extension").serialize();
        $.ajax({
            url: oxi_flip_box_editor.ajaxurl,
            type: "post",
            data: {
                action: "oxi_flip_box_data",
                _wpnonce: oxi_flip_box_editor.nonce,
                functionname: 'elementor_extension_active',
                styleid: styleid,
                childid: childid,
                rawdata: rawdata
            },
            success: function (response) {
                console.log(response);
            }
        });
    });
    jQuery(".oxi-filp-box-elementor-extension-reload").on("click", function () {
        location.reload();
    });


})(jQuery)