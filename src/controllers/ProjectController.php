<?php

declare(strict_types=1);

namespace App\Controller;

final class ProjectController extends AppController
{
    public function index(): void
    {
        $projects = [
            ['id' => 1, 'name' => 'Projekt 1'],
            ['id' => 2, 'name' => 'Projekt 2'],
            ['id' => 3, 'name' => 'Projekt 3'],
        ];

        $this->render('projects', [
            'pageTitle' => 'Projekty',
            'projects' => $projects,
        ]);
    }

    public function show(int $id): void
    {
        $this->render('project', [
            'pageTitle' => 'Szczegóły projektu',
            'projectId' => $id,
        ]);
    }
}