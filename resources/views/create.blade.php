<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="{{asset('css/create.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <a href="{{route('library.home')}}"><button class="backbtn">Back</button></a>
    <form action="{{route('library.create')}}" method="post">
        @csrf
        <div class="atas">
            <div class="sampingkan">
                <label for="title">Title of the Book</label>
                <div class="turunkan">
                    <input type="text" name="title" placeholder="Title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="sampingkan">
                <label for="author">Author of the Book</label>
                <div class="turunkan">
                    <input type="text" name="author" placeholder="Author">
                    @error('author')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="sampingkan">
                <label for="pages">Total Number of Pages</label>
                <div class="turunkan">
                    <input type="number" name="pages" placeholder="Number of Pages">
                    @error('pages')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="sampingkan">
                <label for="year">Year Published</label>
                <div class="turunkan">
                    <input type="number" name="year" placeholder="Year Published" class="form-control @error('year') is-invalid @enderror">
                    @error('year')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="tombol">
            <button type="submit" class="editbtn"><span class="tulisannya">Submit</span></button>
        </div>
    </form>
</body>
</html>