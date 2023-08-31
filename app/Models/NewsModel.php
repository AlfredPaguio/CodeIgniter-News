<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table         = 'news';
    protected $allowedFields = ['title', 'slug', 'body', 'updated_at', 'created_at'];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getNews($slug = false, $limit = 0, $orderBy = 'updated_at', $orderDirection = 'desc')
    {
        if ($slug === false || $slug === null) {
            return $this->orderBy($orderBy, $orderDirection)
                ->findAll($limit);
        }

        return $this->where(['slug' => $slug])
            ->orderBy($orderBy, $orderDirection)
            ->first();
    }
}
