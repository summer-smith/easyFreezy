<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Easy Freezy- Bread and Breakfast Recipes</title>
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
            <h3>Bread and Breakfast Recipes</h3>
            <hr class="lightBlue"/>
            <img src="/images/articleImages/breadAndBreakfast.png" style="width:40%" alt="filler image">
        </div>
        
        <div>
            <hr class="lightBlue"/>
            <a href="/content/recipePages/recipes/pancakes.php" title="pancakes">Pancakes</a>
            <span> | </span>
            <a href="/content/recipePages/recipes/breakfastBurritos.php" title="breakfast burritos">Breakfast Burritos</a>
            <span> | </span>
            <a href="/content/recipePages/recipes/muffins.php" title="muffins">Muffins</a>
        </div>
        
        <div>
            <hr class="lightBlue"/>
        
            <h5>More recipes:</h5>
            <a href="http://freeze-happy.blogspot.com/2009/04/make-ahead-garlic-bread.html" title="make ahead garlic bread">
                Garlic bread
            </a>
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