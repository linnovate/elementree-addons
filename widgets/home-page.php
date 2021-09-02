<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;

class Widget_home_page extends AbstractWidget
{
    public function get_name()
    {
        return 'HomePage';
    }

    public function get_title()
    {
        return __('Home page', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-product-categories';
    }

    protected function _register_controls()
    {

        /* ================================== Top Search ================================== */
        
        $this->start_controls_section('top_search', array(
            'label' => __('Top Search', 'elementree-addons'),
        ));

        $this->add_control('topSearchTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('Search and hire an', 'elementree-addons'),
        ));

        $this->add_control('topSearchSecondTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Second title:', 'elementree-addons'),
            'default' => __('Elementor Expert', 'elementree-addons'),
        ));

        $this->add_control('topSearchSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub title:', 'elementree-addons'),
            'default' => __('Elementor helps you find the best expert for your website.', 'elementree-addons'),
        ));

        $this->add_control('topSearchPlaceholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Placeholder:', 'elementree-addons'),
            'default' => __('What do you need help with ?', 'elementree-addons'),
            'description' => __('The placeholder inside search input field.', 'elementree-addons'),
        ));

        $this->add_control('topSearchBtnLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button label:', 'elementree-addons'),  
            'default' => __('Search an expert', 'elementree-addons'),
        ));

        $this->add_control('topSearchBtnRedirect', array(
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

        $this->add_control('topSearchBg', array(
            'type'        => Controls_Manager::MEDIA,
            'label'       => __('Background:', 'elementree-addons'),
           // 'default' => __('ss', 'elementree-addons'),
        ));

        $this->end_controls_section();


        /* ================================== Categories ================================== */

        $this->start_controls_section('popular_categories', array(
            'label' => __('Popular categories', 'elementree-addons')
        ));

        $this->add_control('categoriesTitle', array(
            'type'  => Controls_Manager::TEXT,
            'label' => __('Title:', 'elementree-addons'),
            'default' => __('Popular search categories', 'elementree-addons'),
        ));

        $repeater = new Repeater();


		$repeater->add_control('name', array(
            'type'  => Controls_Manager::TEXT,
            'label' => __('Name:', 'elementree-addons'),
        ));

		$repeater->add_control('color', array(
            'type'  => Controls_Manager::COLOR,
            'label' => __('Color:', 'elementree-addons'),
        ));

		$repeater->add_control('desc', array(
            'type'  => Controls_Manager::TEXT,
            'label' => __('Description:', 'elementree-addons'),
        ));


		$repeater->add_control('value', array(
            'type'  => Controls_Manager::TEXT,
            'label' => __('Description:', 'elementree-addons'),
        ));

		$this->add_control('categoriesItems', array(
            'type'  => Controls_Manager::REPEATER,
            'label' => __('Items:', 'elementree-addons'),
            'fields' => $repeater->get_controls(),
            'default' => [
				[
					'name' => 'Design',
					'color' => '#63D0BE',
					'desc' => 'Landing Pages',
					'value' => 'designer',
				],
				[
					'name' => 'Design',
					'color' => '#63D0BE',
					'desc' => 'Responsive',
					'value' => 'designer',
				],
				[
					'name' => 'Developement',
					'color' => '#FFAC7D',
					'desc' => 'WP Installation + Elementor',
					'value' => 'developer',
				],
								[
					'name' => 'marketing',
					'color' => '#F85B85',
					'desc' => 'Creative Writing',
					'value' => 'marketer',
				],
				[
					'name' => 'Design',
					'color' => '',
					'desc' => 'Responsive"',
					'value' => 'designer',
				],
				[
					'name' => 'Developement',
					'color' => '#FFAC7D',
					'desc' => 'WP Installation + Elementor',
					'value' => 'developer',
				],
								[
					'name' => 'Design',
					'color' => '',
					'desc' => 'Responsive',
					'value' => 'designer',
				],
				[
					'name' => 'Desing',
					'color' => '#63D0BE',
					'desc' => 'Landing Pages',
					'value' => 'designer',
				],
				[
					'name' => 'marketing',
					'color' => '#F85B85',
					'desc' => ' Web Content Writing',
					'value' => 'marketer',
				],
				[
					'name' => 'Developement',
					'color' => '#FFAC7D',
					'desc' => 'HTML',
					'value' => 'developer',
				],
            ]
        ));

        $this->end_controls_section();


        /* ================================== Works ================================== */
        
        $this->start_controls_section('works', array(
            'label' => __('How it works', 'elementree-addons')
        ));
        
        $this->add_control('worksTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('How it works', 'elementree-addons'),
        ));

        $repeater = new Repeater();

		$repeater->add_control('icon', array(
            'type'  => Controls_Manager::MEDIA,
            'label' => __('Category:', 'elementree-addons'),
        ));

		$repeater->add_control('title', array(
            'type'  => Controls_Manager::TEXT,
            'label' => __('Title:', 'elementree-addons'),
        ));

		$repeater->add_control('desc', array(
            'type'  => Controls_Manager::TEXTAREA,
            'label' => __('Description:', 'elementree-addons'),
        ));

		$this->add_control('worksItems', array(
            'type'  => Controls_Manager::REPEATER,
            'label' => __('Items:', 'elementree-addons'),
            'fields' => $repeater->get_controls(),
            'default' => [
				[
					'title' => 'we sort and choose only the best experts',
					'desc' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.',
					'icon' => '',
				],
				[
					'title' => 'Search the best for you',
					'desc' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.',
					'icon' => '',
				],
				[
					'title' => 'Contact your chosen experts',
					'desc' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.',
					'icon' => '',
				],
            ]
        ));

        $this->end_controls_section();


        /* ================================== Feedback ================================== */
        
        $this->start_controls_section('feedback', array(
            'label' => __('Feedback', 'elementree-addons')
        ));

        $this->add_control('feedbackTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('Thank you for giving us feedback on your experience with our Experts platform', 'elementree-addons'),
        ));

        $this->add_control('feedbackSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub title:', 'elementree-addons'),
            'default' => __('Feedback like this helps us constantly improve our platform by knowing what we are doing right and what we can work on. We appreciate you taking the time to send us this helpful response.', 'elementree-addons'),
        ));

        $this->add_control('feedbackBtnLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Button label:', 'elementree-addons'),  
            'default' => __('LEAVE FEEDBACK', 'elementree-addons'),
        ));
     
        $this->add_control('feedbackPopupTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Popup Title', 'elementree-addons'),
            'default' => __('Help Elementor Experts improve ', 'elementree-addons'),
        ));

        $this->add_control('feedbackPopupSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Popup sub title', 'elementree-addons'),
            'default' => __('Share your feedback and suggestions here', 'elementree-addons'),
        ));

        $this->add_control('feedbackPopupSubjectPlaceholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Popup subject placeholder', 'elementree-addons'),
            'default' => __('What seems to be the problem?', 'elementree-addons'),
        ));


        $repeater = new Repeater();


		$repeater->add_control('value', array(
            'type'  => Controls_Manager::TEXT,
            'label' => __('Value:', 'elementree-addons'),
        ));

        $this->add_control('feedbackPopupMassagePlaceholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Popup massage placeholder', 'elementree-addons'),
            'default' => __('Leave your feedback', 'elementree-addons'),
        ));
        
        $this->add_control('feedbackPopupBtnLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Popup button label', 'elementree-addons'),
            'default' => __('SEND', 'elementree-addons'),
        ));

		$this->add_control('feedbackPopupSubjectOptions', array(
            'type'  => Controls_Manager::REPEATER,
            'label' => __('Popup subject option:', 'elementree-addons'),
            'fields' => $repeater->get_controls(),
			'default' => [
            	["value" => "Activate"],
            	["value" => "account"],
            	["value" => "Login"],
				["value" => "Onboarding"],
				["value" => "Budget"],
				["value" => "Portfolio"],
				["value" => "Upload (images/gif/video)"],
				["value" => "Offline Status"],
				["value" => "Search"],
				["value" => "Profile Incomplete"],
				["value" => "Expertise"],
				["value" => "Experts Account"],
				["value" => "Delete account"],
				["value" => "Notifications"],
				["value" => "Recommended features"],
				["value" => "Privacy & Terms"],
				["value" => "Settings"],
				["value" => "Errors"],
				["value" => "Bugs"],
				["value" => "Other"]
			]
        ));
        
        $this->end_controls_section();


     /* ================================== Tnx popup ================================== */
        
     $this->start_controls_section('tnxPopup', array(
        'label' => __('Thank popup', 'elementree-addons')
    ));

    $this->add_control('tnxPopupTitle', array(
        'type'        => Controls_Manager::TEXT,
        'label'       => __('Title:', 'elementree-addons'),
        'default' => __('Thank you for giving us feedback on your experience with our Experts platform', 'elementree-addons'),
    ));

    $this->add_control('tnxPopupSubTitle', array(
        'type'        => Controls_Manager::TEXT,
        'label'       => __('Sub title:', 'elementree-addons'),
        'default' => __('Feedback like this helps us constantly improve our platform by knowing what we are doing right and what we can work on. We appreciate you taking the time to send us this helpful response', 'elementree-addons'),
    ));

    $this->add_control('tnxPopupBtnLabel', array(
        'type'        => Controls_Manager::TEXT,
        'label'       => __('Button label:', 'elementree-addons'),  
        'default' => __('Continue', 'elementree-addons'),
    ));
     $this->end_controls_section();


     }



   }
   