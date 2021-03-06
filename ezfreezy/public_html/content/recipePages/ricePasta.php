<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Easy Freezy- Rice and Pasta Recipes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/main.css" />
    <link rel="shortcut icon" href="/images/favicon.ico" >  
</head> 

<body>
    <header> 
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigationBar.php'; ?>
    </header>
    
    <main>
        <div>
            <h3>Rice and Pasta</h3>
            <hr class="lightBlue"/>
            <img src="/images/articleImages/riceAndPasta.JPG" style="width:40%" alt="filler image">
        </div>
        
        <div>
            <hr class="lightBlue"/>            
            <a href="/content/recipePages/recipes/chickenRiceAndSausage.php" title="Chicken Rice and Sausage Casserole">Chicken, Rice, and Sausage Casserole</a>
            <span> | </span>
            <a href="/content/recipePages/recipes/chickenNoodle.php" title="Chicken noodle soup">Chicken Noodle Soup</a>
        </div>
        
        <div>
            <hr class="lightBlue"/>
            <h5>More recipes:</h5>
        
            <a href="http://www.skinnytaste.com/2012/09/baked-pasta-with-sausage-and-spinach.html#_a5y_p=1017774" title="Pasta and sausage bake">
                Baked pasta with sausage and spinach</a>
           <span> | </span>
           <a href="http://www.freeze-happy.blogspot.com/2009/06/pasta-bilities.html" title="baked ziti">Baked Ziti</a>
           
           <!--
           <span> | </span>
           <a href="" title=""></a>
           -->
        </div>
       
       <hr class="lightBlue"/>
        <p>Back to 
            <a href="/content/recipes.php" title="recipes">Recipes</a>
        </p>
        
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>  
    </footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/copyright.php'; ?>  
  </body>
</html>