<div class="board">
    <div class="board-body <?php echo e(runtimeKanbanBoardColors($board['color'])); ?>">
        <div class="board-heading clearfix">
            <div class="pull-left"><?php echo e(runtimeLang($board['name'])); ?></div>
            <div class="pull-right x-action-icons">
                <!--action add-->
                <?php if(config('visibility.kanban_board_add_buttons')): ?>
                <span class="edit-add-modal-button js-ajax-ux-request reset-target-modal-form cursor-pointer"
                    data-toggle="modal" data-target="#commonModal"
                    data-url="<?php echo e(urlResource('/tasks/create?status='.$board['id'])); ?>"
                    data-loading-target="commonModalBody" data-modal-title="<?php echo e(cleanLang(__('lang.add_task'))); ?>"
                    data-action-url="<?php echo e(urlResource('/tasks?type=kanban')); ?>" data-action-method="POST"
                    data-action-ajax-loading-target="commonModalBody"
                    data-save-button-class="" data-action-ajax-loading-target="commonModalBody"><i
                        class="mdi mdi-plus-circle"></i></span>
                <?php endif; ?>
            </div>
        </div>
        <!--cards-->
        <div class="content kanban-content" id="kanban-board-wrapper-<?php echo e($board['id']); ?>" data-board-name="<?php echo e($board['id']); ?>">

            <!--dynamic content-->
            <?php if(@count($board['tasks']) > 0): ?>
            <?php echo $__env->make('pages.tasks.components.kanban.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <!-- dynamic load more button-->
            <div class="autoload loadmore-button-container x <?php echo e($board['load_more']); ?> hidden" id="tasks-loadmore-container-<?php echo e($board['id']); ?>">
                <a data-url="<?php echo e($board['load_more_url']); ?>"
                    href="javascript:void(0)" class="btn btn-rounded-x btn-secondary js-ajax-ux-request"
                    id="load-more-button-<?php echo e($board['id']); ?>"><?php echo e(cleanLang(__('lang.show_more'))); ?></a>
            </div>
            <!-- /#dynamic load more button-->
        </div>
    </div>
</div><?php /**PATH /home/bu3bnaylnadr/public_html/crm/application/resources/views/pages/tasks/components/kanban/board.blade.php ENDPATH**/ ?>