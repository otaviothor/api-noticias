<?php

declare(strict_types=1);

namespace App\Services\Author;

use App\Services\AbstractService;

/**
 * Class AuthorService
 * @package App\Services\Author
 */
class AuthorService extends AbstractService
{
    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        $data['senha'] = encrypt($data['senha']);
        return $this->repository->create($data);
    }
}
