<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace GbiliSymlinkModule\View\Helper;

/**
 * View helper for retrieving stuff by identifier 
 */
class Symlink extends \Zend\View\Helper\AbstractHelper
{
    /**
     * Association of identifiers to content
     * @var array
     */
    protected $symlinks;

    /**
     * Given an identifier, return the associated content
     *
     * @param string
     * @return mixed
     */
    public function __invoke($identifier)
    {
        if (!isset($this->symlinks[$identifier]) {
            throw new Exception('Identifier: ' . print_r($identifier, true) . ' does not exit');
        }
        return $this->symlinks[$identifier];
    }

    public function setSymlinks(array $symlinks)
    {
        $this->symlinks = $symlinks;
        return $this;
    }
}
