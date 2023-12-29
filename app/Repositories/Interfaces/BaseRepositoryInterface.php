<?php

namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    public function findById($id);
    public function findAll();
}
