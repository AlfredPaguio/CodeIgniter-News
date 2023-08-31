<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table         = 'news';
    protected $allowedFields = ['title', 'slug', 'body', 'updated_at', 'created_at'];

    public function getNews($slug = false, $limit = 0)
    {
        if ($slug === false) {
            return $this->findAll($limit);
        }

        return $this->where(['slug' => $slug])->first();
    }

    
}
