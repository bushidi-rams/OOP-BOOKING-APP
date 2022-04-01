

<form action="Page2.php" method="post">

    <label for="name" >First Name <br> </label>
    <input  type="text" name="name">

    <label for="lastName"><br><br>Surname <br> </label>
    <input type="text" name="lastName">

    <label for="HotelSelection"><br><br>Select your Hotel by clicking the dropdown menu below <br> </label>
        
        <select name="HotelSelection">
            <option selected="selected">Select One</option>
            <?php
            // A sample product array
            $products = array("Pavillon", "Tracy", "Table Mountain", "Long Mart");
        
            // Iterating through the product array
            foreach($products as $item){
                echo "<option>$item</option>";
            }
            ?>
        </select>


    <label for="Ndays"><br><br>Number of Days <br> </label>
    <input type="text" name="Ndays">

<input type="submit">
</form>