<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Easy Freezy- Dessert Recipes</title>
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
            <h3>Dessert Recipes</h3>
            <hr class="lightBlue"/>
            <img src="/images/articleImages/desserts.JPG" style="width:40%" alt="filler image">
        </div>
        
        <div>
            <hr class="lightBlue"/>
        
            <a href="/content/recipePages/recipes/freezingCookies.php" title="cookies">Freezing Cookies</a>
            <span> | </span>
            <a href="/content/recipePages/recipes/cupcakes.php" title="cupcakes">Freezing Cupcakes</a>
        </div<
        
        <div>
            <hr class="lightBlue"/>
        
            <h5>More recipes:</h5>
            <a href="http://www.freeze-happy.blogspot.com/2010/02/chocolate-surprise-cake.html" title="chocolate cake">Chocolate Surprise Cake</a>
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