<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    protected $rules = [
        'title' => 'required|max_length[255]|min_length[3]',
        'body'  => 'required|max_length[5000]|min_length[10]',
    ];

    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        // return view('templates/header', $data)
        //     . view('templates/navbar')
        //     . view('news/index')
        //     . view('templates/footer');
        //sort to ascending order
        asort($data);
        return view('news/index', $data);
    }

    public function view($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        // return view('templates/header', $data)
        //     . view('templates/navbar')
        //     . view('news/view')
        //     . view('templates/footer');
        return view('news/view', $data);
    }

    public function create()
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            // return view('templates/header', ['title' => 'Create a news item'])
            //     . view('templates/navbar')
            //     . view('news/create')
            //     . view('templates/footer');
            return view('news/create', ['title' => 'Create a news item']);
        }

        $post = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, $this->rules)) {
            // The validation fails, so returns the form.
            // return view('templates/header', ['title' => 'Create a news item'])
            //     . view('templates/navbar')
            //     . view('news/create')
            //     . view('templates/footer');
            return view('news/create', ['title' => 'Create a news item']);
        }

        $model = model(NewsModel::class);
        $validatedData = $this->validator->getValidated();
        // $model->save([
        //     'title' => $post['title'],
        //     'slug'  => url_title($post['title'], '-', true),
        //     'body'  => $post['body'],
        // ]);
        $model->save([
            'title' => $validatedData['title'],
            'slug'  => url_title($validatedData['title'], '-', true),
            'body'  => $validatedData['body'],
        ]);

        return view('news/success', ['title' => 'Create a news item']);
    }
}
