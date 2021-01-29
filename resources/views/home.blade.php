<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Mentol</title>
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="library-title">
        <span class="library-txt">Library</span>
        <span>PT. Mentol</span>
    </div>

    <div class="tabelnya">
        <table>
            <thead>
                <th>Title</th>
                <th>Author</th>
                <th>Pages</th>
                <th>year</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td>{{ $data -> title }}</td>
                    <td>{{ $data -> author }}</td>
                    <td>{{ $data -> pages }}</td>
                    <td>{{ $data -> year }}</td>
                    <td><a href="{{route('library.edit', $data->id)}}"><button type="submit" class="editbtn">Edit</button></a></td>
                    <td>
                        <form action="{{route('library.delete', $data->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="deletebtn">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('library.create')}}"><button type="submit" class="addbtn">Add New Book</button></a>
    </div>
</body>
</html>