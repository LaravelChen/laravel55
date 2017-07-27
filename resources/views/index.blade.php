<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="margin-top: 100px">
    <div class="col-md-8 col-md-offset-2">
        <form method="POST" action="{{url('/posts')}}" accept-charset="UTF-8">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title" class="control-label">User:</label>
                <input id="title" name="title" type="text" class="form-control" required="required">
            </div>
            <div class="form-group">
                <label for="body" class="control-label">Body:</label>
                <input id="body" name="body" type="text" class="form-control" required="required">
            </div>
            <button type="submit" class="btn btn-success form-control">提交</button>
        </form>
    </div>
</div>
</body>
</html>