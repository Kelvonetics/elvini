<?php


namespace App\Repositories;


use App\Traits\Opec;

class opecOtherPrimaryRepository
{

    use Opec;
    public  $year;
    function  __construct()
    {
        $this->year=request()->has('year') ? request()->year : date('Y');
    }


    function processPost(){

        switch (request()->type){
            case 'saveOtherPrimaries':
//                return request()->all();
                return  $this->saveData('\App\OtherPrimaries');
            default:
//                return $this->getCondensate();

        }


    }


    function processGet($id){

        switch ($id){
            case 'manageOtherPrimaries':

                return $this->manageOtherPrimaries();

            default:
//                return $this->getCondensate();

        }
    }

    private function manageOtherPrimaries()
    {
        $year=$this->year;
        $Q_Day=$this->getQdays();
        $OpecCrudes=$this->fixNullArray(\App\OtherPrimaries::where('year',$year)->first());
        return view('opec.other_primaries',compact('year','Q_Day','OpecCrudes'));
    }
}