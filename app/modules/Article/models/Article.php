<?php
/**
 * This file is part of Vegas package
 *
 * @author Slawomir Zytko <slawomir.zytko@gmail.com>
 * @copyright Amsterdam Standard Sp. Z o.o.
 * @homepage https://github.com/vegas-cmf
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
namespace Article\Models;

use Vegas\Db\Decorator\CollectionAbstract;

class Article extends CollectionAbstract
{
    public function getSource()
    {
        return 'vegas_articles';
    }
}