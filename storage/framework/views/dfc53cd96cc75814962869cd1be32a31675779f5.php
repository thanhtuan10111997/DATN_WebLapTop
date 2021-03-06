<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo e(asset('')); ?>">
    <title><?php echo e(trans('common.head.trang_quan_tri')); ?></title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/crown/css/main.css')); ?> "/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/css.css')); ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/error.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/jquery-confirm.min.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/style.css')); ?>" />
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/crown/css/datatable.css')); ?>" /> -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/crown/css/jquery.dataTables.min.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/backend/admin/css/select2.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('source/bower_components/library/site/version4/css/toastr.min.css')); ?>">
    <?php echo Charts::assets(); ?>

</head>
