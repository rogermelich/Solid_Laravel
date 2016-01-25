<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 25/01/16
 * Time: 16:16
 */
namespace app\Repositories;


/**
 * Created by PhpStorm.
 * User: roger
 * Date: 18/01/16
 * Time: 18:01
 */
interface RepositoryInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all();

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}