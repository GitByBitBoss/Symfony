<?php

namespace App\Controller;

use App\Service\LessonService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LessonController extends AbstractController
{
    #[Route('/lessons', name: 'app_lessons')]
    public function listLessons(LessonService $lessonService): Response
    {
        $lessons = $lessonService->getLessons();
        return $this->render('lessons/all_lessons.html.twig', [
            'lessons' => $lessons
        ]);
    }


    #[Route('/lessons/{id}', name: 'app_lesson_detail', requirements: ['id' => '\d+']) ]
    public function listLessonDetail(int $id, LessonService $lessonService): Response
    {
        $lesson = $lessonService->getLessonById($id);
        
        return $this->render('lessons/detailed_lesson.html.twig', [
            'lesson' => $lesson
        ]);
    }
    

    #[Route('/lessons/current', name: 'current_lesson')]
    public function current_lesson(LessonService $lessonService): Response
    {
        $lesson = $lessonService->getLessonById(1);

        return $this->render('lessons/current_lesson.html.twig', [
            'lesson' => $lesson,
        ]);
    }
}
