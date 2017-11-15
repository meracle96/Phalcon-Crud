<?php

class MahasiswaController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
			$model = new Mahasiswa();

			$this->view->mahasiswas = $model->find();
    }

    public function createAction()
    {
    	$model = new Mahasiswa();

    	$model->nama = $this->request->getPost('nama');
    	$model->alamat = $this->request->getPost('alamat');

    	$model->save();

    	$this->response->redirect('mahasiswa');
    }

    public function editAction($id)
    {
    	$model = new Mahasiswa();

    	$this->view->mahasiswa = $model->findFirst($id);
    }

    public function updateAction($id)
    {
    	$model = new Mahasiswa();

    	$mahasiswa = $model->findFirst($id);

    	$mahasiswa->nama = $this->request->getPost('nama');
    	$mahasiswa->alamat = $this->request->getPost('alamat');

    	$mahasiswa->save();

    	$this->response->redirect('mahasiswa');
    }

    public function deleteAction($id)
    {
    	$model = new Mahasiswa();

    	$mahasiswa = $model->findFirst($id);
    	$mahasiswa->delete();

    	$this->response->redirect('mahasiswa');
    }

}

