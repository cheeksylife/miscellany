<?php

namespace App\Exceptions;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use Http\Client\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        \League\OAuth2\Server\Exception\OAuthServerException::class,
        \Doctrine\DBAL\Driver\PDOException::class,
        \Symfony\Component\Console\Exception\NamespaceNotFoundException::class,
        \Symfony\Component\Console\Exception\CommandNotFoundException::class,
        NotFoundHttpException::class,
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
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        if (app()->bound('sentry') && $this->shouldReport($exception)) {
            app('sentry')->captureException($exception);
        }

        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param Throwable $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Symfony\Component\HttpFoundation\Response
     * @throws Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
            return redirect()
                ->back()
                ->withInput($request->all())
                ->withErrors(trans('redirects.session_timeout'));
        }

        elseif ($exception instanceof HttpException && $exception->getStatusCode() == 403 && auth()->guest()) {
            session()->put('login_redirect', $request->getRequestUri());
        }

        elseif ($exception instanceof MaintenanceModeException) {
            return response()->view('errors.maintenance', [
                'message' => $exception->getMessage(),
                'retry' => $exception->retryAfter
            ], 500);
        }

        return parent::render($request, $exception);
    }

    /**
     * Unauthenticated exception handler
     * @param \Illuminate\Http\Request $request
     * @param AuthenticationException $exception
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->is('api/*')
            ? response()->json([
                'message' => 'Unauthenticated (missing the authorization token in the request headers, or the token is invalid).',
                'documentation' => 'https://kanka.io/en/docs/1.0/setup#authentication'
            ], 401)
            : redirect()->guest(route('login'));

    }
}
