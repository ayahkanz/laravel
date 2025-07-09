<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $attributes
     *
     * @return Model
     */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
     * @param $id
     * @return Model|null
     */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param array $data
     * @param $id
     * @return bool
     */
    public function update(array $data, $id): bool
    {
        return $this->model->find($id)->update($data);
    }

    /**
     * @param $id
     * @return bool|null
     */
    public function delete($id): ?bool
    {
        return $this->model->find($id)->delete();
    }
}
