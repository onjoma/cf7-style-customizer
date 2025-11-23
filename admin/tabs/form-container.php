<!-- Form Container Tab -->
<div class="cf7sc-tab-pane active" id="form-container">
    <h2><?php _e('Form Container Settings', 'cf7-style-customizer'); ?></h2>
    
    <table class="form-table">
        <tr>
            <th scope="row"><label><?php _e('Form Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_width]" value="<?php echo esc_attr($settings['form_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 100%, 600px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Form Max Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_max_width]" value="<?php echo esc_attr($settings['form_max_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 600px, 100%', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Form Padding', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_padding]" value="<?php echo esc_attr($settings['form_padding']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 20px, 10px 20px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Form Margin', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_margin]" value="<?php echo esc_attr($settings['form_margin']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 0 auto, 20px 0', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Background Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_bg_color]" value="<?php echo esc_attr($settings['form_bg_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_border_width]" value="<?php echo esc_attr($settings['form_border_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 1px, 2px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_border_color]" value="<?php echo esc_attr($settings['form_border_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Radius', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[form_border_radius]" value="<?php echo esc_attr($settings['form_border_radius']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 8px, 0px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
    </table>
</div>
