<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Easy Freezy: Recipe Index</title>
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
        <h3>Recipes</h3>
        <div style="width:40%">
        <ul style="text-align:left" class="content">
            <li>
                    <a href="/content/recipePages/chickenRecipes.php" title="Chicken">Chicken</a>
            </li>
            <li>
                    <a href="/content/recipePages/beefRecipes.php" title="Beef">Beef</a>
            </li>
            <li>
                    <a href="/content/recipePages/porkRecipes.php" title="Pork">Pork</a>
            </li>
            <li>
                    <a href="/content/recipePages/breadBreakfast.php" title="Bread and breakfast">Bread and Breakfast</a>
            </li>
            <li>
                <a href="/content/recipePages/ricePasta.php" title="Rice and Pasta">Rice and Pasta</a>
            </li>
            <li>
                    <a href="/content/recipePages/dessert.php" title="Dessert">Dessert</a>
            </li>
        </ul>
        </div>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>  
    </footer>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/copyright.php'; ?>  
  </body>
</html>

