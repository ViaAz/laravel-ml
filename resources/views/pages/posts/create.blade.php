<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts' page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Create post</h1>
            <form action="{{ route('posts.store') }}" method="post">
            @csrf <!-- for sending form with help Route::post-->
                <div class="form-group">
                    <label for="header">
                        Header:
                    </label>
                    <input id="header" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="body">
                        Notes:
                    </label>
                    <textarea id="body" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
