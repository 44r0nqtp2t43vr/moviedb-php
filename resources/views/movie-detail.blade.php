<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Movie Title:</th>
            <td>{{ $data->mov_title }}</td>
        </tr>
        <tr>
            <th>Year:</th>
            <td>{{ $data->mov_year }}</td>
        </tr>
        <tr>
            <th>Running Time:</th>
            <td>{{ $data->mov_time }} minutes</td>
        </tr>
        <tr>
            <th>Directed By:</th>
            <td>
                @foreach($data->directors as $director)
                    {{ $director->dir_fname }} {{ $director->dir_lname}}
                @endforeach
            </td>
        </tr>
        <tr>
            <th>Starring:</th>
            <td></td>
        </tr>
        <tr>
            <th>Genre:</th>
            <td></td>
        </tr>
        <tr>
            <th>Rating:</th>
            <td></td>
        </tr>
        <tr>
            <th>Score:</th>
            <td></td>
        </tr>
    </table>
    <a href="{{ route('movies') }}"><button>Go Back to List</button></a>
</body>
</html>