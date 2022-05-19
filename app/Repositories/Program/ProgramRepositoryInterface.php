<?php

namespace App\Repositories\Program;


interface ProgramRepositoryInterface
{
    public function createProgram($data);
    public function updateProgram($data);
    public function deleteProgram($id);
    public function getAllPrograms();
    public function getSpecificProgram($id);
}
