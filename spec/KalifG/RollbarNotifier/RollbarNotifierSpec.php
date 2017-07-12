<?php

namespace spec\KalifG\RollbarNotifier;

use KalifG\RollbarNotifier\RollbarNotifier;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RollbarNotifierSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(RollbarNotifier::class);
    }
}
