<?php

namespace OXI_FLIP_BOX_UPLOAD_PATH\Elementor\Core;

/**
 * Description of Admin
 *
 * @author biplo
 */
class Admin {

    use \OXI_FLIP_BOX_PLUGINS\Inc_Helper\Public_Helper;
    use \OXI_FLIP_BOX_PLUGINS\Inc_Helper\CSS_JS_Loader;

    /**
     * Constructor of Oxilab tabs Home Page
     *
     * @since 2.0.0
     */
    public function __construct() {
        $this->CSSJS_load();
        $this->Header();
        $this->Render();
    }

    public function CSSJS_load() {
        $this->admin_css_loader();
        $this->admin_ajax_load();
    }

    /**
     * Admin Notice JS file loader
     * @return void
     */
    public function admin_ajax_load() {
        wp_enqueue_script('oxi-flip-elementor-extension', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/js/admin.js', false, OXI_FLIP_BOX_TEXTDOMAIN);
        wp_localize_script('oxi-flip-elementor-extension', 'oxi_flip_box_editor', array('ajaxurl' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('oxi-flip-box-editor')));
    }

    public function Header() {
        apply_filters('oxi-flip-box-plugin/admin_menu', TRUE);
        $this->Admin_header();
    }

    public function Admin_header() {
        ?>
        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-import-layouts">
                <h1>Elementor Extension Settings</h1>
                <p> We Develop Couple of plugins which will help you to Create Your Modern and Dynamic Websites. Just click and Install </p>
            </div>
            <div class="sa-el-btn-group">
                <button type="button" class="sa-el-btn sa-el-btn-control-enable oxi-filp-box-elementor-extension-enable">Enable All</button>
                <button type="button" class="sa-el-btn sa-el-btn-control-disable oxi-filp-box-elementor-extension-disable">Disable All</button>
            </div>
        </div>
        <?php
    }

    public function Render() {
        ?>
        <div class="oxi-addons-wrapper">
            <div class="oxi-addons-row">
                <div class="oxi-addons-import-layouts">
                    <form id="oxi-fli-box-elementor-extension">
                        <div class="oxi-sa-cards-wrapper" style="padding-top: 30px;">
                            <div class="row"> 
                                <?php
                                $active = get_option('oxi-flipbox-elementor-extension');
                                $layouts = [
                                    1 => 'one',
                                    2 => 'two',
                                    3 => 'three',
                                    4 => 'four',
                                    5 => 'five',
                                    6 => 'six',
                                    7 => 'seven',
                                    8 => 'eight',
                                    9 => 'nine',
                                    10 => 'ten',
                                    11 => 'eleven',
                                    12 => 'twelve',
                                    13 => 'thirteen',
                                    14 => 'fourteen',
                                    15 => 'fifteen',
                                    16 => 'sixteen',
                                    17 => 'seventeen',
                                    18 => 'eighteen',
                                    19 => 'nineteen',
                                    20 => 'twinty',
                                    21 => 'twintyone',
                                    22 => 'twintytwo',
                                    23 => 'twintythree',
                                    24 => 'twintyfour',
                                    25 => 'twintyfive',
                                    26 => 'twintysix',
                                    27 => 'twintyseven',
                                    28 => 'twintyeight',
                                    29 => 'twintynine',
                                ];
                                foreach ($layouts as $k => $value) {
                                    $d = false;
                                    if (apply_filters('oxi-flip-box-plugin/pro_version', false) == false && $k > 3):
                                        $d = true;
                                    endif;
                                    echo '<div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="oxi-sa-cards">
                                    ' . ($d ? '<sup class="pro-label">Pro</sup>' : '') . '
                                        <div class="oxi-sa-cards-h1">
                                            Layouts ' . ucfirst($value) . '
                                        </div>
                                        <div class="oxi-sa-cards-switcher ' . ($d ? 'oxi-sa-cards-switcher-disabled' : '') . '">
                                            <input type="checkbox" class="oxi-addons-switcher-btn" id="oxi-flip-layouts-' . $value . '" name="oxi-flip-layouts-' . $value . '" ' . ((isset($active['oxi-flip-layouts-' . $value]) && $active['oxi-flip-layouts-' . $value] == 'on') ? 'checked="checked"' : '') . ' ' . ($d ? 'disabled="disabled"' : '') . '>
                                            <label for="oxi-flip-layouts-' . $value . '" class="oxi-addons-switcher-label"></label>
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 pt-5">
                                    <div class="sa-el-btn-group">
                                        <button type="button" class="sa-el-btn sa-el-btn-control-disable oxi-filp-box-elementor-extension-reload">Reload</button>
                                        <button type="button" class="sa-el-btn sa-el-btn-control-enable oxi-filp-box-elementor-extension-save">Save</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

}
