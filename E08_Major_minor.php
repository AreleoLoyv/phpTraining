<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mayor y Menor</title>
</head>
<body>
    <form action="E08_action.php">
        <div id="list" class="list">
            <p>Ancho<input id='ancho0' name='ancho0' type='text'></p>    
            <p>Alto<input id='alto0' name='alto0' type='text'></p>
            <input id='add' type='button' value='+'>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <script>
        document.getElementById('add').addEventListener('click',add);
        var n = 0;
        function add(){
            document.getElementById('add').removeEventListener('click',add);
            console.log("ta bien");
            n++;
            var old = "<input id=\"add\" type=\"button\" value=\"+\">";
            var n3w = "<p>Ancho<input id=\"alto"+n+"\"name=\"alto"+n+"\"type=\"text\"></p><p>Alto<input id=\"alto"+n+"\" name=\"alto"+n+"\" type=\"tex\"></p><input id=\"add\" type=\"button\" value=\"+\">";
            var i = document.getElementById("list").innerHTML;
            document.getElementById("list").innerHTML = i.replace(old, n3w);
            document.getElementById('add').addEventListener('click',add);
        }
    </script>
</body>
</html>