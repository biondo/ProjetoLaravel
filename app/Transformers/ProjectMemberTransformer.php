<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 20/02/16
 * Time: 16:55
 */

namespace CodeProject\Transformers;

use CodeProject\Entities\User;
use League\Fractal\TransformerAbstract;

class ProjectMemberTransformer extends TransformerAbstract
{
    public function transform(User $member){
        return [
            'member_id'=>$member->id,
            'name'=>$member->name,

        ];


    }
}