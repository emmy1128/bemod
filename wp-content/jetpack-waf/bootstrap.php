<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'normal' );
define( 'JETPACK_WAF_SHARE_DATA', '1' );
define( 'JETPACK_WAF_DIR', '/hermes/bosnacweb08/bosnacweb08an/b2499/ipg.helen40297/bemodglobalinc/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/hermes/bosnacweb08/bosnacweb08an/b2499/ipg.helen40297/bemodglobalinc/wp-content/../wp-config.php' );
require_once '/hermes/bosnacweb08/bosnacweb08an/b2499/ipg.helen40297/bemodglobalinc/wp-content/plugins/jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
