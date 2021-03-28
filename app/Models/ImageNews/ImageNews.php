<?php

declare(strict_types=1);

namespace App\Models\Author;

use Illuminate\Database\Eloquent\Model;

class ImageNews extends Model
{
    protected $table = 'imagens_noticias';

    protected $fillable = [
        'noticia_id',
        'imagem',
        'descricao',
        'criado_em',
    ];

    public $timestamps = false;

    public array $rules = [
        'noticia_id' => 'required|numeric',
        'imagem' => 'required',
        'descricao' => 'required|min:10|max:255',
    ];
}
