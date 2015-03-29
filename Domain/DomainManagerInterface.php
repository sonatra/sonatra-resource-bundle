<?php

/*
 * This file is part of the Sonatra package.
 *
 * (c) François Pluchino <francois.pluchino@sonatra.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonatra\Bundle\ResourceBundle\Domain;

use Sonatra\Bundle\ResourceBundle\Exception\InvalidArgumentException;

/**
 * Domain manager interface.
 *
 * @author François Pluchino <francois.pluchino@sonatra.com>
 */
interface DomainManagerInterface
{
    /**
     * Check if the class is managed.
     *
     * @param string $class The class name
     *
     * @return bool
     */
    public function has($class);

    /**
     * Add a resource domain.
     *
     * @param DomainInterface $domain The resource domain
     */
    public function add(DomainInterface $domain);

    /**
     * Remove a resource domain.
     *
     * @param string $class The class name
     */
    public function remove($class);

    /**
     * Get all resource domains.
     *
     * @return DomainInterface[]
     */
    public function all();

    /**
     * Get a resource domain.
     *
     * @param string $class The class name
     *
     * @return DomainInterface
     *
     * @throws InvalidArgumentException When the class of resource domain is not managed
     */
    public function get($class);
}