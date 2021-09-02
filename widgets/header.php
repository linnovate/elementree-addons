<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;

class Widget_header extends AbstractWidget
{
    public function get_name()
    {
        return 'Header';
    }

    public function get_title()
    {
        return __('Header', 'elementree-addons');
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

       

        $this->add_control('changeBgColor', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('changeBgColor?:', 'elementree-addons'),
            'description' => __('Dou you want to change the bg color when scroll to top ?', 'elementree-addons'),
            'default' => __('false', 'elementree-addons'),
        ));

        $this->add_control('showCloseButton', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('showCloseButton?:', 'elementree-addons'),
            'description' => __('Do you want to cancel onBoarding ?', 'elementree-addons'),
            'default' => __('false', 'elementree-addons'),
        ));

        $this->end_controls_section();

    }

}
