	<?php $__env->startSection('content'); ?>
	 <div class="wrapper">
        <div class="widgets">
        	<div class="oneTwo">
				<div class="widget">
					<div class="title">
						<img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/money.png')); ?>" class="titleIcon" />
						<h6><?php echo e(__('Doanh số')); ?></h6>
					</div>
					
					<table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
						<tbody>
							<tr>
								<td class="fontB blue f13"><?php echo e(__('Tổng doanh số')); ?></td>
								<td class="textR webStatsLink red">
									<?php echo e(number_format($money['total_mn'])); ?> đ
								</td>
							</tr>
						    <tr>
								<td class="fontB blue f13"><?php echo e(__('Doanh số tháng trước')); ?></td>
								<td class="textR webStatsLink red">
									<?php echo e(number_format($money['last_month_mn'])); ?> đ
								</td>
							</tr>
							<tr>
								<td class="fontB blue f13"><?php echo e(__('Doanh số tháng này')); ?></td>
								<td class="textR webStatsLink red">
									<?php echo e(number_format($money['month_mn'])); ?> đ
								</td>
							</tr>
						    <tr>
								<td class="fontB blue f13"><?php echo e(__('Doanh số hôm nay')); ?></td>
								<td class="textR webStatsLink red">
									<?php echo e(number_format($money['day_mn'])); ?> đ</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
            <div class="oneTwo">
                <div class="widget">
                    <div class="title">
                        <img src="<?php echo e(asset('source/bower_components/library/backend/admin/images/icons/dark/users.png')); ?>" class="titleIcon" />
                        <h6><?php echo e(__('Thống kê dữ liệu')); ?></h6>
                    </div>
                    <table cellpadding="0" cellspacing="0" width="100%" class="sTable myTable">
                        <tbody>
                        <tr>
                            <td>
                                <div class="left"><?php echo e(__('Tổng số đơn đặt hàng')); ?></div>
                                <div class="right f11"><a href="<?php echo e(route('order.index')); ?>" target="_blank"><?php echo e(__('Chi tiết')); ?></a></div>
                            </td>
                            <td class="textC webStatsLink">
                                <?php echo e($data['total_order']); ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="left"><?php echo e(__('Tổng số sản phẩm')); ?></div>
                                <div class="right f11"><a href="<?php echo e(route('product.index')); ?>" target="_blank"><?php echo e(__('Chi tiết')); ?></a></div>
                            </td>

                            <td class="textC webStatsLink">
                                <?php echo e($data['total_product']); ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="left"><?php echo e(__('Tổng số liên hệ')); ?></div>
                                <div class="right f11"><a href="<?php echo e(route('contact.index')); ?>" target="_blank"><?php echo e(__('Chi tiết')); ?></a></div>
                            </td>

                            <td class="textC webStatsLink">
                                <?php echo e($data['total_contact']); ?>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="left"><?php echo e(__('Tổng số bình luận')); ?></div>
                                <div class="right f11"><a href="<?php echo e(route('comment.index')); ?>" target="_blank"><?php echo e(__('Chi tiết')); ?></a></div>
                            </td>

                            <td class="textC webStatsLink">
                                <?php echo e($data['total_comment']); ?>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="left"><?php echo e(__('Tổng số khách hàng')); ?></div>
                                <div class="right f11"><a href="<?php echo e(route('customer.index')); ?>" target="_blank"><?php echo e(__('Chi tiết')); ?></a></div>
                            </td>

                            <td class="textC webStatsLink">
                                <?php echo e($data['total_user']); ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clear"></div>
            <br><br>
            <?php echo $chart->render(); ?>

            <br>
            <?php echo $chart1->render(); ?>

            <div class="clear"></div>
        </div>
    </div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>