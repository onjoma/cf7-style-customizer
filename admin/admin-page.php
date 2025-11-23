<?php
/**
 * Admin Page Template
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

$settings = CF7SC_Settings::get_settings();
?>

<div class="wrap cf7sc-admin-wrap">
    <h1><?php _e('CF7 Style Customizer', 'cf7-style-customizer'); ?></h1>
    <p class="description"><?php _e('Customize the appearance of your Contact Form 7 forms with ease.', 'cf7-style-customizer'); ?></p>
    
    <form method="post" action="options.php" class="cf7sc-form">
        <?php settings_fields('cf7sc_settings_group'); ?>
        
        <div class="cf7sc-tabs">
            <div class="cf7sc-tab-nav">
                <button type="button" class="cf7sc-tab-button active" data-tab="form-container">
                    <span class="dashicons dashicons-admin-page"></span>
                    <?php _e('Form Container', 'cf7-style-customizer'); ?>
                </button>
                <button type="button" class="cf7sc-tab-button" data-tab="input-fields">
                    <span class="dashicons dashicons-edit"></span>
                    <?php _e('Input Fields', 'cf7-style-customizer'); ?>
                </button>
                <button type="button" class="cf7sc-tab-button" data-tab="labels">
                    <span class="dashicons dashicons-tag"></span>
                    <?php _e('Labels', 'cf7-style-customizer'); ?>
                </button>
                <button type="button" class="cf7sc-tab-button" data-tab="buttons">
                    <span class="dashicons dashicons-button"></span>
                    <?php _e('Buttons', 'cf7-style-customizer'); ?>
                </button>
                <button type="button" class="cf7sc-tab-button" data-tab="messages">
                    <span class="dashicons dashicons-warning"></span>
                    <?php _e('Messages', 'cf7-style-customizer'); ?>
                </button>
            </div>
            
            <div class="cf7sc-tab-content">
                <?php include CF7SC_PLUGIN_DIR . 'admin/tabs/form-container.php'; ?>
                <?php include CF7SC_PLUGIN_DIR . 'admin/tabs/input-fields.php'; ?>
                <?php include CF7SC_PLUGIN_DIR . 'admin/tabs/labels.php'; ?>
                <?php include CF7SC_PLUGIN_DIR . 'admin/tabs/buttons.php'; ?>
                <?php include CF7SC_PLUGIN_DIR . 'admin/tabs/messages.php'; ?>
            </div>
        </div>
        
        <div class="cf7sc-submit-wrapper">
            <?php submit_button(__('Save Settings', 'cf7-style-customizer'), 'primary', 'submit', false); ?>
            <button type="button" class="button button-secondary cf7sc-reset-button"><?php _e('Reset to Defaults', 'cf7-style-customizer'); ?></button>
        </div>
    </form>
</div>
