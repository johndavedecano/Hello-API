<?php

namespace Hello\Modules\Core\Command\Abstracts;

use Illuminate\Contracts\Bus\SelfHandling as LaravelSelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs as LaravelDispatchesJobs;
use Hello\Modules\Core\Command\Traits\DispatcherTrait;

/**
 * Class Command.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
abstract class Command implements LaravelSelfHandling
{

    use LaravelDispatchesJobs;
    use DispatcherTrait;
}
