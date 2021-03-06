<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Service
 */

namespace ZendService\Amazon\Authentication\Exception;

use ZendService\Amazon\Exception;

/**
 * @category   Zend
 * @package    Zend_Service_Amazon
 * @subpackage Authentication
 */
class InvalidArgumentException extends Exception\InvalidArgumentException implements ExceptionInterface
{
}
