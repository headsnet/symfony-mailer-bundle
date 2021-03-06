<?php

namespace Ahlin\Mailer\Model\Interfaces;

use Ahlin\Mailer\Model\AbstractMail;
use UnexpectedValueException;

interface MailParameterInterface
{
    /**
     * Add parameter needed for EngineInterface. You can chain this method to add multiple parameters.
     * @param string $key
     * @param mixed $value
     * @return AbstractMail
     * @throws UnexpectedValueException
     */
    public function addParameter($key, $value);
}
