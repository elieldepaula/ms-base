<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     * @var Request
     */
    public $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function input($key = '')
    {
        return $this->request->input($key);
    }

    /**
     * Set response for the service.
     *
     * @param $body Body of the response.
     * @param int $code Status code
     * @param bool $success Succcess status true|false
     * @return array
     */
    public function setResponse($body, int $code = 200, bool $success = true) : array
    {
        return ['success' => $success, 'code' => $code, 'body' => $body];
    }

    /**
     * Set error response for the service.
     *
     * @todo Verificar se não é melhor remover a tipagem da Exception para algo mais flexível.
     *
     * @param \Exception $error Exception object.
     * @param bool $success Success status true|false
     * @return array
     */
    public function setError(\Exception $error, bool $success = true) : array
    {
        return ['success' => $success, 'error' => ['code' => $error->getCode(), 'message' => $error->getMessage()]];
    }

}
