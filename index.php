<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <main>
        <form action="badwords.php" method="POST">
            <input type="text-area" name="paragraph" placeholder="Inserisci il tuo paragrafo">
            <input type="text" name="censureWord" placeholder="Inserisci parola da censurare">
            <button>Send</button>
        </form>
    </main>
</body>
</html>