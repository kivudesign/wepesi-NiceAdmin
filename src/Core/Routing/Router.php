<?php

namespace Wepesi\Core\Routing;

use Wepesi\Core\View;
use Exception;

class  Router{

        private  $_url;
        private  array $routes;
        private  array $_nameRoute;

        function __construct()
        {
            $this->_nameRoute =[];
            $this->routes = [];
            $this->_url = $_SERVER['REQUEST_URI'];
        }

        /**
         * @param $path
         * @param $callable
         * @param null $name
         * @return Route
         */
        function get($path, $callable, $name=null): Route
        {
            return $this->add($path,$callable,$name,"GET");
        }

        /**
         * @param $path
         * @param $callable
         * @param null $name
         * @return Route
         */
        function post($path, $callable, $name=null): Route
        {
           return $this->add($path,$callable,$name,"POST");
        }

        /**
         * @param $path
         * @param $callable
         * @param $name
         * @param $methode
         * @return Route
         */
        private function add($path, $callable, $name, $methode): Route
        {
            $route = new Route($path, $callable);
            $this->routes[$methode][] = $route;

            if(is_string($callable) && $name==null){
                $name=$callable;
            }

            if($name){
                $this->_nameRoute[$name]=$route;
            }
            return $route;
        }

        /**
         * @throws Exception
         */
        protected function url($name, $params=[]): string
        {
            try{
                if(!isset($this->_nameRoute[$name])){
                    throw new \Exception('No route match');
                }
                return  $this->_nameRoute[$name]->geturl($params);
            }catch(\Exception $ex){
                return $ex->getMessage();
            }
        }

        /**
         * @throws Exception
         */
        function run(){
            try{
                if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
                    throw new \Exception('Request method is not defined ');
                }
                $routesRequestMethod= $this->routes[$_SERVER['REQUEST_METHOD']];
                $i=0;
                foreach($routesRequestMethod as $route){
                    if($route->match($this->_url)){
                        return $route->call();
                    }else{
                        $i++;
                    }
                }
                if(count($routesRequestMethod)===$i){
                    new View();
                }
            }catch(\Exception $ex){
                echo $ex->getMessage();
            }
        }        
    }