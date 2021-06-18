<?php

echo '<p>Tu es bien dans routes.php ligne 3</p>';

use App\Controller\HomeController;
use Core\Router;
use Pecee\SimpleRouter\SimpleRouter;

Router::get('/', HomeController@home)->name('home');


// SimpleRouter::get('/', function() {
//     return 'Hello world';
// });

// SimpleRouter::get('/', 'HomeController@home')->setName('home');



// SimpleRouter::controller('/', HomeController::class);


// SimpleRouter::controller('/admin', AdminController::class, ['as' => 'picture']);

// # output: /images/view/?category=shows
// url('picture@getView', null, ['category' => 'shoes']);

// # output: /images/view/?category=shows
// url('picture', 'getView', ['category' => 'shoes']);

// # output: /images/view/
// url('picture', 'view');

// SimpleRouter::get('/error', 'PageController@notFound');

// SimpleRouter::error(function(Request $request, \Exception $exception) {

//     if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
//         response()->redirect('/error');
//     }
    
// });

// [{
//     "path" : "/",
//     "controller" : "Home",
//     "action" : "Home",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/register",
//     "controller" : "User",
//     "action" : "Register",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/password",
//     "controller" : "User",
//     "action" : "Password",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/login",
//     "controller" : "User",
//     "action" : "Login",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/login",
//     "controller" : "User",
//     "action" : "Authenticate",
//     "method" : "POST",
//     "param" : [
//         "login",
//         "password"
//     ],
//     "manager" : [
//         "User"
//     ]
// },
// {
//     "path" : "/admin",
//     "controller" : "Admin",
//     "action" : "admin",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/creer-un-article",
//     "controller" : "Admin",
//     "action" : "createPost",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/liste-articles",
//     "controller" : "Admin",
//     "action" : "listPosts",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/editer-un-article",
//     "controller" : "Admin",
//     "action" : "editPost",
//     "method" : "GET",
//     "param" : [
//         "idPost"
//     ],
//     "manager" : []
// },
// {
//     "path" : "/gerer-commentaires",
//     "controller" : "Admin",
//     "action" : "manageComments",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/profil",
//     "controller" : "Admin",
//     "action" : "profile",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/contact",
//     "controller" : "Contact",
//     "action" : "Contact",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/blog",
//     "controller" : "Blog",
//     "action" : "Blog",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/services",
//     "controller" : "Services",
//     "action" : "Services",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/projets",
//     "controller" : "Projects",
//     "action" : "Projects",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/politique-de-confidentialite",
//     "controller" : "Privacy",
//     "action" : "Privacy",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// },
// {
//     "path" : "/error",
//     "controller" : "Error", 
//     "action" : "error",
//     "method" : "GET",
//     "param" : [],
//     "manager" : []
// }]