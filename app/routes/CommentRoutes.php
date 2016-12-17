<?php
/**
 * Created by PhpStorm.
 * User: dorianroos
 * Date: 29/11/2016
 * Time: 09:40
 */
namespace PhalconMedias\Api\Routes;

use Phalcon\Mvc\Router\Group as RouterGroup;

/**
 * Class CommentRoutes
 * @package PhalconMedias\Api\Routes
 */
class CommentRoutes extends RouterGroup
{
    public function initialize()
    {
        $this->add(
            "/api/comment",
            [
                "namespace" => "PhalconMedias\\Api\\Controllers",
                "controller" => "Comment",
                "action" => "get",
            ]
        )->via(
            [
                "GET"
            ]
        );

        $this->add(
            "/api/comment/{id:[0-9]+}",
            [
                "namespace" => "PhalconMedias\\Api\\Controllers",
                "controller" => "Comment",
                "action" => "getById",
            ]
        )->via(
            [
                "GET"
            ]
        );

        $this->add(
            "/api/comment",
            [
                "namespace" => "PhalconMedias\\Api\\Controllers",
                "controller" => "Comment",
                "action" => "save",
            ]
        )->via(
            [
                "POST"
            ]
        );

        $this->add(
            "/api/comment/{id:[0-9]+}",
            [
                "namespace" => "PhalconMedias\\Api\\Controllers",
                "controller" => "Comment",
                "action" => "edit",
            ]
        )->via(
            [
                "PUT"
            ]
        );

        $this->add(
            "/api/comment/{id:[0-9]+}",
            [
                "namespace" => "PhalconMedias\\Api\\Controllers",
                "controller" => "Comment",
                "action" => "delete",
            ]
        )->via(
            [
                "DELETE"
            ]
        );
    }
}