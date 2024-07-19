<?php

declare(strict_types=1);

namespace ChrisReedIO\Socialment\Facades;

use Illuminate\Support\Facades\Facade;
use ChrisReedIO\Socialment\Models\ConnectedAccount;

/**
 * @see \ChrisReedIO\Socialment\SocialmentPlugin
 *
 * @method static static executePreLogin(ConnectedAccount $account)
 * @method static \Illuminate\Contracts\Auth\Authenticatable|static createUser(ConnectedAccount $account)
 * @method static static executePostLogin(ConnectedAccount $account)
 */
class Socialment extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ChrisReedIO\Socialment\SocialmentPlugin::class;
    }
}
