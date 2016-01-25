<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 25/01/16
 * Time: 16:19
 */

namespace app\Repositories;


use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

abstract class Repository implements RepositoryInterface
{

    protected $model;

    /**
     * UserRepository constructor.
     * @param $model
     */
    public function __construct()
    {
        $this->model = $this->makeModel();
    }

    abstract function model();

    public function makeModel()
    {
        $model = App::make($this->model());

        if ($model instanceof Model) {
            throw new Exception;
        }

        return $model;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        //return $this->model::all();
    }

    public function paginate($perPage = 15, $columns = array('*'))
    {
        // TODO: Implement paginate() method.
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function find($id, $columns = array('*'))
    {
        // TODO: Implement find() method.
    }

    public function findBy($field, $value, $columns = array('*'))
    {
        // TODO: Implement findBy() method.
    }
}