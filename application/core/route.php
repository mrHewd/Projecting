<?php

class Route
{

	static function start()
	{
//            include 'application/views/main_view.php';
//            echo "route";
            
            // default
            $controller_name = 'Main';
            $action_name = 'index=0';

            $routes = explode('/', $_SERVER['REQUEST_URI']);
            $parms=explode('?',$routes[2]);

            // controller name
            if ( !empty($parms[0]) )
            {	
                    $controller_name = $parms[0];
            }

            // action name
            if ( !empty($parms[1]) )
            {
                    $action_name = $parms[1];
            }

            // prefix
            $model_name = 'Model_'.$controller_name;
            $controller_name = 'Controller_'.$controller_name;
//            $action_name = 'action_'.$action_name;

            
//            echo "Model: $model_name <br>";
//            echo "Controller: $controller_name <br>";
//            echo "Action: $action_name <br>";
            

            // include model

            $model_file = strtolower($model_name).'.php';
            $model_path = "application/models/".$model_file;
            if(file_exists($model_path))
            {
			include "application/models/".$model_file;
            }

            // include controller
            $controller_file = strtolower($controller_name).'.php';
            $controller_path = "application/controllers/".$controller_file;
            if(file_exists($controller_path))
            {
			include "application/controllers/".$controller_file;
            }
            else
            {
//                    Route::ErrorPage404();
            }

            // create controller
            $controller = new $controller_name;
            
//            $action = explode('=',$action_name)[0];
//            $par1 = explode('=',$action_name)[1];
            $par=array();
            foreach ( explode('&&',$action_name) as $parm){
//                    echo explode('=',$parm)[0]."!".explode('=',$parm)[1];
                    $par[explode('=',$parm)[0]]=explode('=',$parm)[1];
            }
            $action ="action_index";
            
            if( isset(explode('=',$parm)[0])&&explode('=',$parm)[0]=='input'){
                $action="action_".explode('=',$parm)[1];
//                echo $action;
            }
//                echo $action;
            if(method_exists($controller, $action))
            {
//                echo "SDasdasd";
                    $controller->$action($par);
            }
            else
            {
//                    Route::ErrorPage404();
            }
	
	}

//	function ErrorPage404()
//	{
//                $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
//                header('HTTP/1.1 404 Not Found');
//		header("Status: 404 Not Found");
//		header('Location:'.$host.'404');
//    }
    
}
