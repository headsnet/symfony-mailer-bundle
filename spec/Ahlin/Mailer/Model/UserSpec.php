<?php

namespace spec\Ahlin\Mailer\Model;

use Ahlin\Mailer\Model\User;
use PhpSpec\ObjectBehavior;

/**
 * Class UserSpec
 * @mixin User
 */
class UserSpec extends ObjectBehavior
{
    const EMAIL = 'test@localhost';
    const NAME = 'Test Name';

    function let()
    {
        $this->beConstructedWith(self::EMAIL, self::NAME);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Ahlin\Mailer\Model\User');
        $this->shouldImplement('Ahlin\Mailer\Model\Interfaces\MailUserInterface');
    }

    function it_returns_valid_email()
    {
        $this->getEmail()->shouldBeLike(self::EMAIL);
    }

    function it_returns_valid_name()
    {
        $this->getFullName()->shouldBeLike(self::NAME);
    }
}
