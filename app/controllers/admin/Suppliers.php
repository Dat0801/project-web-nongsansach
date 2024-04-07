<?php
class Suppliers extends Controller{

    public $data = [];
    public $suppliers;

    public function __construct(){
        $this->suppliers = $this->model('SuppliersModel');
    }

    public function index() {
        $this->data['content'] = '/admin/suppliers/ViewSuppliers'; //Nhìn theo đường đẫn 
        $this->data['title'] = 'Danh mục các nhà cung cấp';
        $datasuppliers = $this->suppliers->getsuppliersList();
        $this->data['sub_content']['list'] = $datasuppliers;
        $this->data['sub_content']['suppliers_model'] = $this->suppliers;
        $this->render('layouts/admin_layout', $this->data);
    }

    public function editSuppliers() {
        $this->data['content'] = '/admin/suppliers/EditSuppliers';
        $this->data['title'] = 'Trang chỉnh sửa thông tin nhà cung cấp';
        $request = new Request();
        $mancc = $request->getFields();
        $datasuppliers = $this->suppliers->getDetail($mancc["MaNCC"]);
        $this->data['sub_content']['suppliers'] = $datasuppliers;
        $this->render('layouts/admin_layout', $this->data); 
    }

    public function updateSuppliers() {
        $request = new Request();
        $id = $_GET["MaNCC"];
        $data = $request->getFields();
        $this->suppliers->updateSuppliers($data, $id);
        header('Location: '._WEB_ROOT.'/admin/suppliers');
    }
    
    public function viewAddSuppliers() {
        $this->data['content'] = '/admin/suppliers/AddSuppliers';
        $this->data['title'] = 'Trang thêm nhà cung cấp';
        $this->render('layouts/admin_layout', $this->data);
    }

    public function addSuppliers() {
        $request = new Request();
        $data = $request->getFields();
        $this->suppliers->addSuppliers($data);
        header('Location: '._WEB_ROOT.'/admin/Suppliers');
    }

    public function deleteSuppliers() {
        $id = $_GET["MaNCC"];
        $this->suppliers->deleteSuppliers($id);
        header('Location: '._WEB_ROOT.'/admin/Suppliers');
    }
}