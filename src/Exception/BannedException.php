<?php
/**
 * Created by PhpStorm.
 * User: red
 * Date: 08.01.17
 * Time: 20:46.
 */

namespace Raulr\GooglePlayScraper\Exception;

class BannedException extends RequestException
{
    protected $message = 'Looks like Google blocked us :(';
}
