/**
 * CF7 Style Customizer - Admin JavaScript
 */

(function($) {
    'use strict';
    
    $(document).ready(function() {
        
        // Initialize Color Pickers
        initColorPickers();
        
        // Initialize Tabs
        initTabs();
        
        // Reset Button
        initResetButton();
        
    });
    
    /**
     * Initialize Color Pickers
     */
    function initColorPickers() {
        $('.cf7sc-color-picker').wpColorPicker({
            change: function(event, ui) {
                // Optional: Add live preview functionality here
            },
            clear: function() {
                // Optional: Handle clear action
            }
        });
    }
    
    /**
     * Initialize Tabs
     */
    function initTabs() {
        // Tab button click
        $('.cf7sc-tab-button').on('click', function(e) {
            e.preventDefault();
            
            var targetTab = $(this).data('tab');
            
            // Remove active class from all buttons and panes
            $('.cf7sc-tab-button').removeClass('active');
            $('.cf7sc-tab-pane').removeClass('active');
            
            // Add active class to clicked button and corresponding pane
            $(this).addClass('active');
            $('#' + targetTab).addClass('active');
            
            // Save active tab to localStorage
            localStorage.setItem('cf7sc_active_tab', targetTab);
        });
        
        // Restore last active tab from localStorage
        var lastActiveTab = localStorage.getItem('cf7sc_active_tab');
        if (lastActiveTab) {
            $('.cf7sc-tab-button[data-tab="' + lastActiveTab + '"]').trigger('click');
        }
    }
    
    /**
     * Initialize Reset Button
     */
    function initResetButton() {
        $('.cf7sc-reset-button').on('click', function(e) {
            e.preventDefault();
            
            if (!confirm('Are you sure you want to reset all settings to default values? This action cannot be undone.')) {
                return;
            }
            
            // Show loading state
            var $button = $(this);
            var originalText = $button.text();
            $button.text('Resetting...').prop('disabled', true);
            
            // Send AJAX request to reset settings
            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'cf7sc_reset_settings',
                    nonce: cf7scAdmin.nonce
                },
                success: function(response) {
                    if (response.success) {
                        // Reload the page to show default values
                        location.reload();
                    } else {
                        alert('Error: ' + response.data.message);
                        $button.text(originalText).prop('disabled', false);
                    }
                },
                error: function() {
                    alert('An error occurred while resetting settings.');
                    $button.text(originalText).prop('disabled', false);
                }
            });
        });
    }
    
    /**
     * Form Validation (Optional)
     */
    $('.cf7sc-form').on('submit', function(e) {
        // Add any custom validation here if needed
        return true;
    });
    
    /**
     * Live Preview (Optional Enhancement)
     * This could be expanded to show a live preview of the form styles
     */
    function initLivePreview() {
        // Monitor input changes
        $('.cf7sc-form input, .cf7sc-form select').on('change input', function() {
            // Debounce the preview update
            clearTimeout(window.cf7scPreviewTimeout);
            window.cf7scPreviewTimeout = setTimeout(function() {
                updatePreview();
            }, 500);
        });
    }
    
    function updatePreview() {
        // This function could generate a live preview
        // For now, it's a placeholder for future enhancement
    }
    
})(jQuery);
