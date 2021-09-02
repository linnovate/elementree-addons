<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;

class Widget_elementor_search extends AbstractWidget
{
    public function get_name()
    {
        return 'ElementorSearch';
    }

    public function get_title()
    {
        return __('ElementorSearch', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    protected function _register_controls()
    {
        $this->start_controls_section('props', array(
            'label' => __('Props', 'elementree-addons'),
        ));

       

        $this->add_control('placeholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('input placeholder:', 'elementree-addons'),
            'default' => __('search', 'elementree-addons'),
        ));

        $this->add_control('btn', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('text of submit btn:', 'elementree-addons'),
            'default' => __('search', 'elementree-addons'),
        ));

      
        $this->end_controls_section();

    }

}
