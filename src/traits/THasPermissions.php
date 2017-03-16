<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright 2010 SkeekS
 * @date 05.03.2017
 */
namespace skeeks\cms\traits;
use yii\base\Model;

/**
 * @property array $permissionNames;
 *
 * Class THasPermissions
 * @package skeeks\cms\traits
 */
trait THasPermissions
{
    /**
     * @var string
     */
    protected $_permissionNames = '';

    /**
     * @return array
     */
    public function getPermissionNames()
    {
        return $this->_permissionNames;
    }

    /**
     * @param array $permissionNames
     * @return $this
     */
    public function setPermissionNames(array $permissionNames = null)
    {
        $this->_permissionNames = $permissionNames;
        return $this;
    }


    /**
     * @var string
     */
    protected $_permissionName = '';

    /**
     * @return string
     */
    public function getPermissionName()
    {
        return (string) $this->_permissionName;
    }

    /**
     * @param string $permissionNames
     * @return $this
     */
    public function setPermissionName(string $permissionName = null)
    {
        $this->_permissionName = $permissionName;
        return $this;
    }

}