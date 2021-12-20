<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Movie</title>
</head>

<body>
    <div class="container">
        <form action="/movies.edit" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$edited_movie->id}}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Movie Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$edited_movie->movie_name}}" name="movie_name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Movie Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="movie_desc" value="{{$edited_movie->movie_desc}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Movie Generation</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="movie_gener" value="{{$edited_movie->movie_gener}}">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>

        </form>
    </div>
</body>

</html>