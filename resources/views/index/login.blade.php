<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
</head>
<body>
<table width="300" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>用户名：</td>
		<td><input type="text" class="login_txt" name="u_name" id="u_name"/></td>
	</tr>
	<tr>
		<td>密码：</td>
		<td><input name='u_pwd' type="password"  class="login_txt" id="u_pwd" /></td>
	</tr>
	<tr>
		<a class="btn button-default" id="btn">登录</a>
		<a class="btn button-default" id="btn" href="/register">注册</a>
	</tr>
</table>
</body>
</html>
<script>
	$('#btn').click(function(){
		var u_name=$('#u_name').val();
		var u_pwd=$('#u_pwd').val();
		// console.log(u_name);
		// console.log(u_pwd);
		$.post({
			url:"/logindo",
			data:{u_name:u_name,u_pwd:u_pwd},
			dataType:'json',
			success:function(res){
				// console.log(res);
				if(res.code==1){
					alert(res.msg);
					location.href="/";
				}
			}
		})
	})
</script>