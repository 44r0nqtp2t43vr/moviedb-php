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
        {{-- <tr>
            <th>Movie ID</th>
            <th>Movie Title</th>
            <th>Year Made</th>
            <th>Length</th>
            <th>Language</th>
            <th>Date of Release</th>
            <th>Country Released</th>
            <th></th>
        </tr>
        <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr> --}}
        <tr>
            <td>{{ $data[0]->mov_id }}</td>
            <td>{{ $data[0]->mov_title }}</td>
            <td>{{ $data[0]->mov_year }}</td>
            <td>{{ $data[0]->mov_time }}</td>
            <td>{{ $data[0]->mov_lang }}</td>
            <td>{{ $data[0]->mov_dt_rel }}</td>
            <td>{{ $data[0]->mov_rel_country }}</td>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</body>
</html>
