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


class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('slider')->sortBy('id','DESC');
        $this->extract->tuneSelection('place')->sortBy('id','DESC');
        $this->extract->tuneSelection('slider_from')->sortBy('id','DESC');
        $this->extract->tuneSelection('marker')->sortBy('id','DESC');
        $this->extract->tuneSelection('area_list')->sortBy('id','DESC');
    }


    public function getIndex(){
        return view('back.layout');
    }

    public function getAll(){
        $static_all_site = $this->extract->getBlock('static_all_site');
        return view('back.blocks.static_all_site',[
           'static_all_site' => $static_all_site
        ]);
    }
    public function getSlider(){
        $slider = $this->extract->getBlock('head_slider');
        return view('back.blocks.head_slider', [
            'head_slider' => $slider
        ]);
    }
    public function getGallery(){
        $gallery = $this->extract->getBlock('gallery_block');
        return view('back.blocks.gallery_block', [
            'gallery_block' => $gallery
        ]);
    }
    public function getFlats(){
        $flats = $this->extract->getBlock('flats_block');
        return view('back.blocks.flats_block', [
            'flats_block' => $flats
        ]);
    }
    public function getInterest(){
        $interest = $this->extract->getBlock('interest_place');
        return view('back.blocks.interest_place', [
            'interest_place' => $interest
        ]);
    }
    public function getMap(){
        $map = $this->extract->getBlock('map_block');
        return view('back.blocks.map_block', [
            'map_block' => $map
        ]);
    }
    public function getFlatPage(){
        $flats = $this->extract->getBlock('flats_page');
        return view('back.blocks.flats_page', [
            'flats_page' => $flats
        ]);
    }
    public function getAdvantages(){
        $advantages = $this->extract->getBlock('advantages');
        return view('back.blocks.advantages', [
            'advantages' => $advantages
        ]);
    }
    public function getMainSeo(){
        $seo = $this->extract->getBlock('head_slider');
        return view('back.blocks.main_seo', [
            'seo' => $seo
        ]);
    }
    public function getCourse(){
        $course = $this->extract->getBlock('prices');
        return view('back.blocks.prices', [
            'course' => $course
        ]);
    }
    public function getFlatsItem( $id ){
        $flat_item = $this->extract->getGroupItem('flat', $id);
        return view('back.groups.flat.flat', [
           'item' => $flat_item
        ]);
    }
    public function getGalleryItem( $id ){
        $gallery_type_item = $this->extract->getGroupItem('gallery_type', $id);
        return view('back.groups.gallery_type.gallery_type', [
           'item' => $gallery_type_item
        ]);
    }
    public function getMarkerCategory( $id ){
        $markerCategory_item = $this->extract->getGroupItem('marker_category', $id);
        return view('back.groups.marker_category.marker_category', [
            'item' => $markerCategory_item
        ]);
    }
    public function getMarkerSubCategory( $rub, $id ){
        $institution_item = $this->extract->getGroupItem('institution', $id);
        return view('back.groups.institution.institution', [
            'item' => $institution_item
        ]);
    }
    public function getFlatItem( $id ){
        $dom_flat_item = $this->extract->getGroupItem('dom_flat', $id);
        return view('back.groups.dom_flat.dom_flat', [
            'item' => $dom_flat_item
        ]);
    }
    public function getAdvantagesItem( $id ){
        $advantage = $this->extract->getGroupItem('advantage', $id);
        return view('back.groups.advantage.advantage', [
            'item' => $advantage
        ]);
    }
    public function getLayoutItem( $rub, $id ){
        $layout_item = $this->extract->getGroupItem('layout', $id);
        return view('back.groups.layout.layout', [
            'item' => $layout_item
        ]);
    }
}