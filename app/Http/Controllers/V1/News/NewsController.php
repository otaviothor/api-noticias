<?php

declare(strict_types=1);

namespace App\Http\Controllers\V1\News;

use App\Http\Controllers\AbstractController;
use App\Services\News\NewsService;

/**
 * Class NewsController
 * @package App\Http\Controllers\V1\News
 */
class NewsController extends AbstractController
{
    /**
     * @var array|string[]
     */
    protected array $searchFields = [
        'titulo',
        'slug'
    ];

    /**
     * NewsController constructor.
     * @param NewsService $service
     */
    public function __construct(NewsService $service)
    {
        parent::__construct($service);
    }
}
