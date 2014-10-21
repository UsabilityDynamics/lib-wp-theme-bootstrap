<?php
/**
 * Scaffold
 *
 * @namespace UsabilityDynamics
 */
namespace UsabilityDynamics\WP_Theme {

  if( !class_exists( 'UsabilityDynamics\WP_Theme\Scaffold' ) ) {

    /**
     *
     * @class Scaffold
     * @author: peshkov@UD
     */
    abstract class Scaffold {
    
      /**
       * Theme Name.
       *
       * @public
       * @property $name
       * @type string
       */
      public $name = false;
      
      /**
       * Theme is main or it's child
       *
       * @public
       * @property domain
       * @var string
       */
      public $is_child = false;
      
      /**
       * Parent theme's template name
       *
       * @public
       * @property domain
       * @var string
       */
      public $template = false;
      
      /**
       * Textdomain String
       *
       * @public
       * @property domain
       * @var string
       */
      public $domain = false;
            
      /**
       * Storage for dynamic properties
       * Used by magic __set, __get
       *
       * @protected
       * @type array
       */
      protected $_properties = array();
      
      /**
       * Constructor
       *
       * @author peshkov@UD
       */
      protected function __construct( $args = array() ) {
        //** Setup our theme's data */
        $this->name = isset( $args[ 'name' ] ) ? trim( $args[ 'name' ] ) : false;
        $this->template = isset( $args[ 'template' ] ) ? trim( $args[ 'template' ] ) : false;
        $this->is_child = isset( $args[ 'is_child' ] ) ? trim( $args[ 'is_child' ] ) : false;
        $this->domain = isset( $args[ 'domain' ] ) ? trim( $args[ 'domain' ] ) : false;
        $this->args = $args;
      }
      
      /**
       *
       */
      public function __get( $key ) {
        return isset( $this->_properties[ $key ] ) ? $this->_properties[ $key ] : NULL;
      }

      /**
       *
       */
      public function __set( $key, $value ) {
        $this->_properties[ $key ] = $value;
      }
      
    }
  
  }
  
}