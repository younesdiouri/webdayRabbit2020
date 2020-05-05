<?php
namespace App\Controller;

use App\Message\CreateUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", defaults={"_format"="html"}, methods="GET", name="index")
     */
    public function index(MessageBusInterface $bus)
    {
        // registering a new user...
        $bus->dispatch(new CreateUser('Some User has been created - User information : UserId, Username, Locale, CreatedAt etc. '));

        return new Response(
            '<html><body>Next step : Sms Validation => . . . . . .</body></html>'
        );
    }
}
