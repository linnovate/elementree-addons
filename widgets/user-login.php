<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;

class Widget_user_login extends AbstractWidget
{
    public function get_name()
    {
        return 'UserWidget';
    }

    public function get_title()
    {
        return __('User widget', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-lock-user';
    }

    protected function _register_controls()
    {

        /* ================================== General ================================== */
        
        $this->start_controls_section('general', array(
            'label' => __('General', 'elementree-addons'),
        ));

        $this->add_control('loginBtn', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Login button label:', 'elementree-addons'),
            'default' => __('Login', 'elementree-addons'),
        ));

      	$this->add_control('logoutBtn', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Logout button label:', 'elementree-addons'),
            'default' => __('Logout', 'elementree-addons'),
        ));

	  	$this->add_control('profileBtn', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('profile button label:', 'elementree-addons'),
            'default' => __('Manage profile', 'elementree-addons'),
        ));

		$this->add_control('loginLink', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Login link:', 'elementree-addons'),
//             'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
			'default' => [
				'url' => '/dashboard',
				'is_external' => false,
				'nofollow' => false,
			], 
        ));
        
		$this->add_control('profileLink', array(
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

		$this->add_control('logoutRedirect', array(
            'type'        => Controls_Manager::URL,
            'label'       => __('Logout redirect:', 'elementree-addons'),
//             'description' => __('The url redirection after search submit.', 'elementree-addons'),
            'placeholder' => __( 'https://your-link.com', 'elementree-addons' ),
            'show_external' => true,
			'default' => [
				'url' => '/',
				'is_external' => false,
				'nofollow' => false,
			],
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
            'default' => __('/results', 'elementree-addons'),
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
    }
}
