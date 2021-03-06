<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"F:\bwsmtp5\public/../application/admin\view\admingl\roleedit.html";i:1518494053;}*/ ?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>
            二当家的Lay1.0
        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="/static/admin/css/x-admin.css" media="all">
    </head>
    
    <body>
        <div class="x-body">
            <form action="" method="post" class="layui-form layui-form-pane">
                <div class="layui-form-item">
                    <label for="name" class="layui-form-label">
                        <span class="x-red">*</span>角色名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="name" name="name" required="" lay-verify="required" value="<?php echo $rname; ?>" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
				
				
				
				
				
				
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">
                        拥有权限
                    </label>
                    <table  class="layui-table layui-input-block">
                        <tbody>
							<!-- 外层的模块名称 -->
                            <?php foreach($permission as $val): ?>
                         
                            <tr>
                                <td>
                                    <?php echo $val['name']; ?>
                                </td>
                                <td>
                                    <div class="layui-input-block" id="role_id">
                                        <?php foreach($permission as $v): ?>
                                        <!-- 权限表分pid父did 是perid -->
                                            <?php if($val['id'] == $v['id']): ?>
                                                <!-- perid 是所有的权限的id所在是数组-->
                                                <?php if(in_array($v['id'] , $pid)): ?>
                                                    <input name="pid['<?php echo $v['id']; ?>']" type="checkbox" value="<?php echo $v['pid'].'_'.$v['id']; ?>" checked=""> <?php echo $v['name']; else: ?>                                              
                                                    <input name="pid['<?php echo $v['id']; ?>']" type="checkbox" value="<?php echo $v['pid'].'_'.$v['id']; ?>"> <?php echo $v['name']; endif; endif; endforeach; ?>
                                    </div>
                                </td>
                            </tr>
                          
                            <?php endforeach; ?>
                         
                        </tbody>
                    </table>
                </div>
				
				
				
				
				
				
				
                <div class="layui-form-item layui-form-text">
                    <label for="desc" class="layui-form-label">
                        描述
                    </label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" id="desc" name="desc" class="layui-textarea"><?php echo $description; ?></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
				 <input type="hidden" type="text" name='role_id' value="<?php echo $rid; ?>" />
                <button class="layui-btn" lay-submit="" lay-filter="save" id='btn'>保存</button>
              </div>
            </form>
        </div>
        <script src="/static/admin/lib/layui/layui.js" charset="utf-8">
        </script>
        <script src="/static/admin/js/x-layui.js" charset="utf-8">
        </script>
        <script>
            layui.use(['form','layer'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer;
			
				$('#btn').click(function(){
					<!-- 获取角色的id -->
					 var role_id = $('[name=role_id]').val();
					 var pid_arr = new Array();
                    $("input[name^='pid']:checked").each(function(){
                      pid_arr.push($(this).val());   
                    })
					
					 $.ajax({

                        type:'post',
                        url:'/admin/admingl/doedit',
                        data:{id:pid_arr.toString(),role_id:role_id},
                        success:success

                    });
					
						function success(data)
						{
							console.log(data);
						}
					 				
				})
			  

              //监听提交
              form.on('submit(save)', function(data){
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {icon: 6},function () {
                    // 获得frame索引
                    var index = parent.layer.getFrameIndex(window.name);
                    //关闭当前frame
                    parent.layer.close(index);
                });
                return false;
              });
              
              
            });
        </script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>

</html>