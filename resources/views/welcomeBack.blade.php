<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BAKRI AHMAD RIDHWAN | Developer</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: cursive, Verdana, Geneva, Tahoma, sans-serif;
    }

    body {
        background-color: dimgray;
    }

    .container {
        width: 100%;
        height: 100vh;
        text-align: center;
        line-height: 100vh;
        font-size: 1.5em;
    }


    .container h1 {
        color: white;
        transform: scale(1);
        transition: all .3s ease;
    }

    .container h1:hover {
        font-weight: bold;
        transform: scale(.5);
        transition: all .3s ease;
    }


    /* The animation code */
    @keyframes example {
        from {
            background-color: darkviolet;
        }

        to {
            background-color: darkcyan;
        }
    }

    /* The element to apply the animation to */
    div {
        width: 100px;
        height: 100px;
        background-color: dimgray;
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
        transition: all .5s ease;
    }
</style>

<body>
    <div class="container">
        <h1>BAKRI</h1>
    </div>
</body>

</html>
