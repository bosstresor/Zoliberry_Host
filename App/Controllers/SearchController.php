<?php

    namespace App\Controllers;

    use App\Attributes\Get;
    use App\View;

    class SearchController
    {

        #[Get("/SearchNotFound")]
        public function index(): View{
            return View::make("/Templates/SearchNotFound", "php", []);
        }
    }