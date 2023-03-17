<php ?>
<!DOCTYPE html>

<html lang="pt">

<head>

    <link rel="shortcut icon" href="a.ico" type=image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP</title>
</head>

<body>
    
    <form action="lpapi.php" method="POST">

        <label>Nome:</label><br />

        <input type="text" name="nome" /><br /><br />

        <label>E-mail:</label><br />

        <input type="email" name="email" /><br /><br />

        <label>Telefone:</label><br />

        <input type="telefone" name="telefone" /><br />


        <p>Escreva abaixo suas anotações ou comentários:</p>

	<textarea name= "anotac" rows="4" cols="50">

	</textarea>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

</body>

</html>

