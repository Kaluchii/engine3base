<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Interpro\Core\Contracts\Taxonomy\Taxonomy;

class TaxanomyController extends Controller
{
    private $tax;
    public function __construct(Taxonomy $taxonomy){
        $this->tax = $taxonomy;
    }

    public function getStruct(){
        $blocks = $this->tax->getBlock('new_block');
        dd($blocks);
    }
}
