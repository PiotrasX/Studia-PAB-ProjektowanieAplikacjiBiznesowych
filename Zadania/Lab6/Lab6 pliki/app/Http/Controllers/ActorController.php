<?php

namespace App\Http\Controllers;
use App\Models\Actor;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\UpdateActorRequest;
use App\Http\Resources\ActorCollection;
use App\Http\Resources\ActorResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Actor::query();

        $sorts = explode(',', $request->input('sort', ''));

        foreach ($sorts as $sortColumn) {
            $sortDirection = Str::endsWith($sortColumn, '$DESC') ? 'desc' : 'asc';
            $sortColumn = Str::beforeLast($sortColumn, '$DESC');
            $sortColumn = Str::beforeLast($sortColumn, '$ASC');

            $query->orderBy(Str::snake($sortColumn), $sortDirection);
        }

        foreach ($request->query() as $key => $value)
        {
            if (!in_array($key, ['sort', 'perPage', 'page'])) {
                $query->where(Str::snake($key), $value);
            }
        }

        $actors = $request->filled('perPage') ? $query->simplePaginate($request->input('perPage')) : $query->get();

        return new ActorCollection($actors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActorRequest $request)
    {
        return new ActorResource(Actor::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        return new ActorResource($actor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActorRequest $request, Actor $actor)
    {
        $actor->update($request->validated());
        $actor = $actor->refresh();
        return new ActorResource($actor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        $actor->delete();
        return response()->json(null, 204);
    }
}
