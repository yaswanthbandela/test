<?php
/**
 * Anmona Theme functions and definitions
 *
 * @package Anmona
 * @author Zakaria Binsaifullah
 * @link https://gutenbergkits.com
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly.

/**
 * Theme bootstrap
 * 
 * @package Anmona
 * @version 1.0.0
 */

if ( ! class_exists( 'Anmona_Theme_Bootstrap' ) ) {

    /**
     * Anmona_Theme_Bootstrap class
     * 
     * @version 1.0.0
     * @since 1.0.0
     * @package Anmona
     */
    class Anmona_Theme_Bootstrap {

        private static $instance = null;

        /**
         * Constructor
         * @return void
         */
        public function __construct() {
            $this->init();
        }

        /**
         * Initialize the theme
         * @return void
         */
        public function init() {
            $this->constants();
            $this->setup();
        }

        /**
         * Singleton instance
         * this function will return the instance of the class
         * @return object
         */
        public static function get_instance() {
            if (is_null(self::$instance)) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        /**
         * Define constants
         * @return void
         */
        public function constants() {
            define('ANMONA_VERSION', wp_get_theme()->get('Version'));
            define('ANMONA_DIR', __DIR__);
            define('ANMONA_THEME_DIR', get_template_directory());
            define('ANMONA_THEME_URI', get_template_directory_uri());
        }

        /**
         * Setup theme
         * @return void
         */
        public function setup() {
            add_action('after_setup_theme', [ $this, 'theme_setup' ]);
            add_action( 'enqueue_block_assets', [ $this, 'enqueue_assets' ] );

            // custom pattern category
            add_action( 'init', [ $this, 'patterns_category' ] );
        }

        /**
         * Theme setup
         * @return void
         */
        public function theme_setup() {
            // load text domain
            load_theme_textdomain('anmona', ANMONA_THEME_DIR . '/languages');
            // block editor supports
            add_theme_support( 'wp-block-styles' );
            add_theme_support('editor-styles');
        }

        /**
         * Enqueue assets
         * @return void
         */
        public function enqueue_assets() {
            wp_enqueue_style('anmona-style', ANMONA_THEME_URI . '/assets/css/anmona.css', [], ANMONA_VERSION);
        }

        /**
         * Register pattern category
         * @return void
         */
        public function patterns_category() {
            register_block_pattern_category(
                'anmona',
                array( 'label' => esc_html__( 'Anmona', 'anmona' ) )
            );
        }
    }
}

/**
 * Initialize the theme
 * @return object
 */

function Anmona_init() {
    return Anmona_Theme_Bootstrap::get_instance();
}

// kick-off the theme. 
Anmona_init();
