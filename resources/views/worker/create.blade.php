<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div>
    Create worker
    <form action="{{ route('worker.store') }}" method="POST">
        @csrf
        <div style="margin-bottom: 10px;">
            <input
                type="text"
                value="{{ old('name') }}"
                name="name"
                placeholder="name"
            >
            @error('name')
                {{$message}}
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <input
                type="text"
                value="{{ old('surname') }}"
                name="surname"
                placeholder="surname"
            >
            @error('surname')
                {{$message}}
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <input
                type="email"
                value="{{ old('email') }}"
                name="email"
                placeholder="email"
            >
            @error('email')
                {{$message}}
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <input
                type="number"
                value="{{ old('age') }}"
                name="age"
                placeholder="age"
            >
            @error('age')
                {{$message}}
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <textarea
                name="description"
                placeholder="description"
            >{{ old('description') }}
            </textarea>
            @error('description')
            {{$message}}
            @enderror
        </div>
        <div style="margin-bottom: 10px;">
            <label for="isMarried">Is married</label>
            <input
                type="checkbox"
                {{ old("is_married") ? ' checked' : '' }}
                name="is_married"
                id="isMarried"
            >
            @error('is_married')
                {{$message}}
            @enderror
        </div>
        <button type="submit">ADD</button>
    </form>
</div>
</body>
</html>
