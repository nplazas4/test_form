<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
      $users = $this->Users->newEntity();
      // Condicional que valida si el nuevo registrop es enviado mediante un método POST.
      if ($this->request->is('post')) {
          // Matriz que contiene los datos del registro a guardar.
          $users = $this->Users->patchEntity($users, $this->request->getData());
          // condicional que valida si el riesgos fue guardado en la BD local.
          if ($this->Users->save($users)) {
              // Si el registro es guardado da el aviso de confirmación y redirecciona al usuario a la pestaña index(Lista de riesgos).
              $this->Flash->success(__('El usuario ha sido creado.'));
              return $this->redirect(['action' => 'index']);
          }
          // De ser lo contrario se mostrara el aviso error a la solicitud save.
          $this->Flash->error(__('El usuario no ha sido creado. Por favor, intenta de nuevo.'));
      }
      // Envia un arreglo de la variasble $risks.
      $this->set(compact('users'));
    }
}
