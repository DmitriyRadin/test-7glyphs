<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            $message = $exception->getMessage();
            return response(['message' => $message ? $message : 'Unknown URL'], 404);
        }

        $code = $this->getExceptionHttpCode($exception);

        if($code !== null) {
            return response(['message' => $exception->getMessage()], $code);
        }

        return parent::render($request, $exception);
    }

    /**
     * Получить статус для HTTP запроса на основе переданного исключения
     *
     * @param Exception $exception
     * @return mixed
     */
    protected function getExceptionHttpCode(Exception $exception)
    {
        $classMap = [
            AuthenticationException::class => 401,
        ];

        return data_get($classMap, get_class($exception));
    }
}
