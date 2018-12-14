<?php
require '../core/inc/bigtree/utils.php';
class ConfigTest extends PHPUnit_Framework_TestCase {
	protected function setUp()
    {
        $this->core_utils = new BigTree();
    }
 
    protected function tearDown()
    {
        $this->core_utils = NULL;
    }
 
    public function testAdd()
    {
    	$sampleArr = array(
    		'one' => 'lorem'
    	);

    	$sampleArrOne = array(
    		'one' => '<>lorem&'
    	);

    	/*
		Result for 
		$xml .= "<one>lorem</one>\n";
					} else {
						$xml .= "<one><![CDATA[<>lorem&]]></one>\n";
    	*/

		// define('SERVER_ROOT', $_S)
        $result = $this->core_utils->cURL('http://localhost/arjuna/admin/pages/view-tree/0/', $post = false, $options = [], $strict_security = true, $output_file = false);
        $this->assertEquals("dsgfdg", $result);
    }
}