<?php

namespace GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('name', TextType::class, [
                'label' => 'Name',
                'required' => true,
            ])
            ->add('send', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-info'
                ],
                'label' => 'Start',
            ])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $session = $this->get('session');
            $session->clear();
            $session->set('name', $data['name']);
            $session->set('health', 100);
            $session->set('strength', 20);
            return $this->redirectToRoute('worldmap');
        }
        $dir    = 'json';
        $files = scandir($dir);
        $files = array_splice($files, 2);
        return $this->render('@Game/default/index.html.twig', [
            "form" => $form->createView(),
            'files' => $files
        ]);
    }


    /**
     * @Route("/createnewplayer")
     */
    public function createnewplayer(Request $request){
        //clearall
        $session = $this->get('session');
        $session->set('name', $request->request->get('name'));
        return new JsonResponse($session->get('name'));
    }

    /**
     * @Route("/worldmap", name="worldmap")
     */
    public function worldmapAction()
    {
        $session = $this->get('session');

        $paramsBag = [];
        $movies = $session->get('moviemons');
        if ($movies && $movies != 'null') {
            $paramsBag['movies'] = $movies;
        }else{
            $num = -1;
            $arr = [];
            $movies = json_decode(file_get_contents("http://www.omdbapi.com/?apikey=e4d83dd9&s=boss"),true);
            while (1){
                foreach($movies["Search"] as $movie){
                    if (preg_match('~^http~',$movie["Poster"])){
                        $movie['max_attack'] = rand(10,55);
                        $movie['alive'] = 1;
                        if ($num == 12)
                            ++$num;
                        $movie['num'] = ++$num;
                        $arr[] = $movie;
                    }
                    if (count($arr) == 24)
                        break;
                }
                if (count($arr) == 24)
                    break;
            }
            $session->set('moviemons',$arr);
            $paramsBag['movies'] = $session->get('moviemons');
        }
        if (!($session->get('name')))
        {
                  return $this->redirectToRoute('index');
        }
        return $this->render('@Game/default/worldmap.html.twig', $paramsBag);
    }


    /**
     * @Route("/fillfield", name="fill")
     */
    public function fillFieldAction(){

        $arr = [];
        $movies = json_decode(file_get_contents("http://www.omdbapi.com/?apikey=e4d83dd9&s=boss"),true);
        while (1){
            foreach($movies["Search"] as $movie){
                if (preg_match('~^http~',$movie["Poster"])){
                    $movie['max_attack'] = rand(15,65);
                    $movie['alive'] = 1;
                    $arr[] = $movie;
                }
                if (count($arr) == 24)
                    break;
            }
            if (count($arr) == 24)
                break;
        }

        return new JsonResponse([$arr]);
    }

    /**
     * @Route ("/fightarea", name="fightarea")
     */
    public function fightareaAction(Request $request){
        $session = $this->get('session');

        $movies = $session->get('moviemons');

        if ($movies[$request->get('position')]['alive'] == 0) {
            return $this->redirectToRoute('worldmap');
        }
        $paramsBag = [];
        $paramsBag['movies'] = $movies;
        $paramsBag['position'] = $request->get('position');
        if (!($session->get('name')))
        {
            return $this->redirectToRoute('index');
        }
        return $this->render('@Game/default/fightarea.html.twig',$paramsBag);
    }

    /**
     *@Route ("/savemovimonssession", name="savemovimons")
     */
    public function savemovimons(Request $request){
        $session = $this->get('session');

        $movies = $request->get('moviemons_post');
        $session->set('moviemons', json_encode($movies));
        return new JsonResponse(['success' => true]);
    }

    /**
     * @Route("/savebutton", name="save")
     */
    public function saveAction(){

        echo "save\n";

        $session = $this->get('session');
        echo $session->get('name') . '.json';
        file_put_contents('json/'.$session->get('name') . '.json', json_encode($session->all()));
        return $this->redirectToRoute('index');
    }

    /**
     * @Route("/loadbutton", name="load")
     */
    public function loadAction(Request $request)
    {
        $filename = $request->get('filename');
        $session = $this->get('session');
        $session->clear();
        $file = json_decode(file_get_contents('json/' . $filename),true);
        foreach ($file as $key => $value) {
            $session->set($key, $value);
        }
        return new JsonResponse(['success' => true]);
    }

    /**
     * @Route("/clearses", name="clear")
     */
    public function clearAction(){
        $session = $this->get('session');
        $session->clear();
        return new JsonResponse(['success' => true]);
    }


    /**
     * @Route ("/inactive",name="inactive")
     */
    public function inactiveenemyAction(Request $request){
        $session = $this->get('session');
        $arr = $session->get('moviemons');
        $position = $request->get('position');
        $arr[$position]['alive'] = 0;
        $strength = $session->get('strength');
        $strength = $strength + 3;
        $session->set('strength', $strength);
        $session->set('moviemons', $arr);
        return new JsonResponse(['success' => true]);
    }

    

}
//http://www.omdbapi.com/?apikey=e4d83dd9