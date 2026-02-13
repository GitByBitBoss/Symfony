<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LessonController extends AbstractController
{
    private function getMockLessons(): array
    {
        return [
    1 => [
        'id' => 1,
        'title' => 'Verkehrsregeln',
        'subject' => 'Verkehrsrecht',
        'instructor' => 'Max Mustermann',
        'date' => '2026-03-01',
        'description' => 'Grundlagen der Straßenordnung und wichtige Verkehrszeichen.'
    ],
    2 => [
        'id' => 2,
        'title' => 'Gefahren erkennen',
        'subject' => 'Verkehrssicherheit',
        'instructor' => 'Anna Berger',
        'date' => '2026-03-05',
        'description' => 'Defensives Fahren und frühzeitiges Erkennen von Risiken.'
    ],
    3 => [
        'id' => 3,
        'title' => 'Vorfahrt richtig verstehen',
        'subject' => 'Verkehrsrecht',
        'instructor' => 'Lukas Steiner',
        'date' => '2026-03-10',
        'description' => 'Regeln zu Kreuzungen, Kreisverkehren und Vorrang.'
    ],
    4 => [
        'id' => 4,
        'title' => 'Abstand halten',
        'subject' => 'Sicherheitstraining',
        'instructor' => 'Maria Huber',
        'date' => '2026-03-15',
        'description' => 'Sicherheitsabstände bei verschiedenen Geschwindigkeiten.'
    ],
    5 => [
        'id' => 5,
        'title' => 'Autobahnfahren',
        'subject' => 'Praxis',
        'instructor' => 'Thomas Wagner',
        'date' => '2026-03-20',
        'description' => 'Richtiges Verhalten beim Auffahren, Spurwechsel und Überholen.'
    ],
    6 => [
        'id' => 6,
        'title' => 'Verhalten bei Unfällen',
        'subject' => 'Notfallmanagement',
        'instructor' => 'Sarah Klein',
        'date' => '2026-03-25',
        'description' => 'Erste Schritte und korrektes Verhalten bei Verkehrsunfällen.'
    ],
];

    }

    #[Route('/lessons', name: 'app_lessons')]
    public function listLessons(): Response
    {
        $lessons = $this->getMockLessons();
        return $this->render('lessons/all_lessons.html.twig', [
            'lessons' => $lessons
        ]);
    }


    #[Route('/lessons/{id}', name: 'app_lesson_detail', requirements: ['id' => '\d+'])]
    public function listLessonDetail(int $id): Response
    {
        $lessons = $this->getMockLessons();
        $lesson = $lessons[$id];

        return $this->render('lessons/detailed_lesson.html.twig', [
            'lesson' => $lesson
        ]);
    }
    

    #[Route('/lessons/current', name: 'current_lesson')]
    public function current_lesson(): Response
    {
        $lesson = $this->getMockLessons()[1];

        return $this->render('lessons/current_lesson.html.twig', [
            'lesson' => $lesson,
        ]);
    }
}
