<?php

namespace OXI_FLIP_BOX_UPLOAD_PATH\Elementor\Core;

trait Public_Helper {

    /**
     * Register Widget Category 
     *
     * @since v1.0.0
     */
    public function register_widget_categories($elements_manager) {
        $elements_manager->add_category(
                'oxilab-flipbox-extension', [
            'title' => __('Oxilab Flipbox Extension', OXI_FLIP_BOX_TEXTDOMAIN),
            'icon' => 'font',
                ], 1
        );
    }

    /**
     * Register widgets
     *
     * @since v1.6.0
     */
    public function register_elements($widgets_manager) {
        $active = get_option('oxi-flipbox-elementor-extension');
        if (!is_array($active)):
            $active = [
                'one' => 'on',
                'two' => 'on',
                'three' => 'on'
            ];
        endif;
        foreach ($active as $key => $element) {
            $k = ucfirst(str_replace('oxi-flip-layouts-', '', $key));
            $CLS = 'OXI_FLIP_BOX_UPLOAD_PATH\Elementor\Widgets\\' . $k;
            $widgets_manager->register_widget_type(new $CLS);
        }
    }

    public function is_preview_mode() {
        if (isset($_REQUEST['doing_wp_cron'])) {
            return true;
        }
        if (wp_doing_ajax()) {
            return true;
        }
        if (isset($_GET['elementor-preview'])) {
            return true;
        }
        if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'elementor') {
            return true;
        }

        return false;
    }

    public function enqueue_scripts() {
        if ($this->is_preview_mode()):
            wp_enqueue_style('oxilab-flip-boxes', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/flip-boxes.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
            $active = get_option('oxi-flipbox-elementor-extension');
            if (!is_array($active)):
                $active = [
                    'one' => 'on',
                    'two' => 'on',
                    'three' => 'on'
                ];
            endif;
            foreach ($active as $key => $element) {
                $k = strtolower(str_replace('oxi-flip-layouts-', '', $key));
                wp_enqueue_style('oxilab-flip-box-' . $k, OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/' . $k . '.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
            }
        endif;
    }

}
