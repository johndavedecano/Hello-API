<?php

namespace Hello\Services\Authentication\Exceptions;

use Hello\Modules\Core\Exception\Abstracts\ApiException;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AuthenticationFailedException.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class LogoutFailedException extends ApiException
{

    public $httpStatusCode = Response::HTTP_BAD_REQUEST;

    public $message = 'Failed to logout!';
}
