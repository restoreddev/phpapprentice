<?php

namespace Test;

class FunctionsTest extends BaseTestCase
{
    public function setUp()
    {
        mkdir('/tmp/apprentice_output');
    }

    public function tearDown()
    {
        $GLOBALS['PARTIAL_TEST'] = null;

        $files = glob('/tmp/apprentice_output/*');
        foreach ($files as $file) {
            unlink($file);
        }
        rmdir('/tmp/apprentice_output');
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

    public function test_partial()
    {
        partial('partial', ['test' => 'test var']);

        $this->assertEquals('test var', $GLOBALS['PARTIAL_TEST']);
    }

    public function test_asset_path_with_manifest()
    {
        file_put_contents(
            '/tmp/apprentice_output/manifest.json',
            json_encode(['js/app.js' => '/js/app-1234.js'])
        );

        $path = asset('js/app.js');

        $this->assertEquals('/js/app-1234.js', $path);
    }

    public function test_asset_path_without_manifest()
    {
        $path = asset('js/app.js');

        $this->assertEquals('/js/app.js', $path);
    }
}
