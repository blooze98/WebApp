<!DOCTYPE html>
<html>
    
<head>
<title>Page Title</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
</head>
    
    
<body>
    
    <?php require_once 'nav.php' ?>
    
    <div id="maincontent" class="container">
    
    <h1>ترجمہ<br>
        Translate
    </h1>
    
    <form method="get" action="results.php">
        
    <div id="transearch">
        <input type="text" id="searchinput" placeholder="Search" name="t"> <button id="btn" type="submit">Search</button>
    </div>
        
        </form>
    
    <br>
    
    <h2> اقسام
        <br>Categories</h2>
        
        <table id="category" border="1px;" width="100%">
                    
            <tr>
                <td><a href="CommPhrase.php">Basic Conversation</a></td><td>اساسی گفتگو</td>
            </tr>
            
            <tr>
                <td><a href="Family.php">Family</a></td><td>خاندان</td>
            </tr>
            <tr>
                <td><a href="Questions.php">Questions</a></td><td>سوالات</td>
            </tr>
            <tr>
                <td><a href="UsefulPhrases.php">Useful Phrases</a></td><td> فائدہ مند عبارت</td>
            </tr>
            
        
        </table>
        
   
     </div>
    
    <footer id="footer">
      
    </footer>
        
    
    
    
    

</body>
</html>