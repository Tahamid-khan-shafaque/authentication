<?php
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function register()
    {
        if ($this->request->is('post')) {
            $user = $this->Users->newEntity($this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Registration successful. Please login.'));
                return $this->redirect(['action' => 'login']);
            }
            $this->Flash->error(__('Registration failed. Please try again.'));
        }
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Authentication->getResult()->getData();
            if ($user) {
                $this->Flash->success(__('Login successful.'));
                return $this->redirect(['action' => 'view']);
            }
            $this->Flash->error(__('Invalid username or password. Please try again.'));
        }
    }

    public function view()
    {
        $user = $this->Authentication->getIdentity();
        $this->set(compact('user'));
    }

    public function logout()
    {
        $this->Authentication->logout();
        $this->Flash->success(__('Logout successful.'));
        return $this->redirect(['action' => 'login']);
    }
}
