<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;

class Widget_onboarding_page extends AbstractWidget
{
    public function get_name()
    {
        return 'OnboardingPage';
    }

    public function get_title()
    {
        return __('Onboarding Page', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-post-list';
    }

    protected function _register_controls()
    {
		/* ================================== General ================================== */
        
        $this->start_controls_section('general', array(
            'label' => __('General', 'elementree-addons'),
        ));

        $this->add_control('title', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('Become an Elementor Expert', 'elementree-addons'),
        ));

        $this->add_control('cancelLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Cancel & Back label:', 'elementree-addons'),
            'default' => __('Cancel & Back to homepage', 'elementree-addons'),
        ));

        $this->add_control('btnCreate', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button create:', 'elementree-addons'),
            'default' => __('CREATE ACCOUNT', 'elementree-addons'),
        ));

        $this->add_control('btnNext', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button next:', 'elementree-addons'),
            'default' => __('Next', 'elementree-addons'),
        ));

		$this->add_control('btnBack', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button back:', 'elementree-addons'),
            'default' => __('Back', 'elementree-addons'),
        ));

        $this->end_controls_section();

  
  		/* ================================== Cancel Dialog ================================== */
        
        $this->start_controls_section('cancelDialog', array(
            'label' => __('Cancel dialog', 'elementree-addons'),
        ));
  
	 	$this->add_control('cancelDialogTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('Are you sure you want to leave?', 'elementree-addons'),
        ));

        $this->add_control('cancelDialogSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub title:', 'elementree-addons'),
            'default' => __('Your data will be saved for a while If you want to continue the process later.', 'elementree-addons'),
        ));
     
	 	$this->add_control('cancelDialogCancelBtn', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button on label:', 'elementree-addons'),  
            'default' => __('No, I want to stay', 'elementree-addons'),
        ));
                 
        $this->add_control('cancelDialogConfirmBtn', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button yes label:', 'elementree-addons'),  
            'default' => __('Yes, I want to leave', 'elementree-addons'),
        ));

        $this->add_control('cancelDialogCancelRedirect', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Button Redirect:', 'elementree-addons'),
//             'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
				'default' => [
					'url' => '/',
					'is_external' => false,
					'nofollow' => false,
				],
            
        ));

        $this->add_control('cancelDialogIcon', array(
            'type'        => Controls_Manager::MEDIA,
            'label'       => __('Icon:', 'elementree-addons'),
        ));

		$this->end_controls_section();


        /* ================================== Login Dialog ================================== */
        
        $this->start_controls_section('loginDialog', array(
            'label' => __('Login dialog', 'elementree-addons'),
        ));
  
	 	$this->add_control('loginDialogTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('Login to your Elementor Experts account', 'elementree-addons'),
        ));

        $this->add_control('loginDialogSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub title:', 'elementree-addons'),
            'default' => __('Use your exisiting elementor account to login', 'elementree-addons'),
        ));
              
        $this->add_control('loginDialogBtnLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button label:', 'elementree-addons'),  
            'default' => __('SIGN IN WITH YOUR ELEMENTOR ACCOUNT', 'elementree-addons'),
        ));

        $this->add_control('loginDialogBtnRedirect', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Button redirect:', 'elementree-addons'),
//             'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
				'default' => [
					'url' => '/dashboard',
					'is_external' => false,
					'nofollow' => false,
				],
            
        ));

        $this->end_controls_section();


    /* ================================== Skill Tab ================================== */
    
    $this->start_controls_section('SkillTab', array(
        'label' => __('Skill tab', 'elementree-addons'),
    ));

    $this->add_control('SkillTabTitle', array(
        'type'        => Controls_Manager::TEXT,
        'label'       => __('Title:', 'elementree-addons'),
        'default' => __('Become an Elementor Expert', 'elementree-addons'),
    ));
    $this->add_control('SkillTabDescription', array(
        'type'        => Controls_Manager::TEXT,
        'label'       => __('Description:', 'elementree-addons'),
        'default' => __('Showcase your work to potential clients by adding images and other references to your portfolio.', 'elementree-addons'),
    ));

    $this->end_controls_section();

    }
}
