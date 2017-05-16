<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form action="/ehview/index.php/Admin/Role/setUser/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="dialogAjaxDone" noEnter>
      <input type="hidden" name="groupId" VALUE="<?php echo ($_GET['id']); ?>" />
        <div class="pageFormContent" layouth="60">
         
           
<script>
$(function(){
$('#invert').on('click', function(event){
$(".groupuserid").iCheck('toggle'); 
});
});
</script>          
       <ul class="list-group">
        <?php if(is_array($userList)): $i = 0; $__LIST__ = $userList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="list-group-item">
    <span class="pull-right"><input type="checkbox" class="j-icheck groupuserid" name="groupUserId[]" value="<?php echo ($key); ?>" <?php echo in_array($key, $groupUserList) ? "checked" : "" ?>/></span>
    <?php echo ($item); ?>
  </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
           
			
				
        
		</div>
		<div class="formBar">
		<label style="pull-left"><input type="checkbox" class="checkboxCtrl j-icheck" group="groupUserId[]" />全选</label>
            <ul>
             <li><button type="button" class="checkboxCtrl btn btn-green btn-sm" group="groupUserId[]" id="invert">反选</button></li>
                <li><button type="submit" class="btn btn-default btn-sm">设置</button></li>
                <li><button type="button" class="btn btn-close btn-sm">取消</button></li>
            </ul>
		</div>
    </form>
</div>