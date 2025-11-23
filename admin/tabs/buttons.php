<!-- Buttons Tab -->
<div class="cf7sc-tab-pane" id="buttons">
    <h2><?php _e('Button Settings', 'cf7-style-customizer'); ?></h2>
    
    <table class="form-table">
        <tr>
            <th scope="row"><label><?php _e('Button Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_width]" value="<?php echo esc_attr($settings['button_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., auto, 100%, 200px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Button Height', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_height]" value="<?php echo esc_attr($settings['button_height']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 45px, 50px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Button Padding', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_padding]" value="<?php echo esc_attr($settings['button_padding']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 12px 30px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Button Margin', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_margin]" value="<?php echo esc_attr($settings['button_margin']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 10px 0 0 0', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Font Size', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_font_size]" value="<?php echo esc_attr($settings['button_font_size']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 16px, 18px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Font Weight', 'cf7-style-customizer'); ?></label></th>
            <td>
                <select name="cf7sc_settings[button_font_weight]">
                    <option value="400" <?php selected($settings['button_font_weight'], '400'); ?>><?php _e('Normal (400)', 'cf7-style-customizer'); ?></option>
                    <option value="500" <?php selected($settings['button_font_weight'], '500'); ?>><?php _e('Medium (500)', 'cf7-style-customizer'); ?></option>
                    <option value="600" <?php selected($settings['button_font_weight'], '600'); ?>><?php _e('Semi-Bold (600)', 'cf7-style-customizer'); ?></option>
                    <option value="700" <?php selected($settings['button_font_weight'], '700'); ?>><?php _e('Bold (700)', 'cf7-style-customizer'); ?></option>
                </select>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Font Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_font_color]" value="<?php echo esc_attr($settings['button_font_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Background Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_bg_color]" value="<?php echo esc_attr($settings['button_bg_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Width', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_border_width]" value="<?php echo esc_attr($settings['button_border_width']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 0, 1px, 2px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_border_color]" value="<?php echo esc_attr($settings['button_border_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Border Radius', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_border_radius]" value="<?php echo esc_attr($settings['button_border_radius']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 4px, 25px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Hover Background Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_hover_bg_color]" value="<?php echo esc_attr($settings['button_hover_bg_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Hover Font Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_hover_font_color]" value="<?php echo esc_attr($settings['button_hover_font_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Hover Border Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_hover_border_color]" value="<?php echo esc_attr($settings['button_hover_border_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Transition', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[button_transition]" value="<?php echo esc_attr($settings['button_transition']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., all 0.3s ease', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
    </table>
</div>
