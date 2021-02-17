<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beer and Code ToDo</title>
    @livewireStyles
    <style>
        body {
            font-family: "Nunito";
            font-size: 16px;
        }

        div.container {
            width: 78%;
            margin: 0 auto;
        }

        form div,
        form label,
        form input {
            display: block;
        }

        form div {
            margin-bottom: 10px;
        }

        form input {
            padding: 5px;
            width: 100%;
            border-radius: 5px;
            border: none;
            border-bottom: 1px solid #ccc;
            outline: none;
        }

        form button {
            padding: 10px 15px;
            background: #036;
            border: 1px solid #000;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
        }

        div.error-message {
            color: #f00;
            font-weight: bold;
            padding-top: 4px;
        }
        .alert {
            width:100%;
            padding:10px 15px;
            border: 1px solid #036;
        }
    </style>
</head>

<body>

    <livewire:contato></livewire:contato>

    @livewireScripts
</body>

</html>