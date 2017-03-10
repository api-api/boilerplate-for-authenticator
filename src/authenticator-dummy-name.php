<?php
/**
 * Authenticator loader.
 *
 * @package APIAPIAuthenticatorDummyName
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_authenticator_dummy_name' ) ) {

	/**
	 * Registers the authenticator for [...].
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_authenticator_dummy_name() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->authenticators()->register( 'dummy_name', 'APIAPI\Authenticator_Dummy_Name\Authenticator_Dummy_Name' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_authenticators_loader'] ) ) {
				$GLOBALS['_apiapi_authenticators_loader'] = array();
			}

			$GLOBALS['_apiapi_authenticators_loader']['dummy_name'] = 'APIAPI\Authenticator_Dummy_Name\Authenticator_Dummy_Name';
		}
	}

	apiapi_register_authenticator_dummy_name();

}
