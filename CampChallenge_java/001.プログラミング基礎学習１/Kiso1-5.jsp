<%-- 
    Document   : Kiso1-5
    Created on : 2017/02/16, 15:33:25
    Author     : Takuma
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%
    int a=1;
   if(a==1){
       //aが１の場合には(１です)を表示
       out.print("1です！");
   }else if(a==2){
       //aが２の場合には(２です)を表示
       out.print("2です！");
   }else{
       //それ以外には(その他です)を表示
       out.print("その他です!");
   }
  
       



%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        
    </body>
</html>
