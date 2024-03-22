<?php

    namespace App\Controllers;

    use App\View;
    use App\Attributes\Get;

    class SitemapController
    {
        #[Get("/sitemap")]
        public function index(): View
        {
            return View::make("/sitemap", "xml", []);
        }
    }
