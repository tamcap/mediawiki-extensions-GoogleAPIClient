<?php
	class GoogleAPIClientHooks {
		/**
		 * UnitTestsList Hook handler
		 * @see https://www.mediawiki.org/wiki/Manual:Hooks/UnitTestsList
		 *
		 * @param array $paths Already added test files
		 * @return boolean
		 */
		public static function onUnitTestsList( array &$paths ) {
			$dir = __DIR__ . '/tests';

			$paths[] = $dir . '/GoogleAPIClientTest.php';

			return true;
		}
	}
