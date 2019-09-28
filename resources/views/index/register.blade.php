<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
<h3>用户注册</h3>
</div>
        <form class="col s12">
            <div class="input-field">
                <input type="text" class="validate" placeholder="用户名" required  id="u_name" name="u_name">
            </div>
            <div class="input-field">
                <input type="password" placeholder="密码" class="validate" required id="u_pwd" name="u_pwd">
            </div>
            <div class="btn button-default" id="btn">注册</div>
        </form>
</div>
</body>
</html>
<script>
    $(function(){
        $('#btn').click(function(){
            var u_name=$('#u_name').val();
            var u_pwd=$('#u_pwd').val();
            // console.log(u_name);
            // console.log(u_pwd);

            if(u_name==''){
                alert('用户名不能为空');
                return false;
            }

            if(u_pwd==''){
                alert('密码不能为空');
                return false;
            }

            $.post({
                url:"/regdo",
                data:{u_name:u_name,u_pwd:u_pwd},
                dataType:'json',
                success:function(res){
                    // console.log(res);
                    if(res.code==1){
                        alert(res.msg);
                        location.href="/login";
                    }

                }
            })

        })
    })
</script>