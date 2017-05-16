<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form action="/ehview/index.php/Admin/Role/insert/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="dialogAjaxDone" noEnter>

        <div class="pageFormContent form-horizontal" layouth="60">
            <div class="form-group">
                <label for="j_name" class="control-label col-sm-2">组名：</label>
                <input type="text" class="form-control validate[required,custom[chinese]] required" size="30" name="name" id="j_name" value=""  >
            </div>
            
          
            
            <div class="form-group">
                <label for="j_pid" class="control-label col-sm-2">上级组：</label>
                <select name="pid"  data-container="body"  id="j_pid" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                          <option value="0" selected >无上级组</option>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><option value="<?php echo ($list["id"]); ?>" ><?php echo ($list["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                 </select>
                 
            </div>
         
            <div class="form-group">
                <label for="j_status" class="control-label col-sm-2">组状态：</label>
               <select name="status"  data-container="body"  id="j_status" class="selectpicker show-tick validate[required]" data-style="btn-default btn-sm" data-width="auto">
                               
                                 <option value="1">启用</option>
                                <option value="0">禁用</option>
                 </select>
            </div>
            <div class="form-group">
                <label for="j_remark" class="control-label col-sm-2">描述：</label>
                <textarea name="remark" id="j_remark" class="form-control autosize" rows="4" cols="30"></textarea>
            </div>
		</div>
		<div class="formBar">
            <ul>
                <li><button type="submit" class="btn btn-default btn-sm">保存</button></li>
                <li><button type="button" class="btn btn-close btn-sm">取消</button></li>
            </ul>
		</div>
    </form>
</div>