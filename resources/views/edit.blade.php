<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Update data</h1>
        <form action="/update/{{$posts->id}}" method="POST">
            @csrf
            <div class="mb-2">
                <label for=""><b>Post title:</b></label>
                <input type="text" name="title" class="form-control"value={{$posts->post_title}}>
            </div>
            <div class="mb-2">
                <label for=""><b>Post author:</b></label>
                <input type="text" name="author" class="form-control"value={{$posts->post_author}}>
            </div>
            <input type="submit" name="update" value="update" class="btn btn-warning">
           
        </form>
    </div>
</body>
</html>