<?php
namespace ElementreeAddons;

use \Elementor\Controls_Manager;
use \Elementor\Repeater;

class Widget_results_page extends AbstractWidget
{
    public function get_name()
    {
        return 'ResultsPage';
    }

    public function get_title()
    {
        return __('Results page', 'elementree-addons');
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

        $this->add_control('totalLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Total label:', 'elementree-addons'),
            'default' => __('Filter results', 'elementree-addons'),
        ));

        $this->add_control('clearLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Clear label:', 'elementree-addons'),
            'default' => __('Clear all', 'elementree-addons'),
        ));

        $this->add_control('searchPlaceholder', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Search placeholder:', 'elementree-addons'),
            'default' => __('What do you need help with ?', 'elementree-addons'),
            'description' => __('The placeholder inside search input field.', 'elementree-addons'),
        ));

        $this->end_controls_section();


        /* ================================== Results ================================== */

        $this->start_controls_section('results', array(
            'label' => __('Results', 'elementree-addons')
        ));

        $this->add_control('resultsLoadMoreLabel', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('Load More Label:', 'elementree-addons'),
            'default' => __('Load more results', 'elementree-addons'),
        ));

        $this->add_control('resultsNoResultsTitle', array(
            'type'        => Controls_Manager::TEXT,
            'label'       => __('No results title:', 'elementree-addons'),
            'default' => __('No results found', 'elementree-addons'),
        ));

        $this->add_control('resultsNoResultsDesc', array(
            'type'        => Controls_Manager::TEXTAREA,
            'label'       => __('No results description:', 'elementree-addons'),
            'default' => __('Try Adjusting the filters to get better results.', 'elementree-addons'),
        ));


        $this->add_control('resultsItemsPerPage', array(
            'type'        => Controls_Manager::NUMBER,
            'label'       => __('Items per page:', 'elementree-addons'),
			'default' => 10,
        ));

        $this->end_controls_section();


        /* ================================== Filters ================================== */
        
        $this->start_controls_section('filters', array(
            'label' => __('Filters', 'elementree-addons')
        ));

        $this->add_control('filtersEditLink', array(
            'type'        => Controls_Manager::RAW_HTML,
            'raw' => '<a href="/wp-admin/admin.php?page=reindex-config-filters" blank="target">Click my: Edit Reindex filters</a>',
            'content_classes' => 'elementor-panel-alert elementor-panel-alert-warning',
        ));
                
        $this->end_controls_section();
    }

}
