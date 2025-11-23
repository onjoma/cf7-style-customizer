<?php
/**
 * Settings Handler Class
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class CF7SC_Settings {
    
    /**
     * Get default settings
     */
    public static function get_defaults() {
        return array(
            // Form Container
            'form_width' => '100%',
            'form_max_width' => '600px',
            'form_padding' => '20px',
            'form_margin' => '0 auto',
            'form_bg_color' => '#ffffff',
            'form_border_width' => '1px',
            'form_border_color' => '#e0e0e0',
            'form_border_radius' => '8px',
            
            // Input Fields
            'input_width' => '100%',
            'input_height' => '45px',
            'input_padding' => '10px 15px',
            'input_margin' => '0 0 15px 0',
            'input_font_size' => '16px',
            'input_font_color' => '#333333',
            'input_bg_color' => '#ffffff',
            'input_border_width' => '1px',
            'input_border_color' => '#cccccc',
            'input_border_radius' => '4px',
            'input_focus_border_color' => '#4CAF50',
            'input_focus_bg_color' => '#ffffff',
            'input_focus_shadow' => '0 0 5px rgba(76, 175, 80, 0.3)',
            
            // Textarea
            'textarea_height' => '120px',
            'textarea_resize' => 'vertical',
            
            // Labels
            'label_font_size' => '14px',
            'label_font_weight' => '600',
            'label_color' => '#333333',
            'label_margin' => '0 0 8px 0',
            
            // Buttons
            'button_width' => 'auto',
            'button_height' => '45px',
            'button_padding' => '12px 30px',
            'button_margin' => '10px 0 0 0',
            'button_font_size' => '16px',
            'button_font_weight' => '600',
            'button_font_color' => '#ffffff',
            'button_bg_color' => '#4CAF50',
            'button_border_width' => '0',
            'button_border_color' => '#4CAF50',
            'button_border_radius' => '4px',
            'button_hover_bg_color' => '#45a049',
            'button_hover_font_color' => '#ffffff',
            'button_hover_border_color' => '#45a049',
            'button_transition' => 'all 0.3s ease',
            
            // Messages
            'error_color' => '#f44336',
            'success_color' => '#4CAF50',
            'placeholder_color' => '#999999',
        );
    }
    
    /**
     * Get settings
     */
    public static function get_settings() {
        $defaults = self::get_defaults();
        $saved_settings = get_option('cf7sc_settings', array());
        
        return wp_parse_args($saved_settings, $defaults);
    }
    
    /**
     * Get setting value
     */
    public static function get_setting($key) {
        $settings = self::get_settings();
        return isset($settings[$key]) ? $settings[$key] : '';
    }
}
