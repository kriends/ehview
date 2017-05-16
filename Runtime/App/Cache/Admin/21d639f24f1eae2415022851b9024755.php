<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
<form id="pagerForm" action="/ehview/index.php/Admin/Indexmanger" method="post">


        <input type="hidden" name="orderField" value="<?php echo ($_REQUEST["orderField"]); ?>">
        <input type="hidden" name="orderDirection" value="<?php echo ($_REQUEST["orderDirection"]); ?>">
        <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
	    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>

    </form>

</div>
<div class="pageContent">
    <table class="j-table" width="100%" layoutH="95">
        <thead>
            <tr>
                <th width="40">ID</th>
                 <th class="orderby <?php if(($order) == "email"): echo ($sortImg); endif; ?>" orderField="email">联系邮箱</th>
                 <th class="orderby <?php if(($order) == "contact"): echo ($sortImg); endif; ?>" orderField="contact">联系电话</th>
				 <th class="orderby <?php if(($order) == "textbg"): echo ($sortImg); endif; ?>" orderField="photo">背景内容</th>
                <th width="200">操作</th>
            </tr>
        </thead>
        <tbody>
           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			    <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["email"]); ?></td>
				<td><?php echo ($vo["contact"]); ?></td>
				<td><?php echo ($vo["textbg"]); ?></td>
				<td>
                    <a href="/ehview/index.php/Admin/Indexmanger/edit/id/<?php echo ($vo['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" rel="videoedit<?php echo ($vo["id"]); ?>"  class="btn btn-green btn-sm" target="navtab" title="编辑<?php echo ($vo["title"]); ?>" >编辑</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
<div class="panelBar">
        <div class="pages">
            <span>每页&nbsp;</span>
            <span class="sel">
                <select class="selectpicker show-tick dropup" data-style="btn-default btn-sel xs" data-width="auto" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
                  <option value="5" <?php if(($numPerPage) == "5"): ?>selected=selected<?php endif; ?>>5</option>
				<option value="10" <?php if(($numPerPage) == "10"): ?>selected=selected<?php endif; ?>>10</option>
				<option value="15" <?php if(($numPerPage) == "15"): ?>selected=selected<?php endif; ?>>15</option>
				<option value="20" <?php if(($numPerPage) == "20"): ?>selected=selected<?php endif; ?>>20</option>
                </select>
            </span>
            <span>&nbsp;条，共 <?php echo ($totalCount); ?> 条</span>
        </div>
        <div class="pagination-box" targettype="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>