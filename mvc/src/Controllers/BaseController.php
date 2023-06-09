<?php

namespace  App\Controllers;

use App\Exceptions\ViewNotFoundException;

class BaseController implements IController{

    public function view(string $viewName, array|null $viewData = []): string
    {
        try {
            $viewPath = __DIR__."/../Views/{$viewName}.php";
            if(!is_file($viewPath)){
                throw new ViewNotFoundException(message: "View <b>{$viewPath}</b> Not Found");
            }
            extract($viewData);
            return include_once __DIR__."/../Views/{$viewName}.php";

        }catch (ViewNotFoundException $th){
            return $this->view("exception", ["exception" => $th->getMessage()]);
        }catch (\Throwable $th){

            return $th->getMessage();
        }
    }
}