<?php

namespace Hello\Services\Authentication\Exceptions;

use Hello\Modules\Core\Exception\Abstracts\ApiException;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AuthenticationFailedException.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class AuthenticationFailedException extends ApiException
{

    public $httpStatusCode = Response::HTTP_UNAUTHORIZED;

    public $message = 'Credentials Incorrect.';
}
