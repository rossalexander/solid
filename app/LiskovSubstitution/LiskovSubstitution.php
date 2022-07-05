<?php
/**
 * Any implementation of an abstraction (interface) should be substitutable in any place that the abstraction is accepted.
 *
 * 1. Signature must match
 * 2. Preconditions can't be greater
 * 3. Post conditions at least equal to
 * 4. Exception types must match
 */

interface LessonRepositoryInterface
{
    public function getAll(): array; // always specify return type of interface methods
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        // return through filesystem
        return [];
    }
}

class DBLessonRepository implements LessonRepositoryInterface
{
    public function getAll(): array
    {
        // return through database
        return Lesson::all()->toArray(); // explicitly cast to array to avoid "Collection is not iterable" error
    }
}

function foo(LessonRepositoryInterface $lesson)
{
    $lesson = $lesson->getAll();
}
