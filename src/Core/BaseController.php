<?php

namespace Core;

use FileManager;
use ViewNotFoundException;

require CORE_DIR . '/vendor/autoload.php';

class BaseController
{

    private $httpRequest;
    private $param;
    private $config;
    private $FileManager;

    public function __construct($httpRequest, $config)
    {
        $this->httpRequest = $httpRequest;
        $this->config = $config;
        $this->param = array();
        $this->addParam("httprequest", $this->httpRequest);
        $this->addParam("config", $this->config);
        $this->bindManager();
        $this->FileManager = new FileManager();
    }

    public function bindManager()
    {
        foreach($this->httpRequest->getRoute()->getManager() as $manager)
        {
            $this->$manager = new $manager($this->config->database);
        }
    }

    public function addParam($name, $value)
    {
        $this->param[$name] = $value;
    }

    public function addCss($file)
    {
        $this->FileManager->addCss($file);
    }

    public function addJs($file)
    {
        $this->FileManager->addJs($file);
    }

    protected function render($dirname, $filename, $array)
	{
        
		if (file_exists(VIEW_DIR . '/' . $dirname . '/' . $filename))
		{

			extract($this->param);

			$loader = new \Twig\Loader\FilesystemLoader(VIEW_DIR . '//' . $dirname);
			$twig = new \Twig\Environment($loader, ['debug' => true]);
            
			echo $twig->render($filename, $array);

		} else
		{
			throw new ViewNotFoundException();	
		}
	}

    public function redirect(string $path)
    {

        header("Location: /PHP/Blog-PHP/" . $path);
        exit();

    }

    public function isSubmit($submit)
    {
        
        if (isset($_POST[$submit]))
        {
            return true;
        }
        return false;

    }

    public function isValid(array $data)
    {

        $isValid = true;

        foreach ($data as $value)
        {
            if ($value == NULL || !isset($value) || empty($value))
            {
                $isValid = false;
            }
        }
        return $isValid;

    }

}