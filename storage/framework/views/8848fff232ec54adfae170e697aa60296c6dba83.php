<!DOCTYPE html>
<html>
<head>
	<title><?php echo e(__('Email')); ?></title>
	<style type="text/css">
		table {
            border-collapse: collapse;
        }

        table td, th {
            padding: 10px;
            border: 1px solid rgb(233, 77, 28);
            text-align: center;
        }
	</style>
</head>
<body>
	<div class="container">
		<h3><?php echo e(__('Quý khách đã đặt hàng thành công')); ?></h3>
		<h3><?php echo e(__('Thông tin khách hàng')); ?></h3>
		<p><?php echo e(__('Khách hàng')); ?> : <?php echo e($user->name); ?></p>
		<p><?php echo e(__('Email')); ?> : <?php echo e($user->email); ?></p>
		<p><?php echo e(__('Số điện thoại')); ?> : <?php echo e($user->phone); ?></p>
		<p><?php echo e(__('Địa chỉ')); ?> : <?php echo e($user->address->address); ?></p>
		<p><?php echo e(__('Địa chỉ giao hàng')); ?> : <?php echo e($address); ?></p>
		<h3><?php echo e(__('Hóa đơn mua hàng')); ?></h3>
		<p><?php echo e(__('Mã đơn hàng')); ?> : <?php echo e($code); ?></p>
		<p><?php echo e(__('Chi tiết đơn đặt hàng')); ?></p>
		<table>
			<thead>
				<tr>
					<th><?php echo e(__('Tên sản phẩm')); ?></th>
					<th><?php echo e(__('Đơn giá')); ?></th>
					<th><?php echo e(__('Số lượng')); ?></th>
					<th><?php echo e(__('Thành tiền')); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td align="center"><?php echo e($row->name); ?></td>
					<td><?php echo e(number_format($row->price)); ?> đ</td>
					<td align="center"><?php echo e($row->qty); ?></td>
					<td><?php echo e(number_format($row->subtotal)); ?> đ</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
			<tfoot>
				<tr>
					<th><?php echo e(__('Tổng tiền')); ?></th>
					<td colspan="3" align="right"><?php echo e($total); ?> đ</td>
				</tr>
			</tfoot>
		</table>
	</div>
</body>
</html>
