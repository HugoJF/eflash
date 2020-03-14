<?php

namespace HugoJF\Eflash\Tests;

use Laracasts\Flash\FlashServiceProvider;
use Orchestra\Testbench\TestCase;
use HugoJF\Eflash\EflashServiceProvider;

class ExampleTest extends TestCase
{
    protected $format = 'Welcome aboard %s';
    protected $param = '<h1>User</h1>';

    protected $expected = 'Welcome aboard &lt;h1&gt;User&lt;/h1&gt;';

    protected function getPackageProviders($app)
    {
        return [
            FlashServiceProvider::class,
            EflashServiceProvider::class,
        ];
    }

    // success  X
    // error    X
    // info     X
    // message  X
    // warning  X

    /** @test */
    public function assert_success_is_escaped()
    {
        eflash()->success($this->format, $this->param);

        $this->assertEquals($this->expected, flash()->messages[0]->message);
    }

    /** @test */
    public function assert_error_is_escaped()
    {
        eflash()->error($this->format, $this->param);

        $this->assertEquals($this->expected, flash()->messages[0]->message);
    }

    /** @test */
    public function assert_info_is_escaped()
    {
        eflash()->info($this->format, $this->param);

        $this->assertEquals($this->expected, flash()->messages[0]->message);
    }

    /** @test */
    public function assert_message_is_escaped()
    {
        eflash()->message($this->format, 'info', $this->param);

        $this->assertEquals($this->expected, flash()->messages[0]->message);
    }

    /** @test */
    public function assert_warning_is_escaped()
    {
        eflash()->warning($this->format, $this->param);

        $this->assertEquals($this->expected, flash()->messages[0]->message);
    }
}
