 <style>
    #checkAll > thead > tr.heading > th:nth-child(3) {
        width: 100px; min-width: 100px; 
    };
    #checkAll > thead > tr.heading > th:nth-child(5) {
        width: 60px; min-width: 60px; 
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo e(__('Đơn đặt hàng')); ?></h5>
                <span><?php echo e(__('Quản lý đơn đặt hàng')); ?></span>
            </div>
            <div class="horControlB menu_action">
                <ul>
                    <li>
                        <a href="<?php echo e(route('order.index')); ?>">
                            <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/control/16/list.png')); ?>" />
                            <span><?php echo e(__('Danh sách')); ?></span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo e(route('order.export_to_excel')); ?>">
                            <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/excel.png')); ?>" />
                            <span class="export"><?php echo e(__('Xuất dữ liệu')); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Message -->
    <!-- Main content wrapper -->
    <div class="wrapper" id="main_product">
        <div class="widget">
            <div class="title">
                <span class="titleIcon"><input type="checkbox" id="titleCheck" name="titleCheck" /></span>
                <h6>
                    <?php echo e(__('Danh sách đơn đặt hàng')); ?>

                </h6>
                <div class="num f12"><?php echo e(trans('common.title.sl')); ?> <b id="total"><?php echo e(count($order)); ?></b></div>
            </div>
            <?php if(isset($order) && count($order) > 0): ?>
                    <div class="clear mt15"></div>
                    <table cellpadding="10px" cellspacing="10px" style="margin-left: 10px;" width="100%">
                        <tbody>
                        <tr>
                            <td class="label" style="width:80px;"><label for="filter_type"><?php echo e(__('phương thức')); ?></label></td>
                            <td class="item">
                                <select colum="4" class="menu" name="payment">
                                    <option value=""></option>
                                    <option value='Tiền mặt' ><?php echo e(__('Tiền mặt')); ?></option>
                                    <option value='Chuyển khoản' ><?php echo e(__('Chuyển khoản')); ?></option>
                                </select>
                            </td>
                            <td class="label"><label for="filter_status"><?php echo e(__('Trạng thái')); ?></label></td>
                            <td class="item">
                                <select colum="6" class="menu" name="status">
                                    <option></option>
                                    <option value='Đang chờ'><?php echo e(__('Đang chờ')); ?></option>
                                    <option value='Thành công'><?php echo e(__('Thành công')); ?></option>
                                    <option value='Hủy bỏ'><?php echo e(__('Hủy bỏ')); ?></option>
                                </select>
                            </td>
                            <td class="label" style="width:60px;">
                                <label for="filter_created"><?php echo e(__('Từ ngày')); ?></label>
                            </td>
                            <td class="item">
                                <input name="created" value="" id="filter_created" type="date" class="datepicker1" />
                            </td> 
                            <td class="label">
                                <label for="filter_created_to"><?php echo e(__('Đến ngày')); ?></label>
                            </td>
                            <td class="item">
                                <input name="created_to" value="" id="filter_created_to" type="date" class="datepicker1" />
                            </td>
                            <td class="label"></td>
                            <td class="item"></td>
                     </tbody>
                </table>
               
                <table cellpadding="0" cellspacing="0" width="100%" class="sTable mTable myTable" id="checkAll">
                    <thead>
                    <tr>
                        <td><img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/tableArrows.png')); ?>" /></td>
                        <td><?php echo e(__('Mã số')); ?></td>
                        <td><?php echo e(__('Tên khách hàng')); ?></td>
                        <td><?php echo e(__('Số điện thoại')); ?></td>
                        <td><?php echo e(__('Phương thức thanh toán')); ?></td>
                        <td style="width:60 !important;"><?php echo e(__('Đơn giá sản phẩm')); ?></td>
                        <td><?php echo e(__('Trạng thái')); ?></td>
                        <td><?php echo e(__('Ngày tạo')); ?></td>
                        <td><?php echo e(__('Hành động')); ?></td>
                    </tr>
                    </thead>
                    <tbody class="list_item">
                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class='row_<?php echo e($row->id); ?>'>
                            <?php if($row->status == "Đang chờ"): ?> 
                                <td><?php echo Form::checkbox('id[]', $row->id, false, ['class' => 'check-del']); ?></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                            <td class="textC"><?php echo e($row->id); ?></td>
                            <td class="textC"><?php echo e($row->user->name); ?></td>
                            <td class="textC"><?php echo e($row->user->phone); ?></td>
                            <td class="textC"><?php echo e($row->payment); ?></td>
                            <td style="width:60 !important;" class="textC red"><?php echo e(number_format($row->amount)); ?> đ</td>
                            <?php if($row->status == "Thành công"): ?> 
                                <td class="status textC">
                                    <span class="completed">
                                        <?php echo e(__('Thành công')); ?>

                                    </span>
                                </td>
                            <?php elseif($row->status == "Đang chờ"): ?>
                                <td class="status textC">
                                    <span class="pending">
                                        <?php echo e(__('Đang chờ')); ?>

                                    </span>
                                </td>
                            <?php else: ?>
                                <td class="status textC">
                                    <span class="reject">
                                        <?php echo e(__('Hủy bỏ')); ?>

                                    </span>
                                </td>
                            <?php endif; ?>
                            <td class="textC"><?php echo e($row->created_at); ?></td>
                            <td class="textC">
                                <a href="<?php echo e(route('order.detail', ['id' => $row->id])); ?>" title="xem chi tiết đơn hàng" class="tipS">
                                    <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/color/view.png')); ?>" />
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="list_action itemActions">
                    <a href="<?php echo e(route('order.delete')); ?>" id="delMul" class="button blueB order-del">
                        <span><?php echo e(__('Xóa')); ?></span>
                    </a>
                </div>
            <?php else: ?>
                <h5 class="eror"><?php echo e(__('Không có đơn đặt hàng nào')); ?></h5>
            <?php endif; ?>
        </div>
    </div>
    <div class="clear mt30"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>