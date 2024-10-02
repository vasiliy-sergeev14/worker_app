<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <div>
        Show
        <hr>
            <div>
                Name: {{$worker->name}}
            </div>
            <div>
                Surname: {{$worker->surname}}
            </div>
            <div>
                Email: {{$worker->email}}
            </div>
            <div>
                Age: {{$worker->age}}
            </div>
            <div>
                description: {{$worker->description}}
            </div>
            <div>
                Is married: {{$worker->is_married}}
            </div>
            <a href="{{ route('worker.index') }}">Back</a>
            <hr>
    </div>
</body>
</html>
