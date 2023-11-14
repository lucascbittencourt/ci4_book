<?php

namespace App\Controllers;

use CodeIgniter\Config\Services;
use CodeIgniter\Controller;

class Blog extends Controller
{
    public function index(): void
    {
        $parser = Services::parser();
        $data = [
            'page_title' => 'Livro CodeIgniter 4',
            'message' => 'Minha primeira view com o CodeIgniter 4',
            'contents' => [
                [
                    'title' => 'Content #1',
                    'text' => 'Text to content #1',
                ],
                [
                    'title' => 'Content #2',
                    'text' => 'Text to content #2',
                ],
                [
                    'title' => 'Content #3',
                    'text' => 'Text to content #3',
                ],
            ],
        ];

        echo $parser->setData($data)->render('Header');
        echo $parser->setData($data)->render('Blog/Index', [
            'cascadeData' => true,
        ]);
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
