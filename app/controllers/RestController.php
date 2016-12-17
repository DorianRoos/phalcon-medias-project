<?php
/**
 * Created by PhpStorm.
 * User: dorianroos
 * Date: 18/11/2016
 * Time: 16:32
 */
namespace PhalconMedias\Api\Controllers;


use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;

/**
 * Class RestController
 * @package PhalconMedias\Api\Controllers
 */
abstract class RestController extends Controller
{
    public function initialize()
    {
        $this->response->setContentType('application/json', 'UTF-8');
    }

    /**
     * @return Response
     */
    public abstract function getAction(): Response;

    /**
     * @param int $id
     * @return Response
     */
    public abstract function getByIdAction(int $id): Response;

    /**
     * @return Response
     */
    public abstract function saveAction(): Response;

    /**
     * @param int $id
     * @return Response
     */
    public abstract function editAction(int $id): Response;

    /**
     * @param int $id
     * @return Response
     */
    public abstract function deleteAction(int $id): Response;
}