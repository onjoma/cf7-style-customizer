<?php
/**
 * CSS Generator Class
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class CF7SC_CSS_Generator {
    
    /**
     * Generate CSS
     */
    public function generate_css() {
        $settings = CF7SC_Settings::get_settings();
        
        $css = "/* CF7 Style Customizer - Custom Styles */\n\n";
        
        // Form Container Styles
        $css .= ".wpcf7 {\n";
        $css .= "    width: {$settings['form_width']} !important;\n";
        $css .= "    max-width: {$settings['form_max_width']} !important;\n";
        $css .= "    padding: {$settings['form_padding']} !important;\n";
        $css .= "    margin: {$settings['form_margin']} !important;\n";
        $css .= "    background-color: {$settings['form_bg_color']} !important;\n";
        $css .= "    border: {$settings['form_border_width']} solid {$settings['form_border_color']} !important;\n";
        $css .= "    border-radius: {$settings['form_border_radius']} !important;\n";
        $css .= "    box-sizing: border-box !important;\n";
        $css .= "}\n\n";
        
        // Input Fields Styles
        $css .= ".wpcf7 input[type='text'],\n";
        $css .= ".wpcf7 input[type='email'],\n";
        $css .= ".wpcf7 input[type='url'],\n";
        $css .= ".wpcf7 input[type='tel'],\n";
        $css .= ".wpcf7 input[type='number'],\n";
        $css .= ".wpcf7 input[type='date'],\n";
        $css .= ".wpcf7 select {\n";
        $css .= "    width: {$settings['input_width']} !important;\n";
        $css .= "    height: {$settings['input_height']} !important;\n";
        $css .= "    padding: {$settings['input_padding']} !important;\n";
        $css .= "    margin: {$settings['input_margin']} !important;\n";
        $css .= "    font-size: {$settings['input_font_size']} !important;\n";
        $css .= "    color: {$settings['input_font_color']} !important;\n";
        $css .= "    background-color: {$settings['input_bg_color']} !important;\n";
        $css .= "    border: {$settings['input_border_width']} solid {$settings['input_border_color']} !important;\n";
        $css .= "    border-radius: {$settings['input_border_radius']} !important;\n";
        $css .= "    box-sizing: border-box !important;\n";
        $css .= "    transition: all 0.3s ease !important;\n";
        $css .= "}\n\n";
        
        // Input Focus Styles
        $css .= ".wpcf7 input[type='text']:focus,\n";
        $css .= ".wpcf7 input[type='email']:focus,\n";
        $css .= ".wpcf7 input[type='url']:focus,\n";
        $css .= ".wpcf7 input[type='tel']:focus,\n";
        $css .= ".wpcf7 input[type='number']:focus,\n";
        $css .= ".wpcf7 input[type='date']:focus,\n";
        $css .= ".wpcf7 select:focus,\n";
        $css .= ".wpcf7 textarea:focus {\n";
        $css .= "    border-color: {$settings['input_focus_border_color']} !important;\n";
        $css .= "    background-color: {$settings['input_focus_bg_color']} !important;\n";
        $css .= "    box-shadow: {$settings['input_focus_shadow']} !important;\n";
        $css .= "    outline: none !important;\n";
        $css .= "}\n\n";
        
        // Textarea Styles
        $css .= ".wpcf7 textarea {\n";
        $css .= "    width: {$settings['input_width']} !important;\n";
        $css .= "    min-height: {$settings['textarea_height']} !important;\n";
        $css .= "    padding: {$settings['input_padding']} !important;\n";
        $css .= "    margin: {$settings['input_margin']} !important;\n";
        $css .= "    font-size: {$settings['input_font_size']} !important;\n";
        $css .= "    color: {$settings['input_font_color']} !important;\n";
        $css .= "    background-color: {$settings['input_bg_color']} !important;\n";
        $css .= "    border: {$settings['input_border_width']} solid {$settings['input_border_color']} !important;\n";
        $css .= "    border-radius: {$settings['input_border_radius']} !important;\n";
        $css .= "    resize: {$settings['textarea_resize']} !important;\n";
        $css .= "    box-sizing: border-box !important;\n";
        $css .= "    transition: all 0.3s ease !important;\n";
        $css .= "}\n\n";
        
        // Label Styles
        $css .= ".wpcf7 label {\n";
        $css .= "    font-size: {$settings['label_font_size']} !important;\n";
        $css .= "    font-weight: {$settings['label_font_weight']} !important;\n";
        $css .= "    color: {$settings['label_color']} !important;\n";
        $css .= "    margin: {$settings['label_margin']} !important;\n";
        $css .= "    display: block !important;\n";
        $css .= "}\n\n";
        
        // Button Styles
        $css .= ".wpcf7 input[type='submit'],\n";
        $css .= ".wpcf7 button[type='submit'] {\n";
        $css .= "    width: {$settings['button_width']} !important;\n";
        $css .= "    height: {$settings['button_height']} !important;\n";
        $css .= "    padding: {$settings['button_padding']} !important;\n";
        $css .= "    margin: {$settings['button_margin']} !important;\n";
        $css .= "    font-size: {$settings['button_font_size']} !important;\n";
        $css .= "    font-weight: {$settings['button_font_weight']} !important;\n";
        $css .= "    color: {$settings['button_font_color']} !important;\n";
        $css .= "    background-color: {$settings['button_bg_color']} !important;\n";
        $css .= "    border: {$settings['button_border_width']} solid {$settings['button_border_color']} !important;\n";
        $css .= "    border-radius: {$settings['button_border_radius']} !important;\n";
        $css .= "    cursor: pointer !important;\n";
        $css .= "    transition: {$settings['button_transition']} !important;\n";
        $css .= "    box-sizing: border-box !important;\n";
        $css .= "}\n\n";
        
        // Button Hover Styles
        $css .= ".wpcf7 input[type='submit']:hover,\n";
        $css .= ".wpcf7 button[type='submit']:hover {\n";
        $css .= "    background-color: {$settings['button_hover_bg_color']} !important;\n";
        $css .= "    color: {$settings['button_hover_font_color']} !important;\n";
        $css .= "    border-color: {$settings['button_hover_border_color']} !important;\n";
        $css .= "}\n\n";
        
        // Placeholder Styles
        $css .= ".wpcf7 input::placeholder,\n";
        $css .= ".wpcf7 textarea::placeholder {\n";
        $css .= "    color: {$settings['placeholder_color']} !important;\n";
        $css .= "    opacity: 1 !important;\n";
        $css .= "}\n\n";
        
        // Error Messages
        $css .= ".wpcf7 .wpcf7-not-valid-tip {\n";
        $css .= "    color: {$settings['error_color']} !important;\n";
        $css .= "    font-size: 13px !important;\n";
        $css .= "    margin-top: 5px !important;\n";
        $css .= "}\n\n";
        
        $css .= ".wpcf7 .wpcf7-validation-errors {\n";
        $css .= "    border: 2px solid {$settings['error_color']} !important;\n";
        $css .= "    background-color: rgba(244, 67, 54, 0.1) !important;\n";
        $css .= "    color: {$settings['error_color']} !important;\n";
        $css .= "    padding: 15px !important;\n";
        $css .= "    margin: 15px 0 !important;\n";
        $css .= "    border-radius: 4px !important;\n";
        $css .= "}\n\n";
        
        // Success Messages
        $css .= ".wpcf7 .wpcf7-mail-sent-ok {\n";
        $css .= "    border: 2px solid {$settings['success_color']} !important;\n";
        $css .= "    background-color: rgba(76, 175, 80, 0.1) !important;\n";
        $css .= "    color: {$settings['success_color']} !important;\n";
        $css .= "    padding: 15px !important;\n";
        $css .= "    margin: 15px 0 !important;\n";
        $css .= "    border-radius: 4px !important;\n";
        $css .= "}\n\n";
        
        // Spinner
        $css .= ".wpcf7 .ajax-loader {\n";
        $css .= "    margin-left: 10px !important;\n";
        $css .= "}\n\n";
        
        // Form Paragraph
        $css .= ".wpcf7 p {\n";
        $css .= "    margin-bottom: 15px !important;\n";
        $css .= "}\n\n";
        
        return $css;
    }
}
