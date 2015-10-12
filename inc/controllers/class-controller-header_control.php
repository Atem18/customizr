<?php
/**
* HEADER CONTROLLER CLASS
* FIRED ON INIT
*
*
* @package      Customizr
* @subpackage   classes
* @since        3.4.10
* @author       Nicolas GUILLAUME <nicolas@presscustomizr.com>
* @copyright    Copyright (c) 2013-2015, Nicolas GUILLAUME
* @link         http://presscustomizr.com/customizr
* @license      http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/
if ( ! class_exists( 'TC_header_control' ) ) :
  class TC_header_control extends TC_control_base {
    static $instance;

    function __construct( $_args = array() ) {
      self::$instance =& $this;

      //Instanciates the parent class.
      parent::__construct( $_args );
    }



    /***************************************************************************************************************
    * FIRE RELEVANT VIEW
    ***************************************************************************************************************/
    //hook : 'wp'
    function tc_fire_views_on_query_ready() {
      if ( is_admin() )
        return;

      if ( apply_filters( 'tc_display_main_header' , true ) )
        tc_new(
          array( 'header' => array( array('inc/views/header', 'header_main') ) ),
          array( 'render_on_hook' => '__header_main' )
        );

    }


    /***************************************************************************************************************
    * HELPERS : CONTEXT CHECKER
    ***************************************************************************************************************/

  }//end of class
endif;