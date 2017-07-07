<?php
/**
 * Created by PhpStorm.
 * User: dorianroos
 * Date: 01/12/2016
 * Time: 14:30
 */

namespace PhalconMedias\Api\Controllers;

use Phalcon\Http\Response;
use PhalconMedias\Api\Models\Comments;

class CommentController extends RestController
{
    /**
     * @return Response
     */
    public function getAction(): Response
    {
        $toto = Comments::find();
        var_dump($toto);
        die();
        $this->response->setJsonContent($comments);
        return $this->response;
    }

    /**
     * @param int $id
     * @return Response
     */
    public function getByIdAction(int $id): Response
    {
        $this->response->setJsonContent(array("status post" => "OK"));
        return $this->response;
    }

    /**
     * @return Response
     */
    public function saveAction(): Response
    {
        $this->response->setJsonContent(array("status post" => "OK"));
        return $this->response;
    }

    /**
     * @param int $id
     * @return Response
     */
    public function editAction(int $id): Response
    {
        $this->response->setJsonContent(array("status put" => "OK"));
        return $this->response;
    }

    /**
     * @param int $id
     * @return Response
     */
    public function deleteAction(int $id): Response
    {
        $this->response->setJsonContent(array("status delete" => "OK"));
        return $this->response;
    }
}