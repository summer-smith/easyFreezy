<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Easy Freezy- Beef Recipes</title>
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
            <h3>Beef Recipes</h3>
            <hr class="lightBlue"/>
            <img src="/images/articleImages/porkRecipes.png" style="width:40%" alt="filler image">
        </div>
        
        <div>
            <hr class="lightBlue"/>
        
            <a href="/content/recipePages/recipes/beefStew.php" title="Beef Stew">Beef Stew</a>
            <span> | </span>
            <a href="/content/recipePages/recipes/steak.php" title="steak">Marinated Steak</a>
        </div>
        
        <div>
            <hr class="lightBlue"/>
        
            <h5>More recipes:</h5>
            <a href="http://www.freeze-happy.blogspot.com/2009/06/pasta-bilities.html" title="baked ziti">Baked Ziti</a>
            <span> | </span>
           <a href="http://www.ourbestbites.com/2009/04/spaghetti-and-meatballs/" title="meatballs">Spaghetti and Meatballs</a>
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
