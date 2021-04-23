<?php

namespace Core;

use Entity\User;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Exceptions\TwigException;
use FileManager;
use ViewNotFoundException;

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

    protected function view($filename)
    {
        if (file_exists(VIEW_DIR . '/' . "/css" . $filename . ".css"))
        {
            $this->addCss(VIEW_DIR . '/' . "/css" . $filename . ".css");
        }

        if (file_exists(VIEW_DIR . '/' . "/js" . $filename . ".js"))
        {
            $this->addCss(VIEW_DIR . '/' . "/js" . $filename . ".js");
        }

        if (file_exists(VIEW_DIR . '/' . $filename . '.php')) 
        {
            ob_start();
            extract($this->param);
            include(VIEW_DIR . '/' . $filename . '.php');
            $content = ob_get_clean();
            include(VIEW_DIR . '/frontend/template.html.twig');
        }
        else 
        {
            throw new ViewNotFoundException();
        }
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

    protected function render($filename, $array)
	{
		if(file_exists(VIEW_DIR . '//' . $filename))
		{
			extract($this->param);


			$loader = new \Twig\Loader\FilesystemLoader(VIEW_DIR . '//');
			$twig = new \Twig\Environment($loader, ['debug' => true]);
			echo $twig->render($filename, $array);

		} else
		{
			throw new ViewNotFoundException();	
		}
	}
}