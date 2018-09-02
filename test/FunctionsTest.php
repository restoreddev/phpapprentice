<?php

namespace Test;

class FunctionsTest extends BaseTestCase
{
    public function tearDown()
    {
        $GLOBALS['PARTIAL_TEST'] = null;
    }

    public function test_load_config()
    {
        load_config(__DIR__ . '/static/config.php');

        $this->assertEquals(__DIR__ . '/static/../icons', config('icon_dir'));
    }

    public function test_page_path()
    {
        $page = page_path('home');

        $this->assertEquals('/home.html', $page);
    }

    public function test_escape()
    {
        $output = escape("'\"&");

        $this->assertEquals("&#039;&quot;&amp;", $output);
    }

    public function test_icon()
    {
        load_config(__DIR__ . '/static/config.php');
        $icon = icon('test');

        $this->assertFalse(empty($icon));
        $this->assertEquals("<test></test>\n", $icon);
    }

    public function test_code_table()
    {
        $php = file_get_contents(__DIR__ . '/static/code_table.php');
        $expectedOutput = file_get_contents(__DIR__ . '/static/code_table.html');

        $html = code_table($php);

        $this->assertFalse(empty($html));
        $this->assertEquals($expectedOutput, $html . "\n");
    }

    public function test_partial()
    {
        partial('partial', ['test' => 'test var']);

        $this->assertEquals('test var', $GLOBALS['PARTIAL_TEST']);
    }
}
