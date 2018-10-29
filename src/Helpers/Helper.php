<?php

/*
 * This file is part of the XE package.
 *
 * (c) hojinlee <infohojin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (! function_exists('xe_echo')) {
    function xe_echo($msg=null, $lang='str')
    {
        if (!$msg){
            return;
        } else {
            $instance = \JinyXE\XE_echo\Trans::init();
            return $instance->echo($msg, $lang);
        }
        
    }
}