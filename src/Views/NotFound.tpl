<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {block name="css"}
        <link rel="stylesheet" href="./src/assets/css/pagenotfound.css" media="all"/>
    {/block}
</head>
<body>
<header>
    <div class="topnav">
        <a href="/todo">Home</a>
        <a class="active" href="/todo/list">ToDo's List</a>
    </div>
</header>
<main>
    <div class="not-found-block">
        <h2>Page is not found :(</h2>
        <br>
        <div>
            <img src="https://i.kym-cdn.com/entries/icons/mobile/000/026/489/crying.jpg" height="300">
        </div>
    </div>
</main>
</body>
</html>