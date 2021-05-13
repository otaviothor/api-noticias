<?php

declare(strict_types=1);

namespace App\Models\News;

use Illuminate\Database\Eloquent\Model;
use App\Models\ImageNews;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class News
 * @package App\Models\Author
 */
class News extends Model
{
    use Sluggable;

    /**
     * @var string
     */
    protected $table = 'noticias';

    /**
     * @var string[]
     */
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

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array|string[]
     */
    public array $rules = [
        'autor_id' => 'required|numeric',
        'titulo' => 'required|min:20|max:255',
        'subtitulo' => 'required|min:20|max:255',
        'slug' => 'required',
        'descricao' => 'required|min:100',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ImagesNews::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'titulo',
                'onUpdate' => true
            ]
        ];
    }
}
