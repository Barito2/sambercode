
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="{{ url('welcome') }}" method="POST" >
    @csrf
        <label for="firstName">First Name:</label><br><br>
        <input type="text" name="firstName"><br><br>

        <label for="lastName">Last Name:</label><br><br>
        <input type="text" name="lastName"><br><br>

        <label for="gender">Gender</label><br>
        <input type="radio" name="gender"> Male <br>
        <input type="radio" name="gender"> Female <br>
        <input type="radio" name="gender"> Other <br><br>

        <label for="nasionalty">Nasionalty</label><br><br>
        <select name="nasionalty" id="">
            <option value="1">Indonesia</option>
            <option value="2">Singapura</option>
            <option value="2">Malaysia</option>
        </select><br><br>

        <label for="laguage">Laguage Spoken:</label><br><br>
        <input type="checkbox"> Bahasa Indonesia <br>
        <input type="checkbox"> English <br>
        <input type="checkbox"> Other <br><br>

        <label for="bio">Bio:</label><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html> 