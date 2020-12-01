<?php


namespace App\Repositories;


use App\Traits\Opec;

class opecRefineryPetrochemicalRepository
{
    use Opec;
    public $year;

    function __construct()
    {
        $this->year = request()->has('year') ? request()->year : date('Y');
    }


    function processPost()
    {

        switch (request()->type) {
            case 'saveRefineryPetrochemical':
//                return request()->all();
                return $this->saveData('\App\OpecRefineryPetrochemical');
            default:
                return '';

        }


    }


    function processGet($id)
    {

        switch ($id) {
            case 'manageRefineryPetrochemical':

                return $this->manageRefineryPetrochemical();

            default:
                return '';

        }
    }

    private function manageRefineryPetrochemical()
    {
        $year=$this->year;
        $down_petrochemical_plant_projects=\App\down_petrochemical_plant_project::where('start_year',$this->year)
                                                                                ->orwhere('estimated_completion',$this->year)
                                                                                ->get();
        return view('opec.refinery_petrochemical_expansion',compact('year','down_petrochemical_plant_projects'));
    }
}