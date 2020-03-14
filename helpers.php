<?php

if (!function_exists('eflash')) {
    /**
     * @return \HugoJF\Eflash\Eflash
     */
    function eflash()
    {
        return app('eflash');
    }
}
