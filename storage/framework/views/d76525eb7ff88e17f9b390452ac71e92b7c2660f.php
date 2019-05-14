<?php $__env->startSection('content'); ?>
    <section class="blog_post">
        <div class="container" style="font-family:Arial">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <div class="entry-detail">
                        <div class="entry-photo">
                            <figure>
                                <img src="<?php echo e(url(config('app.newsUrl'))); ?>/<?php echo e($news->avatar); ?>" alt="Tin">
                            </figure>
                        </div>
                        <div class="entry-meta-data">
                            <div class="blog-top-desc">
                                <div class="blog-date"><?php echo e($news->created_at); ?></div>
                                <h1><?php echo e($news->title); ?></h1>
                                <div class="jtv-entry-meta">
                                    <i class="fa fa-user-o"></i> <strong><?php echo e(__('Admin')); ?></strong>
                                </div>
                            </div>
                        </div>
                        <div class="content-text clearfix">
                            <?php echo $news->content; ?>

                        </div>
                    </div>
                </div>
                <!-- right colunm -->
                <aside class="sidebar col-xs-12 col-sm-3">
                    <div style="font-family:Arial" class="search">
                        <?php echo Form::open(['route' => 'site.news.search', 'method' => 'get', 'class' => 'form']); ?>

                        <?php echo Form::search('key', null, ['class' => 'form-control', 'placeholder' => 'Tìm kiếm']); ?>

                        <button type="submit"><i class="fa fa-search"></i></button>
                        <?php echo Form::close(); ?>

                    </div>
                    <!-- Popular Posts -->
                    <div class="block blog-module">
                        <div class="block-title">
                            <h3 style="font-family:Arial"><?php echo e(__('Tin tức mới nhất')); ?></h3>
                        </div>
                        <div class="block_content">
                            <div class="layered">
                                <div class="layered-content">
                                    <ul class="blog-list-sidebar">
                                        <?php $__currentLoopData = $news_new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <div class="post-thumb">
                                                    <a href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>">
                                                        <img src="<?php echo e(url(config('app.newsUrl'))); ?>/<?php echo e($row->avatar); ?>" alt="Tin tức">
                                                    </a>
                                                </div>
                                                <div class="post-info">
                                                    <h5 class="entry_title">
                                                        <a style="font-family:Arial" title="Xem tin tức" href="<?php echo e(route('site.news.view', ['id' => $row->id])); ?>"><?php echo e($row->title); ?></a>
                                                    </h5>
                                                    <div class="post-meta">
                                                        <span class="date">
                                                            <i class="fa fa-calendar"></i> <?php echo e($row->created_at); ?>

                                                        </span>
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
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>