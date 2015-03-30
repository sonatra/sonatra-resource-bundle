<?php

/*
 * This file is part of the Sonatra package.
 *
 * (c) François Pluchino <francois.pluchino@sonatra.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonatra\Bundle\ResourceBundle\Tests;

use Sonatra\Bundle\ResourceBundle\ResourceListStatutes;

/**
 * @author François Pluchino <francois.pluchino@sonatra.com>
 */
class ResourceListStatutesTest extends \PHPUnit_Framework_TestCase
{
    public function testInstantiationOfClass()
    {
        $this->setExpectedException('Sonatra\Bundle\ResourceBundle\Exception\ClassNotInstantiableException');
        new ResourceListStatutes();
    }
}