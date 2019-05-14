<?php $__env->startSection('content'); ?>
    <div style="font-family:Arial" class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li style="font-family:Arial" class="home"><a title="Đi đến Trang chủ" href="index.html"><?php echo e(__('Trang Chủ')); ?></a> <span>/</span></li>
                        <li><strong style="font-family:Arial"><?php echo e(__('Giới Thiệu')); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main-container -->
    <div style="font-family:Arial" class="main-container col2-right-layout">
        <div class="container">
            <div class="row">
                <section class="col-sm-9">
                    <div class="col-main">
                        <div class="static-inner">
                            <?php echo $__env->make('site.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <div class="page-title">
                                <h2 style="font-family:Arial"><?php echo e(__('Giới Thiệu')); ?></h2>
                            </div>
                            <div class="static-contain" style="margin-left:250px">
                                <h3 style="font-weight:bold;  text-align: center">GIỚI THIỆU VỀ HỆ THỐNG CỬA HÀNG <br>LAPTOP THANH TUẤN</h3>

                                <h4>
                                    Năm thành lập: 2019
                                </h4>

                                <h4>
                                    Cửa hàng Laptop Thanh Tuấn khai trương đầu tiên tại Tổ 2, khu phố Tân Phú, phường Tân Hiệp, thị xã Tân Uyên, tỉnh Bình Dương.
                                </h4>

                                <h4>
                                    <img class="img-responsive" style="display:block; margin-left:auto; margin-right: auto" src="<?php echo e(asset('source/bower_components/library/site/version4/images/camket.png')); ?>"
                                </h4>

                                <h4>
                                    Cửa hàng Laptop Thanh Tuấn đã đăng ký hoạt động thương mại điện tử với Bộ Công Thương tháng 03/2019. Chúng tôi cam kết 100% sản phẩm trên cửa hàng là hàng chính hãng.
                                </h4>

                                <h4>
                                    Các sản phẩm tại cửa hàng vô cùng đa dạng, từ các hãng nổi tiếng như: DELL, ASUS, HP, APPLE,...
                                </h4>

                                <h4>
                                    <img class="img-responsive" style="display:block; margin-left:auto; margin-right: auto" src="<?php echo e(asset('source/bower_components/library/site/version4/images/logo_hang.png')); ?>"  

                                <h4>
                                    <b>TỔNG ĐÀI HỖ TRỢ KHÁCH HÀNG</b>
                                </h4>

                                <h4>
                                    Tổng đài bán hàng (07:00 - 21:00) <b>1800.1008</b> (miễn phí)
                                </h4>

                                <h4>
                                    Gọi khiếu nại (8:00 - 21:00) <b>0393.083.903</b> (miễn phí)
                                </h4>

                                <h4>
                                    Hỗ trợ bảo hành (8:00 - 21:00) <b>1800.1008</b>
                                </h4>

                                <h4 style="text-align:center"><br />
                                    <b>MỘT SỐ HÌNH ẢNH TẠI CỬA HÀNG</b>
                                </h4>
                                <h4>
                                    <img class="img-responsive" style="display:block; margin-left:auto; margin-right: auto" src="<?php echo e(asset('source/bower_components/library/site/version4/images/cuahang.png')); ?>">
                                </h4><br />
           
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>