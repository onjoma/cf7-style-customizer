<?php
/**
 * Plugin Name: CF7 Style Customizer
 * Plugin URI: https://example.com/cf7-style-customizer
 * Description: A comprehensive styling plugin for Contact Form 7 with an intuitive backend interface to customize fields, buttons, backgrounds, borders, and more.
 * Version: 1.0.0
 * Author: LindaWP
 * Author URI: https://lindawp.com.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: cf7-style-customizer
 * Domain Path: /languages
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('CF7SC_VERSION', '1.0.0');
define('CF7SC_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CF7SC_PLUGIN_URL', plugin_dir_url(__FILE__));
define('CF7SC_PLUGIN_BASENAME', plugin_basename(__FILE__));

/**
 * Main Plugin Class
 */
class CF7_Style_Customizer {
    
    /**
     * Instance of this class
     */
    private static $instance = null;
    
    /**
     * Get instance
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    private function __construct() {
        $this->init_hooks();
        $this->load_dependencies();
    }
    
    /**
     * Initialize hooks
     */
    private function init_hooks() {
        add_action('plugins_loaded', array($this, 'check_cf7_active'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_assets'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_frontend_styles'));
        add_action('admin_notices', array($this, 'admin_notices'));
        add_action('wp_ajax_cf7sc_reset_settings', array($this, 'ajax_reset_settings'));
    }
    
    /**
     * Load dependencies
     */
    private function load_dependencies() {
        require_once CF7SC_PLUGIN_DIR . 'includes/class-cf7sc-settings.php';
        require_once CF7SC_PLUGIN_DIR . 'includes/class-cf7sc-css-generator.php';
    }
    
    /**
     * Check if Contact Form 7 is active
     */
    public function check_cf7_active() {
        if (!class_exists('WPCF7')) {
            add_action('admin_notices', array($this, 'cf7_missing_notice'));
            deactivate_plugins(CF7SC_PLUGIN_BASENAME);
        }
    }
    
    /**
     * CF7 missing notice
     */
    public function cf7_missing_notice() {
        ?>
        <div class="notice notice-error">
            <p><?php _e('CF7 Style Customizer requires Contact Form 7 to be installed and activated.', 'cf7-style-customizer'); ?></p>
        </div>
        <?php
    }
    
    /**
     * Admin notices
     */
    public function admin_notices() {
        if (isset($_GET['settings-updated']) && $_GET['page'] === 'cf7-style-customizer') {
            ?>
            <div class="notice notice-success is-dismissible">
                <p><?php _e('Settings saved successfully!', 'cf7-style-customizer'); ?></p>
            </div>
            <?php
        }
    }
    
    /**
     * Add admin menu
     */
    public function add_admin_menu() {
        add_menu_page(
            __('CF7 Style Customizer', 'cf7-style-customizer'),
            __('CF7 Styles', 'cf7-style-customizer'),
            'manage_options',
            'cf7-style-customizer',
            array($this, 'render_admin_page'),
            'dashicons-art',
            58
        );
    }
    
    /**
     * Register settings
     */
    public function register_settings() {
        register_setting('cf7sc_settings_group', 'cf7sc_settings', array($this, 'sanitize_settings'));
    }
    
    /**
     * Sanitize settings
     */
    public function sanitize_settings($input) {
        $sanitized = array();
        
        // Sanitize all text inputs
        $text_fields = array(
            'form_width', 'form_max_width', 'form_padding', 'form_margin',
            'form_bg_color', 'form_border_width', 'form_border_color', 'form_border_radius',
            'input_width', 'input_height', 'input_padding', 'input_margin',
            'input_font_size', 'input_font_color', 'input_bg_color',
            'input_border_width', 'input_border_color', 'input_border_radius',
            'input_focus_border_color', 'input_focus_bg_color', 'input_focus_shadow',
            'textarea_height', 'textarea_resize',
            'label_font_size', 'label_font_weight', 'label_color', 'label_margin',
            'button_width', 'button_height', 'button_padding', 'button_margin',
            'button_font_size', 'button_font_weight', 'button_font_color',
            'button_bg_color', 'button_border_width', 'button_border_color',
            'button_border_radius', 'button_hover_bg_color', 'button_hover_font_color',
            'button_hover_border_color', 'button_transition',
            'error_color', 'success_color', 'placeholder_color'
        );
        
        foreach ($text_fields as $field) {
            if (isset($input[$field])) {
                $sanitized[$field] = sanitize_text_field($input[$field]);
            }
        }
        
        return $sanitized;
    }
    
    /**
     * Render admin page
     */
    public function render_admin_page() {
        if (!current_user_can('manage_options')) {
            return;
        }
        
        include CF7SC_PLUGIN_DIR . 'admin/admin-page.php';
    }
    
    /**
     * Enqueue admin assets
     */
    public function enqueue_admin_assets($hook) {
        if ($hook !== 'toplevel_page_cf7-style-customizer') {
            return;
        }
        
        // WordPress color picker
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        
        // Admin CSS
        wp_enqueue_style(
            'cf7sc-admin-css',
            CF7SC_PLUGIN_URL . 'admin/css/admin-style.css',
            array(),
            CF7SC_VERSION
        );
        
        // Admin JS
        wp_enqueue_script(
            'cf7sc-admin-js',
            CF7SC_PLUGIN_URL . 'admin/js/admin-script.js',
            array('jquery', 'wp-color-picker'),
            CF7SC_VERSION,
            true
        );
        
        // Localize script
        wp_localize_script('cf7sc-admin-js', 'cf7scAdmin', array(
            'nonce' => wp_create_nonce('cf7sc_reset_nonce'),
            'ajaxurl' => admin_url('admin-ajax.php')
        ));
    }
    
    /**
     * Enqueue frontend styles
     */
    public function enqueue_frontend_styles() {
        if (!class_exists('WPCF7')) {
            return;
        }
        
        $css_generator = new CF7SC_CSS_Generator();
        $custom_css = $css_generator->generate_css();
        
        if (!empty($custom_css)) {
            wp_register_style('cf7sc-custom-styles', false);
            wp_enqueue_style('cf7sc-custom-styles');
            wp_add_inline_style('cf7sc-custom-styles', $custom_css);
        }
    }
    
    /**
     * AJAX handler to reset settings
     */
    public function ajax_reset_settings() {
        // Check nonce
        if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'cf7sc_reset_nonce')) {
            wp_send_json_error(array('message' => 'Invalid nonce'));
        }
        
        // Check user capabilities
        if (!current_user_can('manage_options')) {
            wp_send_json_error(array('message' => 'Insufficient permissions'));
        }
        
        // Delete the settings option
        delete_option('cf7sc_settings');
        
        wp_send_json_success(array('message' => 'Settings reset successfully'));
    }
}

/**
 * Initialize the plugin
 */
function cf7sc_init() {
    return CF7_Style_Customizer::get_instance();
}

// Start the plugin
cf7sc_init();
