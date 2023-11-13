<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Blog extends Controller
{
    public function index(): void
    {
        $data = [
            'page_title' => 'Livro CodeIgniter 4',
            'message' => 'Minha primeira view com o CodeIgniter 4',
        ];

        echo view('Header', $data, [
            'cache' => 60,
            'cache_name' => 'header_cache',
        ]);
        echo view('Blog/Index', $data);
        echo view(
            name: 'Footer',
            options: [
                'cache' => 60,
                'cache_name' => 'footer_cache',
            ]
        );
    }

    public function posts($categoria): void
    {
        echo "Esse método pode exibir uma lista de posts do blog na $categoria";
    }
}
