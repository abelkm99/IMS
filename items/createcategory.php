<html>
    <body>
    <?php
        include "itemsnav.php";
        include "../DB.php";
        $db = new dbOperation();

    ?>
    <h1>create new category</h1>
    <div>
    <form action="createcategory.php" method="POST">
        <fieldset>
            <legend>Category Form</legend>
            Category Type <input type="text" name="categoryType"><br><br>
            <input type="submit" name="add category">
        </fieldset>
        </form>
    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $db->AddCategory();
        }    
    ?>
    </body>
</html>