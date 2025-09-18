<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Kirjautuminen</title>
  </head>
  <body>
    <h2>Kirjaudu palkkalaskuriin</h2>
    <form action="kirjautuminen.php" method="post">
      <label>
        Käyttäjätunnus:
        <input type="text" name="username" required />
      </label>
      <br /><br />
      <label>
        Salasana:
        <input type="password" name="password" required />
      </label>
      <br /><br />
      <button type="submit">Kirjaudu</button>
    </form>
  </body>
</html>
