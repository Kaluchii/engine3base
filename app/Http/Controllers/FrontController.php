<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;

        $this->extract->tuneSelection('flat')->sortBy('id','DESC');
        $static = $this->extract->getBlock('static_all_site');
        view()->share('static', $static);
    }


    public function getIndex(){
        $slider = $this->extract->getBlock('head_slider');
        $gallery = $this->extract->getBlock('gallery_block');
        $flats = $this->extract->getBlock('flats_block');
        $interest = $this->extract->getBlock('interest_place');
        $map = $this->extract->getBlock('map_block');
        return view('front.index.index', [
            'slider' => $slider,
            'gallery' => $gallery,
            'flats' => $flats,
            'interest' => $interest,
            'map' => $map,
        ]);
    }
}