<?php

namespace Core;

use Entity\User;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Exceptions\TwigException;
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

    // protected function view($filename)
    // {
    //     if (file_exists(PUBLIC_DIR . '/' . "/css" . $filename . ".css"))
    //     {
    //         $this->addCss(PUBLIC_DIR . '/' . "/css" . $filename . ".css");
    //     }

    //     if (file_exists(PUBLIC_DIR . '/' . "/js" . $filename . ".js"))
    //     {
    //         $this->addCss(PUBLIC_DIR . '/' . "/js" . $filename . ".js");
    //     }

    //     if (file_exists(VIEW_DIR . '/frontend/' . $filename . '.html.twig')) 
    //     {
            
    //         ob_start();
    //         extract($this->param);
    //         $content = ob_get_clean();

    //         $loader = new \Twig\Loader\FilesystemLoader(VIEW_DIR);
    //         $twig = new \Twig\Environment($loader);

    //         echo $twig->render("template.html.twig", ['title' => 'Blog de Marc Lassort']);

    //         echo $twig->render('/frontend/' . $filename . '.html.twig', ['title' => 'Blog de Marc Lassort']);
        
    //     }
    //     else 
    //     {
    //         throw new ViewNotFoundException();
    //     }
    // }
}