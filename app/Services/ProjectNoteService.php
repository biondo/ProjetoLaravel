<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 16/02/16
 * Time: 12:37
 */

namespace CodeProject\Services;


use CodeProject\Entities\Project;
use CodeProject\Repositories\ClientRepository;
use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Validators\ClientValidator;
use CodeProject\Validators\ProjectNoteValidator;
use Illuminate\Contracts\Validation\ValidationException;

class ProjectNoteService
{
    /**
     * @var ProjectRepository
     */
    protected $repository;
    /**
     * @var ProjectValidator
     */
    private $validator;

    public function __construct(ProjectNoteRepository $repository, ProjectNoteValidator $validator)
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