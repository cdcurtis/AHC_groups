<?php
App::uses('AppController', 'Controller');
/**
 * GroupWiths Controller
 *
 * @property GroupWith $GroupWith
 * @property PaginatorComponent $Paginator
 */
class GroupWithsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GroupWith->recursive = 0;
		$this->set('groupWiths', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GroupWith->exists($id)) {
			throw new NotFoundException(__('Invalid group with'));
		}
		$options = array('conditions' => array('GroupWith.' . $this->GroupWith->primaryKey => $id));
		$this->set('groupWith', $this->GroupWith->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroupWith->create();
			if ($this->GroupWith->save($this->request->data)) {
				$this->Session->setFlash(__('The group with has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group with could not be saved. Please, try again.'));
			}
		}
		$studentPreferences = $this->GroupWith->StudentPreference->find('list');
		$this->set(compact('studentPreferences'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->GroupWith->exists($id)) {
			throw new NotFoundException(__('Invalid group with'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GroupWith->save($this->request->data)) {
				$this->Session->setFlash(__('The group with has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group with could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupWith.' . $this->GroupWith->primaryKey => $id));
			$this->request->data = $this->GroupWith->find('first', $options);
		}
		$studentPreferences = $this->GroupWith->StudentPreference->find('list');
		$this->set(compact('studentPreferences'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GroupWith->id = $id;
		if (!$this->GroupWith->exists()) {
			throw new NotFoundException(__('Invalid group with'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GroupWith->delete()) {
			$this->Session->setFlash(__('The group with has been deleted.'));
		} else {
			$this->Session->setFlash(__('The group with could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->GroupWith->recursive = 0;
		$this->set('groupWiths', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->GroupWith->exists($id)) {
			throw new NotFoundException(__('Invalid group with'));
		}
		$options = array('conditions' => array('GroupWith.' . $this->GroupWith->primaryKey => $id));
		$this->set('groupWith', $this->GroupWith->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->GroupWith->create();
			if ($this->GroupWith->save($this->request->data)) {
				$this->Session->setFlash(__('The group with has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group with could not be saved. Please, try again.'));
			}
		}
		$studentPreferences = $this->GroupWith->StudentPreference->find('list');
		$this->set(compact('studentPreferences'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->GroupWith->exists($id)) {
			throw new NotFoundException(__('Invalid group with'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->GroupWith->save($this->request->data)) {
				$this->Session->setFlash(__('The group with has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group with could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GroupWith.' . $this->GroupWith->primaryKey => $id));
			$this->request->data = $this->GroupWith->find('first', $options);
		}
		$studentPreferences = $this->GroupWith->StudentPreference->find('list');
		$this->set(compact('studentPreferences'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->GroupWith->id = $id;
		if (!$this->GroupWith->exists()) {
			throw new NotFoundException(__('Invalid group with'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GroupWith->delete()) {
			$this->Session->setFlash(__('The group with has been deleted.'));
		} else {
			$this->Session->setFlash(__('The group with could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
