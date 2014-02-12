<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title><?php echo $GLOBALS['configs']['site_name'] ?> - 用户登录</title>
    <link rel="stylesheet" type="text/css" href="<?php echo src_url('css/style.css');?>"/>
    <script src="<?php echo src_url('js/jquery-1.7.2.min.js');?>"></script>
    <script src="<?php echo src_url('js/jquery.validate.min.js');?>"></script>
    <script src="<?php echo src_url('js/login.js');?>"></script>
</head>
<body class="have_bg">

<div id="result" style="background:orange;border:1px solid red;width:300px;height:200px;"></div>

<div class="me_box">
	<div class="meb_left"><img src="<?php echo src_url('images/enter_banner.jpg');?>" height="338" width="494"> </div>
    <form method="post" action="user/vvv" id="login-form">
        <div class="enter_capacity">
            <div id="capacity">
                <h1>登录</h1>
                <div class="notice-icons message hide" id="message"> </div>
                <div class="cap_frame">
                    <label>用户名:</label>
                    <p class="cf_person"><em></em>
                        <input name="username" id="username" placeholder="请输入账号" value="" type="text">
                    </p>
                    <span class="reminder" id="userinfo" style="display:none"></span>
                </div>
                <div class="cap_frame">
                    <label>密码:</label>
                    <p class="cf_lock"><em></em>
                        <input name="password" id="password" placeholder="请输入密码" value="" type="password">
                    </p>
                    <span class="reminder" id="passwordinfo" style="display:none"></span>
                </div>
                <div class="cap_enter">
                    <label></label>
                    <p><span class="automatic"><input name="remember" value="1" type="checkbox" checked="checked">下次自动登录</span> </p>
                </div>
                <span class="enter"><button type="submit" name="send_ajax" id="send_ajax">登 录</button></span>
                <p class="no_register">还不是指导网的会员? <a href="<?php echo site_url('register.html');?>">马上免费注册</a></p>
            </div>
        </div>

        <button id="test_post">POST提交</button>
        <button id="test_get">GET提交</button>

    </form>
</div>
<script type="text/javascript">
$(function(){
	$("#username").focus(function(){
		$("#userinfo").show().html('请输入邮箱、用户名、手机号');
	}).blur(function(){
		$("#userinfo").hide();
	});

	$("#password").focus(function(){
		$("#passwordinfo").show().html('6-20位字符，可使用字母、数字或符号的组合');
	}).blur(function(){
		$("#passwordinfo").hide();
	});
});

function checklogin(){
	var username = $.trim($("#username").val());
	var password = $.trim($("#password").val());
	

	
	if(username == ''){
		$("#userinfo").show().html('用户名不能为空');
		return false;
	}

	if(password == ''){
		$("#passwordinfo").show().html('密码不能为空');
		return false;
	}

	jQuery.ajax({
		type : "POST",
		url : "<?php echo site_url('user/verify_login');?>",
		data : {
			username : username,
			password : password
		}
	});
}

$(function(){
    // 自定义验证 验证数字，逗号
//    $.validator.addMethod("checkitemids", function(value, element) {
//        var chrnum = /^\d[\d\,\，]+\d$/;
//        return this.optional(element) || (chrnum.test(value));
//    }, "只能输入数字和英文逗号");

    // ajax 验证标识重复
//    $.validator.addMethod("check_repeat", function(value, element) {
//        var flag = false;
//        var tagName = $(element).attr('name');
//        var id = $("input[name='id']").val();
//        var site_id = $("select[name='site_id']").find("option:selected").val();
//        $.ajax({
//            type: "POST",
//            async: false,
//            url: site_url('spread/spread_check_repeat'),
//            data:{'value':value,'name':tagName,'id':id},
//            success: function( data ){
//                if( data == 'true' ) {
//                    flag = true;
//                }
//            }
//        });
//        return flag;
//    }, "此项不能重复");

    window.RULES['form'] =  {
        rules:{
            username:{
                required:true,
                rangelength:[6,20]
            },
            password:{
                digits:true,
                minlength:8,
                maxlength:50
            }
//            item_ids:{
//                required:true,
//                checkitemids:true // 自定义函数验证
//            }
        },
        messages:{
            username:{
                required: '名称不能为空',
                rangelength:'用户名长度为6到20之间'
            },
            password:{
                required: '密码不能为空',
                minlength:'密码不能少于8位',
                maxlength:'密码长度不能超过50'
            },
        }
    };
});
</script>
</body>
</html>
