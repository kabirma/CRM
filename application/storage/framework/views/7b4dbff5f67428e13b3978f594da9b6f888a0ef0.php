<!-- action buttons -->
<?php echo $__env->make('pages.files.components.misc.list-page-actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- action buttons -->

<!--stats panel-->
<?php if(auth()->user()->is_team): ?>
<div id="files-stats-wrapper" class="stats-wrapper card-embed-fix">
<?php if(@count($files) > 0): ?> <?php echo $__env->make('misc.list-pages-stats', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php endif; ?>
</div>
<?php endif; ?>
<!--stats panel-->

<!--files table-->
<div class="card-embed-fix">
<?php echo $__env->make('pages.files.components.table.wrapper', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!--files table--><?php /**PATH /home/bu3bnaylnadr/public_html/crm/application/resources/views/pages/files/tabswrapper.blade.php ENDPATH**/ ?>