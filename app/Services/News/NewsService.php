<?php

declare(strict_types=1);

namespace App\Services\News;

use App\Services\AbstractService;
use Illuminate\Support\Str;

/**
 * Class NewsService
 * @package App\Services\News
 */
class NewsService extends AbstractService
{
    /**
     * @param int $authorId
     * @param int $limit
     * @param array $orderBy
     * @return array
     */
    public function findByAuthor(int $authorId, int $limit = 10, array $orderBy): array
    {
        return $this->repository->findByAuthor($authorId, $limit, $orderBy);
    }

    /**
     * @param string $param
     * @return array
     */
    public function findBy(string $param): array
    {
        return $this->repository->findBy($param);
    }

    /**
     * @param string $param
     * @return bool
     */
    public function deleteBy(string $param): bool
    {
        return $this->repository->deleteBy($param);
    }

    /**
     * @param string $param
     * @param array $data
     * @return bool
     */
    public function editBy(string $param, array $data): bool
    {
        return $this->repository->editBy($param, $data);
    }

    /**
     * @param int $authorId
     * @return bool
     */
    public function deleteByAuthor(int $authorId): bool
    {
        return $this->repository->deleteByAuthor($authorId);
    }

    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        $data['slug'] = Str::slug($data['titulo']);
        return $this->repository->deleteByAuthor($authorId);
    }

    /**
     * @param string $param
     * @param array $data
     * @return bool
     */
    public function editBy(string $param, array $data): bool
    {
        if (isset($data['titulo'])) {
            $data['slug'] = Str::slug($data['titulo']);
        }

        return $this->repository->deleteByAuthor($authorId);
    }
}
