<?php

namespace KalifG\RollbarNotifier;

use Rollbar\Rollbar as BaseRollbar;

class RollbarNotifier
{
    public function __call($method, array $args)
    {
        return forward_static_call_array([BaseRollbar::class, $method], $args);
    }

    public function report_exception($exc, $extra_data = null, $payload_data = null)
    {
        return forward_static_call([BaseRollbar::class, 'report_exception'], $exc, $extra_data, $payload_data);
    }

    public function report_php_error($errno, $errstr, $errfile, $errline)
    {
        return forward_static_call([BaseRollbar::class, 'report_php_error'], $errno, $errstr, $errfile, $errline);
    }

    public function flush()
    {
        return forward_static_call([BaseRollbar::class, 'flush']);
    }
}