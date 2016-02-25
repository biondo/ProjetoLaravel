<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 16/02/16
 * Time: 10:30
 */

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;


class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model(){
        return Client::class;
    }
}