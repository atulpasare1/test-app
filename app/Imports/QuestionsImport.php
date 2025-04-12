<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class QuestionsImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
{
    protected $subjectId;
    protected $lessionId;
    protected $topicId;
    public $importedCount = 0;

    public function __construct($subjectId, $lessionId, $topicId)
    {
        $this->subjectId = $subjectId;
        $this->lessionId = $lessionId;
        $this->topicId = $topicId;
    }

    public function model(array $row)
    {
        $this->importedCount++;

        // Ensure options are not empty
        $options = [
            $row['option1'],
            $row['option2'],
            $row['option3'],
            $row['option4'],
            $row['option5'],
        ];

        // Filter out empty options and ensure at least 1 option exists
        $options = array_filter($options, fn($value) => !empty($value));

        if (empty($options)) {
            // Handle the case where no options are provided (optional: log, throw error, etc.)
            // For now, we return null or handle the case
            return null;
        }

        // Ensure question, correct_answer, difficulty_level, and other fields are not empty
        if (empty($row['question']) || empty($row['correct_answer']) || empty($row['difficulty_level'])) {
            // Handle the case where required fields are empty (optional: log, throw error, etc.)
            return null;
        }

        return new Question([
            'code' => uniqid('Q'), // Generating a unique question code
            'question' => $row['question'],
            'options' => json_encode(array_values($options)), // Ensure options are saved as JSON (non-empty)
            'correct_answer' => $row['correct_answer'],
            'default_marks' => $row['default_marks'] ?? 1,
            'default_time' => $row['default_time_to_solve'] ?? 60,
            'difficulty_level_id' => $this->mapDifficultyLevel($row['difficulty_level']),
            'hint' => !empty($row['hint']) ? $row['hint'] : null,
            'solution' => !empty($row['solution']) ? $row['solution'] : null,
            'is_active' => 1,
            'subject_id' => $this->subjectId,
            'lession_id' => $this->lessionId,
            'topic_id' => $this->topicId,
            'skill_id' => 1, // Set a default or dynamically fetch
        ]);
    }

    private function mapDifficultyLevel($level)
    {
        $levels = [
            'VERYEASY' => 1,
            'EASY' => 2,
            'MEDIUM' => 3,
            'HARD' => 4,
            'VERYHARD' => 5,
        ];
        return $levels[strtoupper($level)] ?? 1;
    }

    public function batchSize(): int
    {
        return 100;
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
