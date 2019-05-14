<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div style="font-family: Arial" class="display-comment">
        <?php if($comment->parent_id == 0): ?>
            <strong><?php echo e(isset($comment->user->name) ? $comment->user->name : ""); ?></strong>
            <?php if($comment->user->level == 1): ?>
                <i title="Quản trị viên" class="fa fa-user"></i>
            <?php endif; ?>
            <br>
            <?php echo e($comment->content); ?>

            <br/>
            <span>
                <a class="reply" value="<?php echo e($comment->id); ?>" href="">
                    <?php echo e(__('Trả lời')); ?>

                </a>
            </span>
            <span><?php echo e($comment->created_at->diffForHumans()); ?></span>
            <br/></br>
        <?php endif; ?>
        <?php if(count($comment->replies) > 0): ?>
            <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="display-comment">
                    <strong><?php echo e(isset($row->user->name) ? $row->user->name : ""); ?></strong>
                    <?php if($row->user->level == 1): ?>
                        <i title="Quản trị viên" class="fa fa-user"></i>
                    <?php endif; ?>
                    <br>
                    <?php echo e($row->content); ?>

                    <br/>
                    <span><?php echo e($row->created_at->diffForHumans()); ?></span>
                    <br/>
                    <br/>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <div id="div-<?php echo e($comment->id); ?>" class="display-comment div-reply">
            <div class="form-group">
                <input autocomplete="off" id="input-<?php echo e($comment->id); ?>" type="text" name="comment_body" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="submit" comment="<?php echo e($comment->id); ?>" post="<?php echo e($product_id); ?>" class="btn btn-warning submit-reply" value="TRẢ LỜI"/>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>