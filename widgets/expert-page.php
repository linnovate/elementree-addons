<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;

class Widget_expert_page extends AbstractWidget
{
    public function get_name()
    {
        return 'ExpertPage';
    }

    public function get_title()
    {
        return __('Expert page', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-product-categories';
    }


    protected function _register_controls()
    {

        /* ================================== General ================================== */
        
        $this->start_controls_section('general', array(
            'label' => __('General', 'elementree-addons'),
        ));

        $this->add_control('backLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Back label:', 'elementree-addons'),
            'default' => __('Back to search results', 'elementree-addons'),
        ));

        $this->add_control('backRedirect', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Button redirect:', 'elementree-addons'),
//             'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
			'default' => [
				'url' => '/results',
				'is_external' => false,
				'nofollow' => false,
			],
        ));

        $this->add_control('searchPlaceholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Search placeholder:', 'elementree-addons'),
            'default' => __('What do you need help with ?', 'elementree-addons'),
            'description' => __('The placeholder inside search input field.', 'elementree-addons'),
        ));

        $this->add_control('searchRedirect', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Button redirect:', 'elementree-addons'),
            'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
			'default' => [
				'url' => '/results',
				'is_external' => false,
				'nofollow' => false,
			],
        ));

        $this->end_controls_section();


        /* ================================== Sidebar ================================== */
        
        $this->start_controls_section('detail', array(
            'label' => __('Details Labels', 'elementree-addons'),
        ));

        $this->add_control('detailContact', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Contact:', 'elementree-addons'),
            'default' => __('contact me', 'elementree-addons'),
        ));

        $this->add_control('detailContactAgency', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Contact agency:', 'elementree-addons'),
            'default' => __('contact us', 'elementree-addons'),
        ));

        $this->add_control('detailTitleExperties', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Experties:', 'elementree-addons'),
            'default' => __('EXPERTIES', 'elementree-addons'),
        ));

        $this->add_control('detailTitleLocation', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Location:', 'elementree-addons'),
            'default' => __('Location', 'elementree-addons'),
        ));

        $this->add_control('detailTitlePrices', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Prices:', 'elementree-addons'),
            'default' => __('PRICES', 'elementree-addons'),
        ));

        $this->add_control('detailTitleDetails', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Details:', 'elementree-addons'),
            'default' => __('Details', 'elementree-addons'),
        ));

        $this->add_control('detailTitleFindMe', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Find me:', 'elementree-addons'),
            'default' => __('You can find me here', 'elementree-addons'),
        ));

        $this->add_control('detailLanguages', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Languages:', 'elementor-experts'),
            'default' => __('Details', 'elementor-experts'),
        ));

        $this->add_control('detailTeamSize', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Team size:', 'elementor-experts'),
            'default' => __('Details', 'elementor-experts'),
        ));

        $this->add_control('detailTimeZone', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Time zone:', 'elementor-experts'),
            'default' => __('Time zone', 'elementor-experts'),
        ));

        $this->add_control('detailAvgProjectRate', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Avg project rate:', 'elementor-experts'),
            'default' => __('Avg project rate', 'elementor-experts'),
        ));

        $this->add_control('detailHourlyRate', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Hourly rate:', 'elementor-experts'),
            'default' => __('Hourly rate', 'elementor-experts'),
        ));

        $this->add_control('detailPricePproject', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Price project:', 'elementor-experts'),
            'default' => __('Price per project', 'elementor-experts'),
        ));

        $this->end_controls_section();


        /* ================================== Tab - About ================================== */
        
        $this->start_controls_section('aboutTab', array(
            'label' => __('Tab - About', 'elementor-experts'),
        ));


        $this->add_control('aboutTabTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementor-experts'),
            'default' => __('About', 'elementor-experts'),
        ));
    
        $this->end_controls_section();


        /* ================================== Tab - Portfolio ================================== */
        
        $this->start_controls_section('portfolioTab', array(
            'label' => __('Tab - Portfolio', 'elementor-experts'),
        ));


        $this->add_control('portfolioTabTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementor-experts'),
            'default' => __('Portfolio', 'elementor-experts'),
        ));

        $this->add_control('portfolioTabAddItem', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Tab - About:', 'elementor-experts'),
            'default' => __('add Portfolio item', 'elementor-experts'),
        ));
     
        $this->end_controls_section();
    }
}
