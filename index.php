<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
<div class="col-lg-12"><br>
    <h3 class="text-success text-center">Asynchoronous JavaScript And XML</H3>
<form>
    <div class="form-group">
<label for="user">Username:</label>
<input type="text" name="" id="user" class="form-control">
    </div>

  <div class="form-group">
  <label for="pwd">Password:</label>
<input type="text" name="" id="pwd" class="form-control">
  </div>

<div class="form-group">
        <label>choose State:</label>
        <select class="form-control" onchange="myfun(this.value)">
        <option> select state</option>
            <option> Maharashtra</option>
            <option> UP</option>
            <option> Bihar</option>
            <option> Bhopal</option> 

</select>
</div>
<div class="form-group">
        <label>choose city:</label>
        <select class="form-control" id="city">
            <option> select city</option>
</select>
    </div>
</form>
</div>
        </div>
    </div>
    <script type="text/javascript">
        function myfun(data)
        {
            alert(data);
            var req=new XMLHttpRequest();
            req.open("GET","http://localhost/ajax/response.php?datavalue="+data,true);
            req.send();

            req.onreadystatechange=function(){
                if(req.readyState==4 && req.status==200){
                    document.getElementById("city").innerHTML=req.responeText;
                }
            }
 }
    </script>
</body>
</html>















