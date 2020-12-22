<?php

namespace Arpanext\SwaggerUi\App\Http\Controllers\Consoles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $consoles = array_map(function ($key) {
            return (object) [
                'id' => $key,
            ];
        }, array_keys(config('vendor.arpanext.swagger-ui.consoles')));

        return view('Arpanext/SwaggerUi::consoles.index', [
            'consoles' => $consoles,
        ]);
    }
}
