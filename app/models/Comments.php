<?php
/**
 * Created by PhpStorm.
 * User: dorianroos
 * Date: 05/12/2016
 * Time: 10:27
 */
namespace PhalconMedias\Api\Models;

use Phalcon\Mvc\MongoCollection;

class Comments extends MongoCollection
{
    /** @var  String */
    private $content;

    /**
     * @return String
     */
    public function getContent(): String
    {
        return $this->content;
    }

    /**
     * @param String $content
     */
    public function setContent(String $content)
    {
        $this->content = $content;
    }
}