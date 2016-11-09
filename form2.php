<html>
    <head>
        <title>Form1</title>
    </head>
    <body>
        <form>
            <?php echo $_POST["txtNombre"]; ?>
            <br>
            <select>
                <option><?php echo $_POST["txtNombre"]; ?></option>
            </select>
            <br>
            <input type="text" value="<?php echo $_POST["txtNombre"]; ?>"/>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
