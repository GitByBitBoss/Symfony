<?php

namespace App\Service;

final class LessonService
{
    private array $lessons = [
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

    public function getLessons():array 
    {
        return $this->lessons;
    }

    public function getLessonById(int $id): array
    {
        return $this->lessons[$id];
    }

}
