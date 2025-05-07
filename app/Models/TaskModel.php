<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table      = 'tasks';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    
    protected $allowedFields = ['title', 'description', 'status', 'position'];
    
    // Add created_at and updated_at to allowedFields if you're using them
    protected $useTimestamps = true;  // Enable timestamps
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    
    public function getTasksByStatus($status)
    {
        return $this->where('status', $status)
                    ->orderBy('position', 'ASC')
                    ->findAll();
    }
}