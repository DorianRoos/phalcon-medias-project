<?php
/**
 * Created by PhpStorm.
 * User: dorianroos
 * Date: 28/11/2016
 * Time: 17:45
 */

namespace PhalconMedias\Api\Controllers;

use Phalcon\Http\Response;
use Phalcon\Mvc\Controller;

/**
 * Class TestAccessController
 * @package PhalconMedias\Api\Controllers
 * @RoutePrefix("/api/testaccess")
 */
class TestAccessController extends Controller
{
    /**
     * @Get("/")
     * @return Response
     */
    public function indexAction(): Response
    {
        if(true){
            $this->response->setJsonContent(array("status" => "Toto"));
            $this->response->setStatusCode(200, "OK");
        } else {
            $this->response->setStatusCode(403, "Forbidden");
        }


        return $this->response;
    }
}