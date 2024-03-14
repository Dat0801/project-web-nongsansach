<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6"><?php echo $name?></h1>
</div>
<!-- Single Page Header End -->

<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="row g-4">
            <div class="row g-4" style="padding-bottom: 20px;">
                <div class="col-xl-3">
                    <div class="input-group w-100 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Từ khóa"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <h4>Danh Mục</h4>
                            <ul class="list-unstyled fruite-categorie">
                                <li>
                                    <div class="d-flex justify-content-between fruite-name">
                                        <a href="#"><i class="fas fa-apple-alt me-2"></i>Trái cây</a>
                                        <span>(3)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between fruite-name">
                                        <a href="#"><i class="fas fa-apple-alt me-2"></i>Rau</a>
                                        <span>(5)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between fruite-name">
                                        <a href="#"><i class="fas fa-apple-alt me-2"></i>Củ</a>
                                        <span>(2)</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex justify-content-between fruite-name">
                                        <a href="#"><i class="fas fa-apple-alt me-2"></i>Nấm</a>
                                        <span>(8)</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="mb-3">Sản phẩm nổi bật</h4>
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/featur-1.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <div>
                                <h6 class="mb-2">Táo</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                    <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/featur-2.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <div>
                                <h6 class="mb-2">Dâu</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                    <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start">
                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/featur-3.jpg" class="img-fluid rounded" alt="">
                            </div>
                            <div>
                                <h6 class="mb-2">Bông Cải</h6>
                                <div class="d-flex mb-2">
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star text-secondary"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="d-flex mb-2">
                                    <h5 class="fw-bold me-2">2.99 $</h5>
                                    <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-4">
                            <a href="#"
                                class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Xem
                                Thêm</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="position-relative">
                            <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                <h3 class="text-secondary fw-bold">Nông <br> Sản <br> Sạch</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Nho</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Nho</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Mâm Xôi</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Quả Mơ</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Chuối</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Cam</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Mâm Xôi</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Nho</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="rounded position-relative fruite-item">
                            <div class="fruite-img">
                                <img src="<?php echo _WEB_ROOT ?>/public/assets/client/img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                            </div>
                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                style="top: 10px; left: 10px;">Trái Cây</div>
                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                <h4>Cam</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt
                                </p>
                                <div class="d-flex justify-content-between flex-lg-wrap">
                                    <p class="text-dark fs-5 fw-bold mb-0">$4.99 / kg</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                            class="fa fa-shopping-bag me-2 text-primary"></i> Mua</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pagination d-flex justify-content-center mt-5">
                            <a href="#" class="rounded">&laquo;</a>
                            <a href="#" class="active rounded">1</a>
                            <a href="#" class="rounded">2</a>
                            <a href="#" class="rounded">3</a>
                            <a href="#" class="rounded">4</a>
                            <a href="#" class="rounded">5</a>
                            <a href="#" class="rounded">6</a>
                            <a href="#" class="rounded">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>