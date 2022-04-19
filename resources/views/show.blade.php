<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <title>Document</title>
    <style type="text/css">
        .w-5{
            width:15px;
            }
    </style>
</head>   
<body>
    <div class="container-fluid table-striped">
        <table class="table table-striped table-sm bg-dark table-hover text-center mt-4">
            <button class="btn btn-default"><a href="/">Add new</a></button>
            
            <thead class="bg-dark text-light">
            <tr>
                <th class=" text-capitalize text-bold" >post id</th>
                <th class=" text-capitalize">post title</th>
                <th class=" text-capitalize">post author</th>
                <th class=" text-capitalize">post delete</th>
                <th class=" text-capitalize">post update</th>
            </tr>
            </thead>
            @foreach($posts as $post)
            <tbody class="">
            <tr class="table-light">
                <td class="table-light">{{$post->id}}</td>
                <td class="table-light text-uppercase">{{$post->post_title}}</td>
                <td class="table-light text-capitalize">{{$post->post_author}}</td>
                <td class="table-light text-capitalize"><a href="/delete/{{$post->id}}" class="btn btn-danger">delete</a></td>
                <td class="table-light text-capitalize"><a href="/edit/{{$post->id}}" class="btn btn-success">edit</a></td>
            </tr>
            </tbody>
            @endforeach
        </table>
        <ul class="pagination justify-content-center">
            <li class="page-item">{{$posts->links()}}</li>
        </ul>
    </div>
</body>
</html>
