<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 26/02/16
 * Time: 10:27
 */

namespace CodeProject\Exceptions;

use Exception;
use Illuminate\Http\Response;
use CodeProject\Exceptions\Handler as BaseExceptionHandler;

class WhoopsHandler extends BaseExceptionHandler {

    /**
     * Render an exception into a response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e) {
        $whoops = new \Whoops\Run;

        if ($request->ajax())
        {
            $whoops->pushHandler(new \Whoops\Handler\JsonResponseHandler());
        }
        else
        {
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
        }

        return new Response($whoops->handleException($e), $e->getStatusCode(), $e->getHeaders());
    }
}