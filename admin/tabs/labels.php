<!-- Labels Tab -->
<div class="cf7sc-tab-pane" id="labels">
    <h2><?php _e('Label Settings', 'cf7-style-customizer'); ?></h2>
    
    <table class="form-table">
        <tr>
            <th scope="row"><label><?php _e('Font Size', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[label_font_size]" value="<?php echo esc_attr($settings['label_font_size']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 14px, 16px', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Font Weight', 'cf7-style-customizer'); ?></label></th>
            <td>
                <select name="cf7sc_settings[label_font_weight]">
                    <option value="300" <?php selected($settings['label_font_weight'], '300'); ?>><?php _e('Light (300)', 'cf7-style-customizer'); ?></option>
                    <option value="400" <?php selected($settings['label_font_weight'], '400'); ?>><?php _e('Normal (400)', 'cf7-style-customizer'); ?></option>
                    <option value="500" <?php selected($settings['label_font_weight'], '500'); ?>><?php _e('Medium (500)', 'cf7-style-customizer'); ?></option>
                    <option value="600" <?php selected($settings['label_font_weight'], '600'); ?>><?php _e('Semi-Bold (600)', 'cf7-style-customizer'); ?></option>
                    <option value="700" <?php selected($settings['label_font_weight'], '700'); ?>><?php _e('Bold (700)', 'cf7-style-customizer'); ?></option>
                </select>
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Color', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[label_color]" value="<?php echo esc_attr($settings['label_color']); ?>" class="cf7sc-color-picker" />
            </td>
        </tr>
        
        <tr>
            <th scope="row"><label><?php _e('Margin', 'cf7-style-customizer'); ?></label></th>
            <td>
                <input type="text" name="cf7sc_settings[label_margin]" value="<?php echo esc_attr($settings['label_margin']); ?>" class="regular-text" />
                <p class="description"><?php _e('e.g., 0 0 8px 0', 'cf7-style-customizer'); ?></p>
            </td>
        </tr>
    </table>
</div>
