<?php

namespace App\Http\Controllers;

use App\Http\Requests\Worker\IndexRequest;
use App\Http\Requests\Worker\StoreRequest;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class WorkerController extends Controller
{
    public function index(IndexRequest $request)
    {
        $data = $request -> validated();
        $workerQuery = Worker::query();

        if (isset($data['name'])) {
            $workerQuery->where('name', 'like', "%{$data['name']}%");
        }

        if (isset($data['surname'])) {
            $workerQuery->where('surname', 'like', "%{$data['surname']}%");
        }

        if (isset($data['email'])) {
            $workerQuery->where('email', 'like', "%{$data['email']}%");
        }

        if (isset($data['to'])) {
            $workerQuery->where('age', '<', $data['to']);
        }

        if (isset($data['from'])) {
            $workerQuery->where('age', '>', $data['from']);
        }

        if (isset($data['description'])) {
            $workerQuery->where('description', 'like', "%{$data['description']}%");
        }

        $workers = $workerQuery -> paginate(3);

        return view('worker.index', compact('workers'));
    }

    public function show(Worker $worker)
    {
        return view('worker.show', compact('worker'));
    }

    public function create()
    {
        return view('worker.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $data["is_married"] = isset($data["is_married"]);
        Worker::create($data);

        return redirect()->route('worker.index');
    }

    public function edit(Worker $worker)
    {
        return view('worker.edit', compact('worker'));
    }


    public function update(Worker $worker, StoreRequest $request)
    {
        $data = $request->validated();
        $data["is_married"] = isset($data["is_married"]);
        $worker->update($data);
        return redirect()->route('worker.show', $worker->id);

    }

    public function delete(Worker $worker)
    {
        $worker->delete();
        return redirect()-> route('worker.index', $worker->id);
    }
}
