# collegeTask
you code because you love it
<br>
@Depricated（废弃）
1.登录url为http://115.28.65.99/collegeTask/login.php

  传入方法  POST <br>
  传入参数名 username  password<br>
  返回结果类型： JSON<br>
  首先会进行判空处理，如果用户名或者密码只要有一个为空  {"code":0,"msg":"用户名或者密码不能为空"}<br>
  用户名正确密码错误：{"code":0,"msg":"密码错误"}<br>
  用户名不存在： {"code":0,"msg":"用户名不存在"}<br>
  密码错误示例： {"code":0,"msg":"密码错误"}<br>
  返回结果成功示例：{"code":1,"username":"zp"}<br>


2.ajax（重要）
  测试：访问  http://115.28.65.99/collegeTask/ajaxTest/test.html <br>
  输入用户名：zp 密码：zp 返回json  {"message":"true","code":"0"}  输入错误返回  {"message":"false","code":"1"} <br>
  详细请参考test.html代码<br>
  需要注意的如下：<br>
  1.var data = {}; 需要先声明一个空的字典<br>
  2.data = $(this).serialize() + "&" + $.param(data);拼装参数,例子：username=zp&password=zp&最后面多了个&，可以忽略<br>
  3.data["json"]的作用仅仅只是为了方便调试，打印出来完整的json格式，具体使用的时候直接使用data["message"]即可，其实就是个map（key-value）,当然也可以使用console.log(data),看个人习惯了。<br>
  4.have fun!



