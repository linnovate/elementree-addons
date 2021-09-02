<?php
namespace ElementreeAddons;

if (!defined('ABSPATH')) {
    exit('Press Enter to proceed...');
}

/**
 * ElementreeAddons plugin.
 *
 * @since 1.0.0
 */
class ElementreeAddons {

	/**
	 * Widgets filename.
	 *
	 * get the all ElementreeAddons widgets by the filename, which is in: __DIR__/widgets/).
	 * 
	 * The "filename" Must match there class name similar to - search-box => Widget_SearchBox
	 *
	 * @since 1.0.0
	 * @access private
	 *
	 * @var widgets_filename
	 */
	private $widgets_filename = [
        'home-page',
        'results-page',
		'onboarding-page',
		'expert-page',
		'user-login',
		'dashboard',
		'freelance-dashboard',
		'header',
		'footer',
		'elementor-search',
		'account-button'
    ];


	/**
	 * Instance.
	 *
	 * Holds the plugin instance.
	 *
	 * @since 1.0.0
	 * @access private
	 * @static
	 *
	 * @var $instance
	 */
    private static $instance = null;

	/**
	 * Settings.
	 *
	 * Holds the plugin settings.
	 *
	 * @since 1.0.0
	 * @access private
	 *
	 * @var Settings
	 */
	private static  $settings = null;

	/**
	 * Register Categories.
	 *
	 * Add a new widget type to the list of registered widget types.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	*/
    public function registerCategories()
    {
        \Elementor\Plugin::instance()->elements_manager->add_category(
            'elementor-experts',
            array(
                'title' => __('Elementor Experts', 'elementor-experts'),
                'icon'  => 'fa fa-plug'
            )
        );

		
    }


	/**
	 * Register widget type.
	 *
	 * Add a new widget type to the list of registered widget types.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	*/
	public function registerWidgets() {
		
		require __DIR__ . '/widgets/AbstractWidget.php';

		foreach ( $this->widgets_filename as $widget_filename ) {
			include( __DIR__ . '/widgets/' . $widget_filename . '.php' );
			$class_name = str_replace( '-', '_', $widget_filename );
			$class_name = __NAMESPACE__ . '\Widget_' . $class_name;
			\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new $class_name() );
		}
		
    }
    
	/**
	 * Instance.
	 *
	 * Ensures only one instance of the plugin class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @return Plugin An instance of the class.
	 */
    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
		
    }

	/**
	 * loading scripts on init
	 */
	public function elementor_experts_load_scripts_admin(){
       wp_enqueue_script( 'elementor-experts', plugin_dir_url( __FILE__ ) . 'assets/js/elementor-experts.js', array('jquery'), false, true );
		// remove default style
		add_action('wp_enqueue_scripts', function() {
		  wp_dequeue_style( 'twentynineteen-style' );
		  wp_dequeue_style( 'experts-style' );
		   wp_dequeue_style( 'hello-elementor-child' );
		  wp_dequeue_style( 'hello-elementor' );
		 
		}, 100);
		
		wp_enqueue_media();
	}

	public static function elementor_experts_load_settings(){
		if (is_null(self::$settings)) {
            self::$settings = new ExpertsSettings();
        }
	}

	/**
	 * Plugin constructor.
	 *
	 * Initializing Elementor Experts plugin.
	 *
	 * @since 1.0.0
	 * @access private
	 */
    private function __construct() {
        // Check required version
        if (!version_compare(ELEMENTOR_VERSION, '1.8.0', '>=')) {
            return;
        }
		add_action( 'admin_enqueue_scripts', array($this, 'elementor_experts_load_scripts_admin' ));
		add_action( 'wp_enqueue_scripts', array($this, 'elementor_experts_load_scripts_admin' ));
		//add_action( 'admin_enqueue_scripts', array($this, 'elementor_experts_load_settings'));

        add_action( 'elementor/init', array($this, 'registerCategories') );
        add_action( 'elementor/widgets/widgets_registered', array($this, 'registerWidgets') );
		
		//
		// register a new route for getting the settings values
		//
		add_action('rest_api_init', function () {
  		register_rest_route( 'experts/v1/api', 'settings',array(
                'methods'  => 'GET',
                'callback' => array($this,'get_experts_settings_json'),
				'permission_callback' => function () {
					// to implement later
					return true;
				}
			));  
		}); 
	}

	// sending the settings values when reaching the route:
	// /wp-json/experts/v1/api/settings 
	//
	public function get_experts_settings_json(){
		if(is_null(self::$settings)){
			self::$settings = new ExpertsSettings();
		}
		
		self::$settings->get_experts_settings_json(); 
	}

}


add_action('elementor/loaded', function() {
	ElementreeAddons::instance();
	if(is_admin()){
		// ElementreeAddons::elementor_experts_load_settings();
	}
});


add_action('admin_menu', function() {	
	
});




