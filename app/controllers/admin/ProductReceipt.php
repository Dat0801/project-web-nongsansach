<?php
class ProductReceipt extends Controller
{

    public $data = [];
    public $productRC, $product, $employee, $supplier, $receiptDetail;

    public function __construct()
    {
        $this->productRC = $this->model('ProductReceiptModel');
        $this->product = $this->model('ProductModel');
        $this->employee = $this->model('EmployeeModel');
        $this->supplier = $this->model('SuppliersModel');
        $this->receiptDetail = $this->model('ReceiptDetailModel');
    }

    public function index()
    {
        $this->data['content'] = '/admin/productRC/ViewProductReceipt';
        $this->data['title'] = 'Trang nhập hàng';
        $dataProduct = $this->productRC->getProductRCList();
        $this->data['sub_content']['list'] = $dataProduct;
        $this->data['sub_content']['productRC_model'] = $this->productRC;
        $this->render('layouts/admin_layout', $this->data);
    }

    public function editProductRC()
    {
        $this->data['content'] = '/admin/productRC/EditProductReceipt';
        $this->data['title'] = 'Trang sửa phiếu nhập';
        $request = new Request();
        $MaPN = $request->getFields();
        $dataProductRC = $this->productRC->getDetail($MaPN["MaPN"]);
        $this->data['sub_content']['productRC'] = $dataProductRC;
        $this->render('layouts/admin_layout', $this->data);
    }

    public function updateProductRC()
    {
        $request = new Request();
        $id = $_GET["MaPN"];
        $data = $request->getFields();
        $this->productRC->updateProductReceipt($data, $id);
        header('Location: ' . _WEB_ROOT . '/admin/productReceipt');
    }

    public function ReceiptDetail()
    {
        $this->data['content'] = '/admin/productRC/ReceiptDetail';
        $this->data['title'] = 'Trang chi tiết phiếu nhập';

        $request = new Request();
        $ProductRC = $request->getFields();

        $dataProductRC = $this->productRC->getDetail($ProductRC["MaPN"]);
        $dataReceiptDetail = $this->receiptDetail->getDetail($ProductRC["MaPN"]);
        $dataEmployee = $this->employee->getDetail($dataProductRC["MaNV"]);
        $dataSupplier = $this->supplier->getDetail($dataProductRC["MaNCC"]);

        $list_product = [];
        foreach ($dataReceiptDetail as $detail) {
            $product = $this->product->getDetail($detail["MaHang"]);
            $product["SoLuong"] = $detail["SoLuong"];
            $product["ThanhTien"] = $detail["ThanhTien"];
            array_push($list_product, $product);
        }

        $this->data['sub_content']['productRC'] = $dataProductRC;
        $this->data['sub_content']['employee'] = $dataEmployee;
        $this->data['sub_content']['supplier'] = $dataSupplier;
        $this->data['sub_content']['listProduct'] = $list_product;

        $this->render('layouts/admin_layout', $this->data);
    }
    
    
    public function addReceipt() {
        $this->data['content'] = '/admin/ProductRC/AddProductReceipt';
        $this->data['title'] = 'Trang thêm phiếu nhập';
        $this->data['sub_content']['employee'] = $this->employee->getList();
        $this->data['sub_content']['supplier'] = $this->supplier->getSuppliersList();

        $request = new Request();

        if ($request->isPost()) {
            $request->rules([
                'MaNV' => 'required',
                'MaNCC' => 'required',
                'TrangThai' => 'required|check',                
            ]);

            $request->messages([
                'MaNV.required' => 'Mã nhân viên không được để trống',
                'MaNCC.required' => 'Mã nhà cung cấp không được để trống',
                'TrangThai.required' => 'Trạng thái không được để trống',
                'TrangThai.check' => 'Trạng thái không hợp lệ',
            ]);

            $validate = $request->validate();
            if (!$validate) {
                $this->data['sub_content']['errors'] = $request->errors();
                $this->data['sub_content']['msg'] = "Đã có lỗi xãy ra. Vui lòng kiểm tra lại!";
                $this->data['sub_content']['old'] = $request->getFields();
            } else {
                $data = $request->getFields();
                $this->productRC->addProductReceipt($data);
                header('Location: ' . _WEB_ROOT . '/admin/ProductReceipt/index?msg=Thêm thành công!');
            }
        }
        $this->render('layouts/admin_layout', $this->data);

    }
}