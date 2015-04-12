<?php
/**
 * Created by PhpStorm.
 * User: edge
 * Date: 2015/04/12
 * Time: 12:03
 */
class ClassLoader
{
    protected $dirs;

    public function register()
    {
        spl_autoload_register(array($this, 'loadclass'));
    }

    public function registerDir($dir)
    {
        $this->dirs[] = $dir;
    }

    public function loadclass($class)
    {
        foreach ($this->dirs as $dir) {
           $file = $dir . '/'  . $class . '.php';
            if (is_readable($file)){
                require $file;

                return;
            }
        }
    }
}