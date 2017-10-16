<?php

namespace Consultas\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/usuarios/search',
        '/usuarios/store',
        'equipos/search',
        'aplicativos/store',
        'login/store',
    ];
}
