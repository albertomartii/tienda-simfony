<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;          //  <-- Esta línea es necesaria para que sepa que el : Response que usamos después, es una clase de Symfony, y no del archivo
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'index')]    ///Esta línea indica que cuando se pida '/' en este caso, se mostrará 'index'
    public function index(): Response
    {
        $products = [];
        return $this->render('page/index.html.twig', [
            'products' => $products
        ]);
    }

    //Intento de ruta para el about -- Porque lanza un error de que no existe esa ruta en _navigation.html.twig
    #[Route('/about', name: 'about')]   ///Esta línea indica que cuando se pida '/about' en este caso, se mostrará 'about', así con las demás
    public function about(): Response
    {
        return $this->render('page/about.html.twig', []);
    }

    //Lo mismo que en la ruta de about, pero para service, y las demás rutas que aparecen en _navigation.html.twig
    #[Route('/service', name: 'service')]
    public function service(): Response
    {
        return $this->render('page/service.html.twig', []);
    }

    //Lo mismo para Product
    #[Route('/product', name: 'product')]
    public function product(): Response
    {
        return $this->render('page/product.html.twig', []);
    }

    //Lo mismo con Price
    #[Route('/price', name: 'price')]
    public function price(): Response
    {
        return $this->render('price/product.html.twig', []);
    }

    //Lo mismo con Price
    #[Route('/team', name: 'team')]
    public function team(): Response
    {
        return $this->render('team/product.html.twig', []);
    }
    
    //Lo mismo con testimonial
    #[Route('/testimonial', name: 'testimonial')]
    public function testimonial(): Response
    {
        return $this->render('testimonial/product.html.twig', []);
    }

    //Lo mismo con blog
    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('blog/product.html.twig', []);
    }

    //Lo mismo con detail
    #[Route('/detail', name: 'detail')]
    public function detail(): Response
    {
        return $this->render('detail/product.html.twig', []);
    }

    //Lo mismo con contact
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact/product.html.twig', []);
    }
}
