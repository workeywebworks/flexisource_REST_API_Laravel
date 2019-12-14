<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>FlexiSource</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 20px;
        }

        .full-height {
            height: 100%;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .importer {
            margin-bottom: 10px;
        }

        .importer input[type=text] {
            padding: 10px;
            border: 2px solid blueviolet;
            width: 300px;
        }

        .importer input[type=text]:focus,
        .importer .btn:focus {
            outline: none;
        }

        .importer .btn {
            padding: 10px;
            border: 2px solid blueviolet;
            margin-left: -8px;
            background-color: blueviolet;
            color: white;

        }

        .importer .btn:hover {
            background-color: #fff;
            cursor: pointer;
            color: blueviolet;

        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 600px;
            margin:20px auto;
        }

        th {
            height: 20px;
            background-color: rgba(100, 123, 100, 1);
            color: white;
            font-weight: 700;
        }

        table,
        th,
        td {

            border: none;
        }

        table tbody td.to-left {
            text-align: left;
        }

        table tbody tr:hover {
            background-color: rgba(100, 123, 100, 0.1);
        }

        ul.pagination {
            padding: 0px;
            margin: 0px;

        }

        ul.pagination li {
            display: inline;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">

            <div class="title m-b-md">
                {{ $player->first_name .' '. $player->second_name }}
            </div>


<a href="{{ url('/') }}">Back</a>
            <table>


                <tbody>
                    <tr>
                        <td class="to-left"><strong>Id:</strong> {{ $player->id }}</td>
                    </tr>
                    </tr>
                    <td class="to-left"><strong>From:</strong> {{ $player->form }}</td>
                    </tr>
                    </tr>
                    <td class="to-left"><strong>Total Points:</strong> {{ $player->total_points }}</td>
                    </tr>
                    </tr>
                    <td class="to-left"><strong>Influence:</strong> {{ $player->influence }}</td>
                    </tr>
                    </tr>
                    <td class="to-left"><strong>Creativity:</strong> {{ $player->creativity }}</td>
                    </tr>
                    </tr>
                    <td class="to-left"><strong>Threat:</strong> {{ $player->threat }}</td>
                    </tr>
                    </tr>
                    <td class="to-left"><strong>ICT Index:</strong> {{ $player->ict_index }}</td>
                    </tr>

                </tbody>
            </table>


        </div>
    </div>
</body>

</html>