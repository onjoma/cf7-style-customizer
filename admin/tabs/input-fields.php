<!-- Input Fields Tab -->
<div class="cf7sc-tab-pane" id="input-fields">
    <h2><?php _e('Input Fields Settings', 'cf7-style-customizer'); ?></h2>
    
    <table class="form-table">
        <tr>
            <th scope="row"><label><?php _e('Input Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_width]" value="<?php echo esc_attr($settings['input_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 100%, 300px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Input Height', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_height]" value="<?php echo esc_attr($settings['input_height']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 45px, 50px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Input Padding', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_padding]" value="<?php echo esc_attr($settings['input_padding']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 10px 15px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Input Margin', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_margin]" value="<?php echo esc_attr($settings['input_margin']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 0 0 15px 0', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Font Size', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_font_size]" value="<?php echo esc_attr($settings['input_font_size']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 16px, 14px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Font Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_font_color]" value="<?php echo esc_attr($settings['input_font_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Background Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_bg_color]" value="<?php echo esc_attr($settings['input_bg_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_border_width]" value="<?php echo esc_attr($settings['input_border_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 1px, 2px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_border_color]" value="<?php echo esc_attr($settings['input_border_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Radius', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_border_radius]" value="<?php echo esc_attr($settings['input_border_radius']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 4px, 8px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Focus Border Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_focus_border_color]" value="<?php echo esc_attr($settings['input_focus_border_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Focus Background Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_focus_bg_color]" value="<?php echo esc_attr($settings['input_focus_bg_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Focus Shadow', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[input_focus_shadow]" value="<?php echo esc_attr($settings['input_focus_shadow']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 0 0 5px rgba(76, 175, 80, 0.3)', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Textarea Height', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[textarea_height]" value="<?php echo esc_attr($settings['textarea_height']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 120px, 150px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Textarea Resize', 'cf7-style-customizer'); ?></label></th>
            <td>
                <select name="cf7sc_settings[textarea_resize]">
                    <option value="none" <?php selected($settings['textarea_resize'], 'none'); ?>><?php _e('None', 'cf7-style-customizer'); ?></option>
                    <option value="vertical" <?php selected($settings['textarea_resize'], 'vertical'); ?>><?php _e('Vertical', 'cf7-style-customizer'); ?></option>
                    <option value="horizontal" <?php selected($settings['textarea_resize'], 'horizontal'); ?>><?php _e('Horizontal', 'cf7-style-customizer'); ?></option>
                    <option value="both" <?php selected($settings['textarea_resize'], 'both'); ?>><?php _e('Both', 'cf7-style-customizer'); ?></option>
                </select>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Placeholder Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[placeholder_color]" value="<?php echo esc_attr($settings['placeholder_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
    </table>
</div>
