<?php

/**
 * Created by PhpStorm.
 * User: pault_000
 * Date: 25/08/2016
 * Time: 20:07
 */

namespace App\Controller;

require_once(ROOT . '\vendor' . DS  . 'paolo' . DS . 'cakephp' . DS . 'Validator.php');

use App\Model\Table\ObjectsTable;
use Validator;


class ObjectsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function index() {
        $objects = $this->Objects->find('all');
        $this->set('objects', $objects);
    }

    public function errors($object) {
        if($object->errors()) {
            $buff = Validator::concatValidationErrors($object->errors());
            $this->Flash->error($buff);
            return true;
        }
        return false;
    }

    public function add() {
        if($this->request->is('post')) {
            $object = $this->Objects->newEntity($this->request->data);
            if($this->errors($object)) {
                return $this->redirect(['action' => 'add']);
            }
            if($this->Objects->save($object)) {
                $this->Flash->success('Object added successfully');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Error adding Object');
            }
            $this->set('object', $object);
        }
    }

    public function edit($id) {
        $object = $this->Objects->get($id);
        if($this->request->is('post')) {
            $object = $this->Objects->patchEntity($object, $this->request->data);
        }
        $this->set('object', $object);
    }

}