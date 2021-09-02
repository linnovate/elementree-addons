<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;

class Widget_account_button extends AbstractWidget
{
    public function get_name()
    {
        return 'AccountButton';
    }

    public function get_title()
    {
        return __('AccountButton', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-button';
    }

    protected function _register_controls()
    {
        /* ================================== General =================================== */
                
        $this->start_controls_section('general', array(
            'label' => __('General', 'elementree-addons'),
        ));

        $this->add_control('btnText', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Text:', 'elementree-addons'),
            'default' => __('Become an expert', 'elementree-addons'),
        ));

        $this->end_controls_section();

    }

}
