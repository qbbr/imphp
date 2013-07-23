<?php

namespace DemoBundle\Controller;

use Framework\Controller;
use Framework\Response;
use Framework\JsonResponse;
use DemoBundle\Model\Demo;

class DemoController extends Controller
{
    public function indexAction()
    {
        return new Response('index.html.php');
    }

    public function helloAction($name, $surname = '')
    {
        //$model = new Demo();
        //$number =  $model->getIncrementNumber(3); // return 4
        return new Response('hello.html.php', [
            'name' => $name,
            'surname' => $surname
        ]);
    }

    public function testJsonAction($id)
    {
        return new JsonResponse('test.json.php', [
            'id' => $id
        ]);
    }
}
