# collegeTask
you code because you love it

1.登录url为http://localhost/collegeTask/login.jsp 

  传入方法  POST 
  传入参数名 username  password
  返回结果类型： JSON
  首先会进行判空处理，如果用户名或者密码只要有一个为空  {"code":0,"msg":"用户名或者密码不能为空"}
  用户名正确密码错误：{"code":0,"msg":"密码错误"}
  用户名不存在： {"code":0,"msg":"用户名不存在"}
  密码错误示例： {"code":0,"msg":"密码错误"}
  返回结果成功示例：{"code":1,"username":"zp"}


