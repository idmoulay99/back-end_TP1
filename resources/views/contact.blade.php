<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Page</title>
</head>

<body>
  <h1>Contacter Nous</h1>
  <form method="POST" action="{{ route('contact') }}">
    @csrf
    <label for="nom">Nom</label><br>
    <input id="nom" type="text" name="nom" placeholder="Entrer votre nom">

    <br>

    <label for="email">Nom</label><br>
    <input id="email" type="email" name="email" placeholder="nom@example.com">

    <br>

    <label for="message">Message</label><br>
    <textarea id="message" name="message"></textarea>

    <br>

    <button type="submit">Envoyer</button>
  </form>
</body>

</html>
