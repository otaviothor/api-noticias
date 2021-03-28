<?php

declare(strict_types=1);

namespace App\Models\Author;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;

class Author extends Model
{
    protected $table = 'autores';

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'senha',
        'sexo',
        'ativo',
        'criado_em',
    ];

    protected $hidden = [
        'senha'
    ];

    public $timestamps = false;

    public array $rules = [
        'nome' => 'required|min:2|max:255|alpha',
        'sobrenome' => 'required|min:2|max:255|alpha',
        'email' => 'required|email|max:255|email:rfc,dns',
        'senha' => 'required|between:6,12',
        'sexo' => 'required|alpha|max:1',
    ];

    public function news()
    {
        return $this->hasMany(News::class);
    }
}
