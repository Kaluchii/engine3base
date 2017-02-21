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

        $this->extract->tuneSelection('flat')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('gallery_type')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('marker_category')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('advantage')->sortBy('sorter','ASC');
        $static = $this->extract->getBlock('static_all_site');
        view()->share('static', $static);
    }


    public function getIndex(){
        $slider = $this->extract->getBlock('head_slider');
        $gallery = $this->extract->getBlock('gallery_block');
        $flats = $this->extract->getBlock('flats_block');
        $interest = $this->extract->getBlock('interest_place');
        $map = $this->extract->getBlock('map_block');
        $course = $this->extract->getBlock('prices');
        return view('front.index.index', [
            'slider' => $slider,
            'gallery' => $gallery,
            'flats' => $flats,
            'interest' => $interest,
            'map' => $map,
            'course' => $course,
        ]);
    }

    public function getLayout( $flat_slug = null, $layout_slug = null ){
        try {
            if (!is_null($layout_slug)) {
                $result = $this->extract->getBySlug('layout', $layout_slug);
            } elseif (!is_null($flat_slug)) {
                $flat = $this->extract->getBySlug('dom_flat', $flat_slug);
                if ($flat->layout_group->count() > 0) {
                    $result = $flat->layout_group->first();
                } else {
                    abort(404);
                }
            } else {
                $flats = $this->extract->getBlock('flats_page');
                if ($flats->dom_flat_group->count() > 0) {
                    $flat = $flats->dom_flat_group->first();
                    if ($flat->layout_group->count() > 0) {
                        $result = $flat->layout_group->first();
                    } else {
                        abort(404);
                    }
                } else {
                    abort(404);
                }
            }
        }
        catch (Exception $e) {
            abort(404);
        }
        $course = $this->extract->getBlock('prices');
        return view('front.flats.flat', [
            'layout' => $result,
            'course' => $course
        ]);
    }

    public function getAdvantages(){
        $advantages = $this->extract->getBlock('advantages');
        return view('front.advantages.advantages', [
            'advantages' => $advantages
        ]);
    }
}