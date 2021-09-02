<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;

class Widget_dashboard extends AbstractWidget
{
    public function get_name()
    {
        return 'DashboardPage';
    }

    public function get_title()
    {
        return __('Dashboard page', 'elementree-addons');
    }

    public function get_icon()
    {
        return 'eicon-laptop';
    }


    protected function _register_controls()
    {

        /* ================================== General ================================== */
        
        $this->start_controls_section('general', array(
            'label' => __('General', 'elementree-addons'),
        ));

        $this->add_control('saveBtnLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Save label:', 'elementree-addons'),
            'default' => __('save changes', 'elementree-addons'),
        ));
        
        $this->add_control('errorMsg', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Error message:', 'elementree-addons'),
            'default' => __('You must fill out the required fields', 'elementree-addons'),
        ));

        $this->add_control('FirstPortfolioTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('First portfolio title:', 'elementree-addons'),
            'default' => __('Add your first fabulous project', 'elementree-addons'),
        ));

        $this->add_control('FirstPortfolioDescription', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('First portfolio description:', 'elementree-addons'),
            'default' => __('By adding the first project, your profile page will go online. You’ll be able to start geting emails from potential clients.', 'elementree-addons'),
        ));
        
        $this->end_controls_section();


        /* ================================== Tab - Portfolio ================================== */
        
        $this->start_controls_section('portfolio', array(
            'label' => __('Tab - portfolio', 'elementree-addons'),
        ));

        $this->add_control('portfolioTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Header:', 'elementree-addons'),
            'default' => __('Portfolio', 'elementree-addons'),
        ));

        $this->add_control('portfolioSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub header:', 'elementree-addons'),
            'default' => __('Upload website screenshots, Videos, Google search results etc', 'elementree-addons'),
        ));

        $this->add_control('portfolioAddItemLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('+ Add new item', 'elementree-addons'),
        ));
        
       
        $this->end_controls_section();

        
        /* ================================== Tab - Cover ================================== */
     
        $this->start_controls_section('cover', array(
            'label' => __('Tab - cover', 'elementree-addons'),
        ));
        
        $this->end_controls_section();


        /* ================================== Tab - Profile ================================== */
        
        $this->start_controls_section('profile', array(
            'label' => __('Tab - profile', 'elementree-addons'),
        ));

        $this->add_control('profileTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Header:', 'elementree-addons'),
            'default' => __('Profile', 'elementree-addons'),
        ));

        $this->add_control('profileSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub header:', 'elementree-addons'),
            'default' => __('Upload website screenshots, Videos, Google search results etc', 'elementree-addons'),
        ));
        
        $this->end_controls_section();


		/* ================================== Tab - Info ================================== */
  
        $this->start_controls_section('info', array(
            'label' => __('Tab - info', 'elementree-addons'),
        ));

        $this->add_control('infoTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Header:', 'elementree-addons'),
            'default' => __('Info', 'elementree-addons'),
        ));

        $this->add_control('infoSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub header:', 'elementree-addons'),
            'default' => __('Edit all your personal and proffesional info here', 'elementree-addons'),
        ));
        
        $this->end_controls_section();


        /* ================================== Tab - About ================================== */

        $this->start_controls_section('bio', array(
            'label' => __('Tab - bio', 'elementree-addons'),
        ));

        $this->add_control('aboutTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Header:', 'elementree-addons'),
            'default' => __('bio', 'elementree-addons'),
        ));

        $this->add_control('bioSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub header:', 'elementree-addons'),
            'default' => __('Edit all your personal and proffesional info here', 'elementree-addons'),
        ));

        $this->end_controls_section();


        /* ================================== Tab - Contact ================================== */
     
        $this->start_controls_section('personal', array(
            'label' => __('Tab - personal', 'elementree-addons'),
        ));

        $this->add_control('personalTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Header:', 'elementree-addons'),
            'default' => __('personal', 'elementree-addons'),
        ));

        $this->add_control('personalSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub header:', 'elementree-addons'),
            'default' => __('Edit all your personal and proffesional info here', 'elementree-addons'),
        ));

        $this->end_controls_section();

        
        /* ================================== Tab - Contact ================================== */
     
        $this->start_controls_section('contact', array(
            'label' => __('Tab - contact', 'elementree-addons'),
        ));

        $this->add_control('contactTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('contact', 'elementree-addons'),
        ));

        $this->add_control('contactSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub Title:', 'elementree-addons'),
            'default' => __('Edit all your contact and proffesional info here', 'elementree-addons'),
        ));

        $this->end_controls_section();

        /* ================================== Tab - Account ================================== */

        $this->start_controls_section('account', array(
            'label' => __('Tab - account', 'elementree-addons'),
        ));

        $this->add_control('accountTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('account settings', 'elementree-addons'),
        ));


        $this->end_controls_section();


        /* ================================== Tab - Delete ================================== */

        $this->start_controls_section('delete', array(
            'label' => __('Tab - delete', 'elementree-addons'),
        ));

        $this->add_control('deleteTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Title:', 'elementree-addons'),
            'default' => __('Delete account', 'elementree-addons'),
        ));

        $this->add_control('deleteSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Sub Title:', 'elementree-addons'),
            'default' => __('The action is permanent and irivesable, deleting all your info and portfolio items.', 'elementree-addons'),
        ));

        $this->add_control('deleteBoldSubTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Bold Sub Title:', 'elementree-addons'),
            'default' => __('This does not delete your elementor account, only elementor experts account. ', 'elementree-addons'),
        ));

        $this->end_controls_section();


        /* ================================== Fields ================================== */
     
        $this->start_controls_section('fields', array(
            'label' => __('Fields', 'elementree-addons'),
        ));

		$this->add_control('fieldsEditLink', array(
            'type'        => Controls_Manager::RAW_HTML,
            'raw' => '<a href="/wp-admin/admin.php?page=reindex-config-dashboard" blank="target">Click my: Edit fields</a>',
            'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
        ));

        $this->end_controls_section();


    }
}
