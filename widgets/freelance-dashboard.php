<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;

class Widget_freelance_dashboard extends AbstractWidget
{
    public function get_name()
    {
        return 'FreelanceDashboard';
    }

    public function get_title()
    {
        return __('Freelance Dashboard', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-laptop';
    }

    protected function _register_controls()
    {
       /* $this->start_controls_section('section_parameters', array(
            'label'       => __('Parameters', 'elementree-addons')
        ));

       
        $this->add_control('btn_label', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button Label:', 'elementree-addons'),
            'description' => __('The label on the search submit button.', 'elementree-addons'),
            'placeholder' => __( 'Search', 'elementree-addons' ),
        ));

        $this->add_control('placeholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Placeholder:', 'elementree-addons'),
            'description' => __('The placeholder inside search input field.', 'elementree-addons'),
            
        ));

        $this->add_control('action_path', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Action Path:', 'elementree-addons'),
            'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => false,
				],
            
        ));
        $this->end_controls_section();  */
    }
}
