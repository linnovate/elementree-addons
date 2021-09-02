<?php
namespace ElementreeAddons;

use \Elementor\Widget_Base;

abstract class AbstractWidget extends Widget_Base
{

    public function get_categories() {
        return array('elementree-addons');
    }

    public function get_icon()
    {
        // Elementor icon class ( https://pojome.github.io/elementor-icons/ ) or
        // Font Awesome icon class ( https://fontawesome.com/ )
        return 'eicon-search';
    }

    public function get_script_depends() { 
        return [ 'client-render', 'elementree-addons' ]; 
    }

    /**
     * Adds different input fields to allow the user to change and customize the
     * widget settings.
     */
    protected function _register_controls() {

    }

    /**
     * Render the widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     */
      protected function render() {

        $widget_name = $this->get_name();
        $settings = $this->get_data();

        if ($settings) {
            $settings = $settings['settings'];
        }

        echo \Elementree\Plugin::$instance->get_markup($widget_name, $settings);

      }
  
}