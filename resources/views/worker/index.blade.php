<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div>
    Index
    <div style="margin-top: 10px;">
        Filter
    </div>
    <div>
        <form action="{{ route('worker.index') }}">
            <input
                name="name"
                type="text"
                placeholder="name"
                value="{{request() -> get("name")}}"
            >
            <input
                name="surname"
                type="text"
                placeholder="surname"
                value="{{request() -> get("surname")}}"
            >
            <input
                name="email"
                type="email"
                placeholder="email"
                value="{{request() -> get("email")}}"
            >
            <input
                name="from"
                type="number"
                placeholder="from"
                value="{{request() -> get("from")}}"
            >
            <input
                name="to"
                type="number"
                placeholder="to"
                value="{{request() -> get("to")}}"
            >
            <input
                name="description"
                type="text"
                placeholder="description"
                value="{{request() -> get("description")}}"
            >
            <input
                name="is_married"
                type="checkbox"
                id="isMarried"
            >
            <label for="isMarried">Is married</label>
            <input type="submit" value="Check">
            <a href="{{ route('worker.index') }}">Reset</a>
        </form>
    </div>
    <hr>
    <div style="margin-top: 10px;">
            <a href="{{ route('worker.create') }}">Create new worker</a>
        </div>
        <hr>
        @foreach($workers as $worker)
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
                Description: {{$worker->description}}
            </div>
            <div>
                Is married: {{$worker->is_married}}
            </div>
            <div>
                <a href="{{ route('worker.show', $worker -> id) }}">View</a>
            </div>
            <div>
                <a href="{{ route('worker.edit', $worker -> id) }}">Edit</a>
            </div>
            <form action="{{route("worker.delete", $worker -> id )}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>
            </form>
            <hr>
        @endforeach
        <div class="nav__links">
            {{ $workers -> withQueryString()-> links() }}
        </div>
    </div>
    <style>
        .nav__links svg {
            width: 20px;
        }
    </style>
</body>
</html>
