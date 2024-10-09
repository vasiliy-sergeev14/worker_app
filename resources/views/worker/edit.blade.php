@extends('layout.main')

@section('content')
    <div>
        Create worker
        <form action="{{ route('worker.update', $worker->id) }}" method="POST">
            @csrf
            @method("PATCH")
            <div style="margin-bottom: 10px;">
                <input
                    type="text"
                    value="{{old("name") ?? $worker->name}}"
                    name="name"
                    placeholder="name"
                >
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 10px;">
                <input
                    type="text"
                    value="{{old("surname") ?? $worker->surname}}"
                    name="surname"
                    placeholder="surname"
                >
                @error('surname')
                    {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 10px;">
                <input
                    type="email"
                    value="{{old("email") ?? $worker->email}}"
                    name="email"
                    placeholder="email"
                >
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 10px;">
                <input
                    type="number"
                    value="{{old("age") ?? $worker->age}}"
                    name="age"
                    placeholder="age"
                >
                @error('age')
                    {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 10px;">
                <textarea
                    name="description"
                    placeholder="description"
                >{{old("age") ?? $worker->description}}
                </textarea>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
            <div style="margin-bottom: 10px;">
                <label for="isMarried">Is married</label>
                <input
                    type="checkbox" {{$worker->is_married ? ' checked' : ''}}
                    name="is_married"
                    id="isMarried"
                >
                @error('is_married')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit">SAVE</button>
        </form>
    </div>
@endsection
