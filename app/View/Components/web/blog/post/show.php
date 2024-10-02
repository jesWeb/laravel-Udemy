<?php

namespace App\View\Components\web\blog\post;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class show extends Component
{
    /**
     * Create a new component instance.
     */


    //aqui definiremos el nombre de la prop que vamos a psar ya que se trabaja en una clase y podamos consumirla

    public $post;


    public function __construct($post)
    {
        //aqui inicializamos el contrucotr para traer los datos
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.web.blog.post.show');
    }
}
