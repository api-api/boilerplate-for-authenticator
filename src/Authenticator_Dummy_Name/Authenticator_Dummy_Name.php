<?php
/**
 * Authenticator_Dummy_Name class
 *
 * @package APIAPIAuthenticatorDummyName
 * @since 1.0.0
 */

namespace APIAPI\Authenticator_Dummy_Name;

use APIAPI\Core\Authenticators\Authenticator;

if ( ! class_exists( 'APIAPI\Authenticator_Dummy_Name\Authenticator_Dummy_Name' ) ) {

	/**
	 * Authenticator implementation for [...].
	 *
	 * @since 1.0.0
	 */
	class Authenticator_Dummy_Name extends Authenticator {
		/**
		 * Authenticates a request.
		 *
		 * This method does not yet actually authenticate the request with the server. It only sets
		 * the required values on the request object.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param APIAPI\Core\Request\Route_Request $request The request to send.
		 */
		public function authenticate_request( $request ) {

		}

		/**
		 * Checks whether a request is authenticated.
		 *
		 * This method does not check whether the request was actually authenticated with the server.
		 * It only checks whether authentication data has been properly set on it.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @param APIAPI\Core\Request\Route_Request $request The request to check.
		 * @return bool True if the request is authenticated, otherwise false.
		 */
		public function is_authenticated( $request ) {

		}

		/**
		 * Returns the default arguments.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return array Array of `$key => $value` pairs.
		 */
		public function get_default_args() {

		}
	}

}
