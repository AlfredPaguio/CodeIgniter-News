<?php

namespace App\Controllers;

use App\Models\NewsModel;


class Home extends BaseController
{

    
    public function index(): string
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(null, 5),
        ];

        return view('pages/home', $data);
    }
}
