<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Kanban extends BaseController
{
    protected $taskModel;

    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }

    public function index()
    {
        $data = [
            'backlogTasks' => $this->taskModel->getTasksByStatus('backlog'),
            'progressTasks' => $this->taskModel->getTasksByStatus('progress'),
            'doingTasks' => $this->taskModel->getTasksByStatus('doing'),
            'reviewTasks' => $this->taskModel->getTasksByStatus('review'),
            'doneTasks' => $this->taskModel->getTasksByStatus('done'),
        ];
        

        echo view('layouts/header');
        echo view('pages/kanban_board', $data);
        echo view('layouts/footer');
    }

    public function create()
    {        
        // Display the empty form for create
        echo view('layouts/header');
        echo view('pages/task_form_create');
        echo view('layouts/footer');
    }

    public function store() {
        $data = [
            'title' =>$this->request->getPost('title'),
            'description' =>$this->request->getPost('description') ?? '',
            'status' => $this->request->getPost('status'),
            'position' => 0 // Default position
        ];

        $this->taskModel->save($data);
        return redirect()->to('/kanban')->with('message', 'Task created successfully');
    }

    public function updatePosition()
    {
        if ($this->request->isAJAX()) {
            log_message('debug', 'Update position data: ' . json_encode($this->request->getPost()));
            
            $id = $this->request->getPost('id');
            $status = $this->request->getPost('status');
            $position = $this->request->getPost('position');

            try {
                $this->taskModel->update($id, [
                    'status' => $status,
                    'position' => $position
                ]);
                
                return $this->response->setJSON(['success' => true]);
            } catch (\Exception $e) {
                log_message('error', 'Failed to update position: ' . $e->getMessage());
                return $this->response->setStatusCode(500)->setJSON(['success' => false, 'error' => $e->getMessage()]);
            }
        }

        return $this->response->setStatusCode(400);
    }

    public function edit($id)
    {
        $data = $this->taskModel->find($id);
        
        // Display the form with task data
        echo view('layouts/header');
        echo view('pages/task_form_edit', ['task' => $data]);
        echo view('layouts/footer');
    }

    public function update($id)
    {
        $data = [
            'id' => $id,
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description') ?? '',
            'status' => $this->request->getPost('status')
        ];

        $this->taskModel->save($data);
        return redirect()->to('/kanban')->with('message', 'Task updated successfully');
    }

    public function delete($id)
    {
        $this->taskModel->delete($id);
        return redirect()->to('/kanban')->with('message', 'Task deleted successfully');
    }
}