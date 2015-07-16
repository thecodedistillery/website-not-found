<?php header('HTTP/1.0 404 Not Found') ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://thecodedistillery.github.io/website-not-found/css/all.css">

</head>
<body>

<article>
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="342.72px" height="342.72px" viewBox="137.7 151.2 342.72 342.72" enable-background="new 137.7 151.2 342.72 342.72" xml:space="preserve">
        <path d="M411.307,151.2H206.813c-38.109,0-69.113,31.004-69.113,69.113v204.494c0,38.109,31.004,69.113,69.113,69.113h204.494,c38.109,0,69.113-31.004,69.113-69.113V220.313C480.42,182.204,449.416,151.2,411.307,151.2z M474.3,424.807,c0,34.737-28.256,62.993-62.993,62.993H206.813c-34.737,0-62.993-28.256-62.993-62.993V220.313,c0-34.737,28.256-62.993,62.993-62.993h204.494c34.737,0,62.993,28.256,62.993,62.993V424.807z"/>
        <polygon points="421.196,203.991 312.695,312.493 204.194,203.991 199.867,208.318 308.368,316.819 199.867,425.327,204.194,429.654 312.695,321.152 421.196,429.654 425.523,425.327 317.022,316.819 425.523,208.318"/>
    </svg>
    <h1>Website Not Found</h1>
    <p>Sorry, but no website with the name <strong><?=$_SERVER['SERVER_NAME']?></strong> was found on the <strong>{server name}</strong> server.</p>
    <a href="mailto:jonathan@codedistillery.ca">Contact support</a>
</article>

</body>
</html>