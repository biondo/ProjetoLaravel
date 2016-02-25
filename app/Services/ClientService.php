<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 16/02/16
 * Time: 12:37
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ClientRepository;
use CodeProject\Validators\ClientValidator;
use Illuminate\Contracts\Validation\ValidationException;

class ClientService
{
    /**
     * @var ClientRepository
     */
    protected $repository;
    /**
     * @var ClientValidator
     */
    private $validator;

    public function __construct(ClientRepository $repository, ClientValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data){
        //pode ser executado um serviço como: enviar um email
        //disparar uma notificação
        //postar um tweet
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        } catch(ValidationException $e){
            return[
              'error' => true,
                'message'=>$e->getMessageBag()
            ];
        }

    }

    public function update(array $data, $id){

        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        } catch(ValidationException $e){
            return[
                'error' => true,
                'message'=>$e->getMessageBag()
            ];
        }

    }
}