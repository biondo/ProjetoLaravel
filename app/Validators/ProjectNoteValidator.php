<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 16/02/16
 * Time: 13:05
 */

namespace CodeProject\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectNoteValidator extends LaravelValidator
{
    protected $rules = [
        'project_id' => 'required|integer',
        'title' => 'required',
        'note' => 'required'
    ];

}