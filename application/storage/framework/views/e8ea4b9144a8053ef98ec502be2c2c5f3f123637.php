<!--EACH LINE ITEM X-->
<tr class="billing-line-item" id="lineitem_<?php echo e($lineitem->lineitem_id ?? ''); ?>" type="plain">
    <!--action-->
    <td class="td-action list-table-action x-action bill_col_action">
        <button type="button" title="<?php echo e(cleanLang(__('lang.delete'))); ?>"
            class="data-toggle-tooltip btn btn-outline-danger btn-circle btn-sm js-billing-line-item-delete">
            <i class="sl-icon-trash"></i>
        </button>
    </td>
    <!--description-->
    <td class="form-group x-description bill_col_description">
        <textarea class="form-control form-control-sm js_item_description js_line_validation_item" rows="3"
            name="js_item_description[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"><?php echo e($lineitem->lineitem_description ?? ''); ?></textarea>
    </td>
    <!--quantity-->
    <td class="form-group x-quantity bill_col_quantity">
        <input class="form-control form-control-sm js_item_quantity calculation-element js_line_validation_item"
            type="number" step="1" name="js_item_quantity[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
            value="<?php echo e($lineitem->lineitem_quantity ?? ''); ?>">
    </td>
    <!--unit-->
    <td class="form-group x-unit bill_col_unit">
        <input class="form-control form-control-sm js_item_unit js_line_validation_item" type="text"
            name="js_item_unit[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="<?php echo e($lineitem->lineitem_unit ?? ''); ?>">
    </td>
    <!--rate-->
    <td class="form-group x-price bill_col_price">
        <input
            class="form-control form-control-sm js_item_rate calculation-element decimal-field js_line_validation_item"
            type="number" step="1" name="js_item_rate[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
            value="<?php echo e($lineitem->lineitem_rate ?? ''); ?>">
    </td>
    <!--tax-->
    <td
        class="bill_col_tax form-group x-tax <?php echo e(runtimeVisibility('invoice-column-inline-tax', $bill->bill_tax_type)); ?> ">
        <select name="js_linetax_rate[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
            class="form-control form-control-sm select2-x js_linetax_rate">
            <option value="10">VAT(10%)</option>
            <option value="15">Sales tax (15%)</option>
            <option value="20">Income Tax (20%)</option>
        </select>
        <input type="number" class="js_linetax_total" name="js_linetax_rate[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="0">
    </td>
    <!--total-->
    <td class="form-group x-total" id="bill_col_total">
        <input class="form-control form-control-sm js_item_total decimal-field" type="number" step="0.01"
            name="js_item_total[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="<?php echo e($lineitem->lineitem_total ?? ''); ?>" disabled>
    </td>

    <!--linked items-->
    <input type="hidden" class="js_item_linked_type"
        data-duplicate-check="<?php echo e($lineitem->lineitemresource_linked_type ?? ''); ?>|<?php echo e($lineitem->lineitemresource_linked_id ?? ''); ?>"
        name="js_item_linked_type[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitemresource_linked_type ?? ''); ?>">
    <input type="hidden" class="js_item_linked_id" name="js_item_linked_id[<?php echo e($lineitem->lineitem_id ?? ''); ?>]"
        value="<?php echo e($lineitem->lineitemresource_linked_id ?? ''); ?>">
    <input type="hidden" class="js_item_type" name="js_item_type[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="plain">

    <!--line item type-->
    <input type="hidden" class="js_item_type" name="js_item_type[<?php echo e($lineitem->lineitem_id ?? ''); ?>]" value="plain">

</tr>
<!--/#EACH LINE ITEM--><?php /**PATH C:\xampp\htdocs\GROWCRM\application\resources\views/pages/bill/components/elements/line-plain.blade.php ENDPATH**/ ?>