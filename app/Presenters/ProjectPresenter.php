<?php
/**
 * Created by PhpStorm.
 * User: biondo
 * Date: 20/02/16
 * Time: 17:09
 */

namespace CodeProject\Presenters;


use CodeProject\Transformers\ProjectTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProjectPresenter extends FractalPresenter
{
    public function getTransformer()
    {
        return new ProjectTransformer();
    }
}