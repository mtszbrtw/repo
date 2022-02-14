<?php


namespace App\Repositories;


use App\Interfaces\RepositoryInterface;
use App\Models\cars;

class Repository implements RepositoryInterface
{

    public function getAll()
    {
        // TODO: Implement getAll() method.

        return cars::all();
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return cars::create($data);
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.

        return cars::whereId($id)->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.

         cars::destroy($id);
    }

    public function find($id)
    {
        // TODO: Implement find() method.

        return cars::findOrFail($id);
    }
}