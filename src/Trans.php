<?php
/*
 * This file is part of the XE package.
 *
 * (c) hojinlee <infohojin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace JinyXE\XE_echo;

/**
 * 싱글톤
 */
class Trans
{
    public static $instance;

    private function __construct()
    {
        // 싱글턴
    }

    private function __clone()
    {
        // 싱글턴
    }

    /**
     * 인스턴스 생성
     */
    public static function init($path=null)
    {
        if (self::$instance) {
            return self::$instance;
        } else {
            return new \Jiny\Polyglot\Message($path);
        }
    }

}