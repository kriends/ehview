<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
    <form action="/ehview/index.php/Admin/Indexmanger/update/navTabId/<?php echo CONTROLLER_NAME;?>" id="j_custom_form" class="pageForm form-validate" method="post" callback="navTabAjaxDone" noEnter>
       <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>" />
        <div class="pageFormContent form-horizontal" layouth="20">

       <div class="form-group">
        <label for="j_email" class="control-label col-sm-2 ">联系邮箱：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="email" id="j_email" value="<?php echo ($vo["email"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
        <label for="j_contact" class="control-label col-sm-2 ">联系电话：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="contact" id="j_contact" value="<?php echo ($vo["contact"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
        <div class="form-group">
        <label for="j_titlebg" class="control-label col-sm-2 ">背景标题：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="titlebg" id="j_titlebg" value="<?php echo ($vo["titlebg"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
        <label for="j_textbg" class="control-label col-sm-2 ">背景内容：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="textbg" id="j_textbg" value="<?php echo ($vo["textbg"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
        <label for="j_textle" class="control-label col-sm-2 ">标题：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="textle" id="j_textle" value="<?php echo ($vo["textle"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		
		<div class="form-group">
        <label for="j_context" class="control-label col-sm-2 ">标题内容：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="context" id="j_context" value="<?php echo ($vo["context"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
        <label for="j_intro" class="control-label col-sm-2 ">内容简介：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="intro" id="j_intro" value="<?php echo ($vo["intro"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
        <label for="j_information" class="control-label col-sm-2 ">公司信息：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="information" id="j_information" value="<?php echo ($vo["information"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
        <label for="j_informationtext" class="control-label col-sm-2 ">公司简介：</label>
        <div class="col-sm-5">
                
        <input type="text" class="form-control validate[required] required" name="informationtext" id="j_informationtext" value="<?php echo ($vo["informationtext"]); ?>"  >
        
        <p class="help-block"><br></p>
                                      </div>
        </div>
		
		<div class="form-group">
          <label for="j_informationbg" class="control-label col-sm-2 ">公司背景图片：</label>
         <div class="col-sm-7">
         <textarea name="informationbg" id="j_informationbg"  class="j-content validate[required] required"" style="width: 700px;" uploadJson="<?php echo U('File/ke_upimg');?>" fileManagerJson="<?php echo U('File/editorfilemanager');?>"  minheight="200"><?php echo ($vo["informationbg"]); ?></textarea>
		<p class="help-block">封面必须填写</p>
         </div>
        </div>
 
		<div class="formBar">
            <ul>
                <li><button type="submit" class="btn btn-default btn-sm">保存</button></li>
                <li><button type="button" url="/ehview/index.php/Admin/Indexmanger" class="btn btn-close btn-sm ">取消</button></li>
            </ul>
		</div>
    </form>
</div>