<?php

declare(strict_types=1);

namespace App\Models\Author;

use Illuminate\Database\Eloquent\Model;
use App\Models\ImageNews;

class News extends Model
{
    protected $table = 'noticias';

    protected $fillable = [
        'autor_id',
        'titulo',
        'subtitulo',
        'slug',
        'descricao',
        'ativo',
        'publicada_em',
        'criado_em',
    ];

    public $timestamps = false;

    public array $rules = [
        'autor_id' => 'required|numeric',
        'titulo' => 'required|min:20|max:255',
        'subtitulo' => 'required|min:20|max:255',
        'slug' => 'required',
        'descricao' => 'required|min:100',
    ];

    public function images()
    {
        return $this->hasMany(ImagesNews::class);
    }
}
