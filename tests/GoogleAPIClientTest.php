<?php
	/**
	 * @group GoogleAPIClient
	 */
	class GoogleAPIClientTest extends MediaWikiTestCase {
		/**
		 * Test, if Google_Client class (provided from Google PHP Api client) can be used.
		 */
		public function testInstantiateClass() {
			$googleClient = new Google_Client;
			$this->assertEquals( 'Google_Client', get_class( $googleClient ) );
		}
	}
