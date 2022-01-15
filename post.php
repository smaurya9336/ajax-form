<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX POST Request</title>
</head>
<body>
    <div id="result">Here result will be show.</div><br>
    <button onclick="send_get_request()">click Here To send Post Request</button>
    <script type="text/javascript">
        function send_get_request(){
            var xhttpreq=new XMLHttpRequest();
            xhttpreq.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById('result').innerHTML=this.responseText;
                }
            };
        
        /*make formData object and put value inside it*/
        let send_data=new FormDate();
        send_data.append('name','Sarita Maurya');
        send_data.append('age',20);
        send_data.append('destignation','web developer');
        send_data.append('contact','abc@gmail.com');
        send_data.append('about','All about Sarita Maurya');
        xhttpreq.open('POST','handle_request.php',true);
        xhttpreq.send(send_data);
    }
    </script>
</body>
</html>