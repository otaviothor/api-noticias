<?php

declare(strict_types=1);
namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

class ValidateDataMiddleware
{
    /**
     * @param Request $request
     * @param \Closure $next
     * @return void
     */
    public function handle(Request $request, \Closure $next)
    {
        $validate = $this->validate($request);
        $response = [
            'status_code' => 400,
            'error' => true,
            'error_message' => 'Dados Inválidos',
            'error_description' => $validate->messages()
        ];

        if ($validate->passes()) {
            $response = $next($request);
        }

        return $response;
    }

    /**
     * @param string $namespace
     * @return Model|null
     */
    private function defineModel(string $namespace): ?Model
    {
        $model = null;

        if (class_exists($namespace)) {
            $model = new $namespace();
        }

        return $model;
    }

    /**
     * @param Request $request
     * @return void
     */
    private function validate(Request $request)
    {
        $alias = $request->route()[1]['as'];
        $model = $this->defineModel($alias);

        if (empty($model)) {
            throw new \InvalidArgumentException("A model {$alias} não existe");
        }

        return Validator::make(
            $request->toArray(),
            $model->rules
        );
    }
}
