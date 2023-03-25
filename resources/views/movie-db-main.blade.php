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
            <th>Movie ID</th>
            <th>Movie Title</th>
            <th>Year Made</th>
            <th>Length</th>
            <th>Language</th>
            <th>Date of Release</th>
            <th>Country Released</th>
            <th></th>
        </tr>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->mov_id }}</td>
                <td>{{ $item->mov_title }}</td>
                <td>{{ $item->mov_year }}</td>
                <td>{{ $item->mov_time }}</td>
                <td>{{ $item->mov_lang }}</td>
                <td>{{ $item->mov_dt_rel }}</td>
                <td>{{ $item->mov_rel_country }}</td>
                <td>
                    <a href="{{ route('movie', $item->mov_id) }}"><button>Movie Details</button></a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $data->links() }}
</body>
</html>
