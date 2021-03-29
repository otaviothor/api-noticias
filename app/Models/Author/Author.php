<?php

declare(strict_types=1);

namespace App\Models\Author;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

/**
 * Class Author
 * @package App\Models\Author
 */
class Author extends Model
{
    /**
     * @var string
     */
    protected $table = 'autores';

    /**
     * @var string[]
     */
    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'sexo',
        'ativo',
        'criado_em',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'senha'
    ];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array|string[]
     */
    public array $rules = [
        'nome' => 'required|min:2|max:255|alpha',
        'sobrenome' => 'required|min:2|max:255|alpha',
        'email' => 'required|email|max:255|email:rfc,dns',
        'senha' => 'required|between:6,12',
        'sexo' => 'required|alpha|max:1',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
