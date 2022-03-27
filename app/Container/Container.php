<?php 
namespace App\Container;
class Container {
    protected $bindings =[];
    
    /**
     * 
     * @param 1:$key :String 
     * @param 2: $value: string 
     * @return : null 
     */
    public function bind($key, $value){
        $this->bindings[$key] =$value;
    }

    /**
     * 
     * @param 1:$key :String 
     * @param 2: $value: string 
     * @return : null 
     */
    public function resolve($key){
        if(isset($this->bindings[$key])){
            return call_user_func($this->bindings[$key]) ;
        }
        return null;
       
    }

    
}

