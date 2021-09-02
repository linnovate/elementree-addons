<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;

class Widget_footer extends AbstractWidget
{
    public function get_name()
    {
        return 'Footer';
    }

    public function get_title()
    {
        return __('Footer', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    protected function _register_controls()
    {

    }

}
