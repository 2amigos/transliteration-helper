<?php

use dosamigos\helpers\TransliteratorHelper;

/**
 * @group helpers
 */
class TransliteratorHelperTest extends CTestCase
{

	public function testProcess()
	{
		$this->assertEquals("AAAAAAAECEEEEIIIIDNOOOOOUUUUYssaaaaaaaeceeeeiiiidnooooouuuuyy",
			TransliteratorHelper::process('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýÿ', '', 'en'));

		// cyrillic
		if (extension_loaded('intl') === true) {
			$this->assertEquals("GDZZYJ", TransliteratorHelper::process("ГДЖЗЫЙ", '', 'en'));
		} else {
			$this->assertEquals("GDZhZYY", TransliteratorHelper::process("ГДЖЗЫЙ", '', 'en'));
		}
	}
}
