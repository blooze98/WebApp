<!DOCTYPE html>
<html>
    
<head>
    
<title>Page Title</title>
   <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cache-control" content="no-cache" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
    
<body>
    
    <?php require_once 'nav.php' ?>
    
    
    <div class="container">
      <h1>ترجمہ<br>
        Translate
    </h1>
    
       <form method="get" action="results.php">
        
    <div id="transearch">
        <input type="text" id="searchinput" placeholder="Search" name="t"> <button id="btn" type="submit">Search</button>
    </div>
           
        </form>
    
    <br>

    <table id="commphrase" border="1px;" width="100%" font-size:="30px;">
                    
            <tr>
                    <th>English</th>
                    <th>Transliteration</th>
                    <th>Urdu</th>
            </tr>
            
<!--
            <tr>
                <td>Hi/Greetings</td>
                <td>Adaab/Salam</td>
                <td class="urdufnt">آداب/سلام</td>
            </tr>
            
            <tr>
                <td>How are you?</td>
                <td>Ap ka kia haal hai?</td>
                <td class="urdufnt">آپ کا کیا حال ہے؟</td>
            </tr>
        
             <tr>
                <td>I'm fine</td>
                <td>Mai theek hoo</td>
                <td>میں ٹھیک ہوں</td>
            </tr>
            
             <tr>
                <td>What is your name?</td>
                <td>Aapka naam kia hai?</td>
                <td>آپ کا کیا نام ہے</td>
            </tr>
        
            <tr>
                <td>My name is _____.</td>
                <td>Mera naam ______ hai</td>
                <td>میرا نام _____ ہے</td>
            </tr>
            
            <tr>
                <td>Thank you</td>
                <td>Shukria</td>
                <td>شکریہ</td>
            </tr>
        
              <tr>
                <td>Bye</td>
                <td>Khuda Hafiz</td>
                <td>خداحافظ</td>
            </tr>
        
             <tr>
                <td>Bye</td>
                <td>Khuda Hafiz</td>
                <td>&#1570;&#1583;&#1575;&#1576;\/&#1587;&#1604;&#1575;&#1605;</td>
            </tr>
-->
            
        
        </table>
        
    </div>
<script>
    $.ajax({
       url:"file.json",
       type:"get",
       dataType:"json",
       cache: false,
       error: function(a){
           console.log(a);
       },
       success: function(a){
           console.log(a);
           
           $.each(a, function(i,v){
               if (v.c == "Basic Conversation"){
               $('#commphrase').append('<tr><td>'+v.e+'</td><td>'+v.t+'</td><td class="urdufnt">'+v.u+'</td></tr>');
               }
             
           });
       
       }
   }); 
    </script>
    
     <footer id="footer">
      
    </footer>
    
    
</body>
</html>