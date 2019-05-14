<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li>
                            <a href="<?php echo e(route('site.home.index')); ?>" title="Go to Home Page"><?php echo e(__('Trang chủ')); ?></a>
                            <span>/</span>
                        </li>
                        <li><strong><?php echo e(__('Tin tức')); ?></strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="blog_post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9" id="center_column">
                    <div class="center_column">
                        <div class="page-title">
                            <h2><?php echo e(__('Tin tức đã đăng')); ?></h2>
                        </div>
                        <ul class="blog-posts">
                            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="post-item">
                                    <article class="entry">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="entry-thumb">
                                                    <a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>">
                                                        <figure><img src="<?php echo e(url(config('app.newsUrl'))); ?>/<?php echo e($row->avatar); ?>" alt="Tin"></figure>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-7">
                                                <h3 class="entry-title">
                                                    <a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>"><?php echo e($row->title); ?></a>
                                                </h3>
                                                <div class="entry-meta-data">
                                                    <span class="author">
                                                        <i class="fa fa-user"></i><?php echo __('&nbsp; by:'); ?>

                                                        <a href="#"> <?php echo e(__('Admin')); ?></a>
                                                    </span>
                                                    <span class="cat"></span>
		                      	                    <span class="date"><i class="fa fa-calendar"></i>&nbsp;<?php echo e($row->created_at); ?>

                                                    </span>
                                                </div>
                                                <div class="entry-excerpt" style="height: 5em; overflow: hidden;"><?php echo $row->content; ?></div>
                                                <a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>" class="read-more"><?php echo ('Read more&nbsp;'); ?>

                                                    <i class="fa fa-angle-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php echo e($news->links()); ?>

                    </div>
                </div>
                <!-- Right colunm -->
                <aside class="sidebar col-xs-12 col-sm-3">
                    <div class="search">
                        <?php echo Form::open(['route' => 'site.news.search', 'method' => 'get', 'class' => 'form']); ?>

                        <?php echo Form::search('key', null, ['class' => 'form-control', 'placeholder' => 'Search']); ?>

                        <button type="submit"><i class="fa fa-search"></i></button>
                        <?php echo Form::close(); ?>

                    </div>
                    <!-- Popular Posts -->
                    <div class="block blog-module">
                        <div class="block-title">
                            <h3><?php echo e(__('Tin tức mới nhất')); ?></h3>
                        </div>
                        <div class="block_content">
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar">
                                        <?php $__currentLoopData = $news_new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <div class="post-thumb">
                                                    <a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>">
                                                        <img src="<?php echo e(url(config('app.newsUrl'))); ?>/<?php echo e($row->avatar); ?>" alt="Tin">
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <h5 class="entry_title">
                                                        <a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>"><?php echo e($row->title); ?></a>
                                                    </h5>
                                                    <div class="post-meta">
                                                        <span class="date"><i class="fa fa-calendar"></i> <?php echo e($row->created_at); ?></span>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- ./right colunm -->
            </div>
            <!-- ./row-->
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>