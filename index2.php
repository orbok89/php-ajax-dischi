<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="root">
        <header>
            <label for="generi_musicali">Filtra per genere</label>
            <select v-model="genere"  @change=filtro()>
            <option disabled value="">seleziona genere</option>
            <option >Rock</option>
            <option>Metal</option>
            <option>Pop</option>
            <option>Jazz</option>
            </select>
        </header>
    
        <div class="container">
            <div v-for='(disco, index) in dischi_filtrati' class="locandina" >
                <img v-bind:src=" disco.poster" class="resize" alt="">
                <div class="centro"> {{disco.title}} </div>
                <div> {{disco.author}} </div>
                
                
                
                
            </div>
        </div>
            
       
    </div>
    <script src="main.js"></script>
</body>
</html>