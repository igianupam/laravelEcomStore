<?php

namespace App\Http\Controllers;

use App\Repositories\BannerRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(BannerRepository $bannerRepository){
        $banners = $bannerRepository->get();
        return view('frontend.home', compact('banners'));
    }
}
