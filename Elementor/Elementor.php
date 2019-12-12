<?php

namespace OXI_FLIP_BOX_UPLOAD_PATH\Elementor;

/**
 * Description of Elementor
 *
 * @author biplo
 */
class Elementor {

    use \OXI_FLIP_BOX_UPLOAD_PATH\Elementor\Core\Public_Helper;

    /**
     * Minimum Elementor Version
     *
     * @since 1.0.0
     * @var string Minimum Elementor version required to run the plugin.
     */
    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

    /**
     * Minimum PHP Version
     *
     * @since 1.0.0
     * @var string Minimum PHP version required to run the plugin.
     */
    const MINIMUM_PHP_VERSION = '7.0';

    // instance container
    private static $instance = null;

    public static function instance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function __construct() {
        do_action('oxi-flip-box/before_init');
        add_action('init', array($this, 'i18n'));
        $this->init();
    }

    /**
     * Load Textdomain
     *
     * Load plugin localization files.
     * Fired by `init` action hook.
     *
     * @since 1.0.0
     * @access public
     */
    public function i18n() {
        load_plugin_textdomain('oxi-flip-box-plugin');
    }

    // Elements
    public function register_hooks() {

        // Script Load
         add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        // Elements
        add_action('elementor/elements/categories_registered', array($this, 'register_widget_categories'));
        add_action('elementor/widgets/widgets_registered', array($this, 'register_elements'));
        if (is_admin()):
            add_action('admin_menu', [$this, 'Admin_Menu']);
        endif;
    }

    public function Admin_menu() {
        $user_role = get_option('oxi_addons_user_permission');
        $role_object = get_role($user_role);
        $first_key = '';
        if (isset($role_object->capabilities) && is_array($role_object->capabilities)) {
            reset($role_object->capabilities);
            $first_key = key($role_object->capabilities);
        } else {
            $first_key = 'manage_options';
        }
        add_submenu_page('oxi-flip-box-ultimate', 'Elementor Extension', 'Elementor Extension', $first_key, 'oxi-flip-box-el-extension', [$this, 'Elementor_Extension']);
    }

    public function Elementor_Extension() {
        new \OXI_FLIP_BOX_UPLOAD_PATH\Elementor\Core\Admin;
    }

    /**
     * Initialize the plugin
     *
     * Validates that Elementor is already loaded.
     * Checks for basic plugin requirements, if one check fail don't continue,
     * if all check have passed include the plugin class.
     *
     * Fired by `plugins_loaded` action hook.
     *
     * @since 1.0.0
     * @access public
     */
    public function init() {

        // Check if Elementor installed and activated
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', array($this, 'admin_notice_missing_main_plugin'));
            return;
        }

        // Check for required Elementor version
        if (!version_compare(ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=')) {
            add_action('admin_notices', array($this, 'admin_notice_minimum_elementor_version'));
            return;
        }

        // Check for required PHP version
        if (version_compare(PHP_VERSION, self::MINIMUM_PHP_VERSION, '<')) {
            add_action('admin_notices', array($this, 'admin_notice_minimum_php_version'));
            return;
        }
        $this->register_hooks();
    }

    public function admin_notice_missing_main_plugin() {
        $screen = get_current_screen();
        if (isset($screen->parent_file) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id) {
            return;
        }
        $plugin = 'elementor';
        $file_path = 'elementor/elementor.php';
        $installed_plugins = get_plugins();

        if (isset($installed_plugins[$file_path])) { // check if plugin is installed
            if (!current_user_can('activate_plugins')) {
                return;
            }
            $activation_url = wp_nonce_url(admin_url('plugins.php?action=activate&plugin=' . $file_path), 'activate-plugin_' . $file_path);

            $message = '<p><strong>' . __('Flipbox Elementor Extension', OXI_FLIP_BOX_TEXTDOMAIN) . '</strong>' . __(' widgets not working because you need to activate the Elementor plugin.', OXI_FLIP_BOX_TEXTDOMAIN) . '</p>';
            $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $activation_url, __('Activate Elementor Now', OXI_FLIP_BOX_TEXTDOMAIN)) . '</p>';
        } else {
            if (!current_user_can('install_plugins')) {
                return;
            }
            $install_url = wp_nonce_url(add_query_arg(array('action' => 'install-plugin', 'plugin' => $plugin), admin_url('update.php')), 'install-plugin' . '_' . $plugin);
            $message = '<p><strong>' . __('Flipbox Elementor Extension', OXI_FLIP_BOX_TEXTDOMAIN) . '</strong>' . __(' widgets not working because you need to install the Elementor plugin', OXI_FLIP_BOX_TEXTDOMAIN) . '</p>';
            $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $install_url, __('Install Elementor Now', OXI_FLIP_BOX_TEXTDOMAIN)) . '</p>';
        }

        echo '<div class="error"><p>' . $message . '</p></div>';
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required Elementor version.
     *
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_minimum_elementor_version() {
        if (!current_user_can('update_plugins')) {
            return;
        }

        $file_path = 'elementor/elementor.php';

        $upgrade_link = wp_nonce_url(self_admin_url('update.php?action=upgrade-plugin&plugin=') . $file_path, 'upgrade-plugin_' . $file_path);
        $message = '<p><strong>' . __('Flipbox Elementor Extension', OXI_FLIP_BOX_TEXTDOMAIN) . '</strong>' . __(' widgets not working because you are using an old version of Elementor.', OXI_FLIP_BOX_TEXTDOMAIN) . '</p>';
        $message .= '<p>' . sprintf('<a href="%s" class="button-primary">%s</a>', $upgrade_link, __('Update Elementor Now', OXI_FLIP_BOX_TEXTDOMAIN)) . '</p>';
        echo '<div class="error">' . $message . '</div>';
    }

    /**
     * Admin notice
     *
     * Warning when the site doesn't have a minimum required PHP version.
     *
     * @since 1.0.0
     * @access public
     */
    public function admin_notice_minimum_php_version() {
        if (isset($_GET['activate'])) {
            unset($_GET['activate']);
        }

        $message = sprintf(
                esc_html__('"%1$s" requires "%2$s" version %3$s or greater.', OXI_FLIP_BOX_TEXTDOMAIN),
                '<strong>' . esc_html__('Flipbox Elementor Extension', OXI_FLIP_BOX_TEXTDOMAIN) . '</strong>',
                '<strong>' . esc_html__('PHP', OXI_FLIP_BOX_TEXTDOMAIN) . '</strong>',
                self::MINIMUM_PHP_VERSION
        );

        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

}
