<?php declare(strict_types=1);

/*
 * This file is part of the tenancy/tenancy package.
 *
 * (c) Daniël Klabbers <daniel@klabbers.email>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see http://laravel-tenancy.com
 * @see https://github.com/tenancy
 */

namespace Tenancy\Database\Events\Drivers;

use Tenancy\Database\Contracts\ProvidesDatabase;
use Tenancy\Identification\Contracts\Tenant;

class Configuring
{
    /**
     * @var Tenant
     */
    public $tenant;
    /**
     * @var array
     */
    public $configuration;
    /**
     * @var ProvidesDatabase
     */
    public $provider;

    public function __construct(Tenant $tenant, array &$configuration, ProvidesDatabase $provider)
    {
        $this->tenant = $tenant;
        $this->configuration = &$configuration;
        $this->provider = $provider;
    }
}
