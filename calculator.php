<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>


    <title>Calculator CSS</title>

    <style>
        body {
            background-color: #151515;
        }

        #calculator {
            background-color: #4d4d4d;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            border-radius: 20px;
            box-shadow: 5px 20px 40px 5px #404040;
        }

        #calculator h2 {
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            color: white;
        }

        #calculator div {
            height: 70px;
            display: flex;
            flex-direction: row;
            width: 270px;
        }

        #calculator div button {
            border-radius: 10px;
            border: none;
            transition: 0.2s;
            cursor: pointer;
            font-size: 26px;
            background-color: #2d2d2d;
            color: gray;
        }

        #calculator div button:hover {
            transform: scale(0.95, 0.95);
            color: white;
        }

        #calculator .result .cButton {
            background-color: #990000;
        }

        #calculator .result input {
            border-radius: 10px;
            padding: 10px;
            font-size: 20px;
            background-color: transparent;
            border: none;
            color: gray;
            border-bottom: 1px solid #2d2d2d;
        }

        #calculator .result input::placeholder {
            color: gray;
        }

        #calculator .result input:focus {
            outline: none;
            border-bottom: 2px solid #fff;
        }

        #calculator .result button {
            width: 30%;
            color: white
        }

        #calculator div>* {
            margin: 2px;
            padding: 15px;
            width: 100%;
        }

        #calculator div .equall {
            color: white;
            background-color: #e68a00;
        }
    </style>
</head>

<body>


    <div id="calculator" class="light">
        <h2>Calculator</h2>
        <div class="result">
            <input type="text" id="result" placeholder="0">
            <button onclick="$('#result').val('')" class="cButton">C</button>
        </div>
        <div>
            <button onclick="$('#result').val($('#result').val()+ 1)">1</button>
            <button onclick="$('#result').val($('#result').val()+ 2)">2</button>
            <button onclick="$('#result').val($('#result').val()+ 2)">3</button>
            <button onclick="$('#result').val($('#result').val()+ '+')">+</button>
        </div>
        <div>
            <button onclick="$('#result').val($('#result').val()+ 4)">4</button>
            <button onclick="$('#result').val($('#result').val()+ 5)">5</button>
            <button onclick="$('#result').val($('#result').val()+ 6)">6</button>
            <button onclick="$('#result').val($('#result').val()+ '-')">-</button>
        </div>
        <div>
            <button onclick="$('#result').val($('#result').val()+ 7)">7</button>
            <button onclick="$('#result').val($('#result').val()+ 8)">8</button>
            <button onclick="$('#result').val($('#result').val()+ 9)">9</button>
            <button onclick="$('#result').val($('#result').val()+ '*')">x</button>
        </div>
        <div>
            <button onclick="$('#result').val($('#result').val()+ '/')">/</button>
            <button onclick="$('#result').val($('#result').val()+ 0)">0</button>
            <button onclick="$('#result').val($('#result').val()+ '.')">.</button>
            <button class="equall" onclick="getTotal()">=</button>
        </div>
    </div>


    <script>
        function getTotal() {
            var result = eval($("#result").val())
            $("#result").val(result)
        }
        $(document).ready(function() {

        });
    </script>

</body>

</html>
