<?php
/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

use PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\RequestSqlException;

class AddRequestSqlCommand
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $sql;

    /**
     * @param string $name
     * @param string $sql
     *
     * @throws RequestSqlException
     */
    public function __construct($name, $sql)
    {
        $this
            ->setName($name)
            ->setSql($sql)
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * Set Request SQL name
     *
     * @param string $name
     *
     * @return self
     */
    private function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set Request SQL query
     *
     * @param string $sql
     *
     * @return $this
     *
     * @throws RequestSqlException
     */
    private function setSql($sql)
    {
        if (empty($sql)) {
            throw new RequestSqlException('RequestSql name cannot be empty');
        }

        $this->sql = $sql;

        return $this;
    }
}
