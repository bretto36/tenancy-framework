<?php

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

namespace Tenancy\Identification\Contracts;

use Tenancy\Identification\Support\TenantModelCollection;

interface ResolvesTenants
{
    public function __invoke(): ?Tenant;

    /**
     * Registers a viable tenant model class.
     *
     * @param string $class
     * @return $this
     */
    public function addModel(string $class);

    /**
     * Loads all registered tenant models.
     *
     * @return TenantModelCollection
     */
    public function getModels(): TenantModelCollection;

    /**
     * Updates the tenant model collection.
     *
     * @param TenantModelCollection $collection
     * @return $this
     */
    public function setModels(TenantModelCollection $collection);
}
