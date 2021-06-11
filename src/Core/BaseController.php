<?php

namespace Core;

use Core\Response\Response;
use ViewNotFoundException;

require CORE_DIR . '/vendor/autoload.php';

class BaseController
{

    private $httpRequest;
    private $param;
    private $config;
    protected $twig;

    public function __construct($httpRequest, $config)
    {
        $this->httpRequest = $httpRequest;
        $this->config = $config;
        $this->param = array();
        $this->addParam("httprequest", $this->httpRequest);
        $this->addParam("config", $this->config);
        $this->bindManager();

        $loader = new \Twig\Loader\FilesystemLoader(VIEW_DIR . '//');
        $this->twig = new \Twig\Environment($loader, ['debug' => true]);
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

    protected function render($filename, $array = [])
	{
        
		if (file_exists(VIEW_DIR . '//' . $filename))
		{
			extract($this->param);

            $view = $this->twig->load($filename);
            $content = $view->render($array);
            $response = new Response($content);
            
            return $response->send();
            
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

    public function isSubmitted($submit)
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

    public function hydrate($object, $values = null)
    {
        if ($values != null)
        {
            foreach ($values as $key => $value)
            {
                $elements = explode('_', $key);
                $newKey = '';

                foreach ($elements as $element)
                {
                    $newKey .= ucfirst($element);
                }
                $method = 'set' . ucfirst($newKey);

                if (method_exists($object, $method))
                {
                    $object->$method($value);
                }
            }
            return $this;
        }
        return false;
    }
}