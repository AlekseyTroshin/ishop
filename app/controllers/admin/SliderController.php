<?php


namespace app\controllers\admin;

use app\models\admin\Slider;

/**
 * @property SLider $model
 */
class SliderController extends AppController
{

    public function indexAction()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update_slider();
            $_SESSION['success'] = 'Слайдер обновлён';
            redirect();
        }

        $gallery = $this->model->get_sliders();
        $title = 'Управление слайдером';
        $this->setMeta("Админка :: {$title}");
        $this->set(compact('title', 'gallery'));
    }

}