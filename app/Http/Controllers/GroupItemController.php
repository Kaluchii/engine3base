<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\CommandAgent\DestructAgent;
use Interpro\Entrance\Contracts\CommandAgent\InitAgent;

class GroupItemController extends Controller
{
    private $init;
    private $del;
    public function __construct(InitAgent $int, DestructAgent $del){
        $this->init    = $int;
        $this->del     = $del;
    }

    public function delete(){}

    public function newRow(Request $request){
        $data = $request->all();
        try{
            $new_item = $this->init->init($data['blockname'], [$data['fieldname'] => $data['value'], 'superior' => $data['superior']]);


            $view = view('back.groups.'.$data['blockname'].'.'.$data['blockname'].'_row' , [
                'item' => $new_item
            ])->render();

            return ['error' => false, 'message' => '', 'view' => $view];

        }catch(\Exception $error){
            return ['error' => true, 'message' => $error->getMessage()];
        }
    }

    public function newBox(Request $request){
        $data = $request->all();
        try{
            $new_item = $this->init->init($data['blockname'], [ 'superior' => $data['superior'] ] );


            $view = view('back.groups.'.$data['blockname'].'.'.$data['blockname'].'_box' , [
                'item' => $new_item
            ])->render();

            return ['error' => false, 'message' => '', 'view' => $view];

        }catch(\Exception $error){
            return ['error' => true, 'message' => $error->getMessage()];
        }
    }

    public function removeItem(Request $request){
        $data = $request->all();
        try{
            Log::info($data);
            $this->del->delete($data['block'], (int)$data['id']);


            return ['error' => false, 'message' => 'Элемент успешно удален'];

        }catch(\Exception $error){
            return ['error' => true, 'message' => $error->getMessage()];
        }

    }

}
