<?php
/**
 * Created by PhpStorm.
 * User: dorianroos
 * Date: 18/11/2016
 * Time: 16:32
 */
namespace Perso\Controllers;


use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;

/**
 * Class RestController
 * @package Perso\Controllers
 */
abstract class RestController extends Controller
{
    public function initialize()
    {
        $this->response->setContentType('application/json', 'UTF-8');
    }

    /**
     * @Get("/")
     * @return Response
     */
    public abstract function indexAction(): Response;

    /**
     * @Get("/{id:[0-9]+}")
     * @param int $id
     * @return Response
     */
    //public abstract function getByIdAction(int $id): Response;

    /**
     * @Post("/")
     * @return Response
     */
    //public abstract function saveAction(): Response;

    /**
     * @Put("/{id:[0-9]+}")
     * @param int $id
     * @return Response
     */
    //public abstract function editAction(int $id): Response;

    /**
     * @Delete("/{id:[0-9]+}")
     * @param int $id
     * @return Response
     */
    //public abstract function deleteAction(int $id): Response;
}