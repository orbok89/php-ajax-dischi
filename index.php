<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <label for="generi_musicali">Filtra per genere</label>
        <select v-model="genere"  @change="$emit('filtro', genere)">
        <option disabled value="">seleziona genere</option>
        <option >Rock</option>
        <option>Metal</option>
        <option>Pop</option>
        <option>Jazz</option>
        </select>
    </header>
    <div class="container">
    <?php 
        include 'api/database.php';
        foreach ($db as $disco){
            echo '<div class="locandina">';
            echo '<img class="resize" src="'.$disco['poster']. '" alt="">';
            echo '<div class="centro">' .$disco['title']. '</div>';
            echo '<div>' .$disco['author']. '</div>';
            echo '</div>';
        }
    ?>    
    </div>

</body>
</html>