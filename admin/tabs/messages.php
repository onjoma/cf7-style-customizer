<!-- Messages Tab -->
<div class="cf7sc-tab-pane" id="messages">
    <h2><?php _e('Message Settings', 'cf7-style-customizer'); ?></h2>
    
    <table class="form-table">
        <tr>
            <th scope="row"><label><?php _e('Error Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[error_color]" value="<?php echo esc_attr($settings['error_color']); ?>" class="cf7sc-color-picker" />
                <p class="description"><?php _e('Color for error messages and validation errors', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Success Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[success_color]" value="<?php echo esc_attr($settings['success_color']); ?>" class="cf7sc-color-picker" />
                <p class="description"><?php _e('Color for success messages', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
    </table>
</div>
