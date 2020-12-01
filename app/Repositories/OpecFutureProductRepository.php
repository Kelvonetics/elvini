<?php


namespace App\Repositories;


use App\Traits\Opec;

class OpecFutureProductRepository
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
            case 'saveFutureProject':

                return $this->saveFutureProduct();
            default:
                return response()->json(['status'=>'error','message'=>'invalid route'],404);

        }


    }

    function processGet($id)
    {

        switch ($id) {
            case 'manageFutureProduct':

                return $this->manageFutureProduct();

            default:
                return response()->json(['status'=>'error','message'=>'invalid route'],404);

        }
    }

    private function manageFutureProduct()
    {
        $year=$this->year;
        $projects=$this->getProjects();
        return view('opec.future_project',compact('year','projects'));
    }


    private function getProjects(){
        $projects=\App\up_processing_plant_project::select("project","location", "company_id", "terrain_id" , "expected_oil", "expected_gas", "expected_water", "expected_efi",
            "facility_type"
            ,"development_type", "start_date",
            "completion_date",
            "status_id",
            "id",
            "remark","development_type",'quality','end_quarter','capacity_increment','capex_investment')->whereBetween('completion_date',[$this->year,date('Y')])->get();

        return $projects;

    }

    private function saveFutureProduct(){


        $i=0;
        foreach(request()->end_quarter as $value){

            \App\up_processing_plant_project::where('id',request()->id[$i])->update(['quality'=>request()->quality[$i],'end_quarter'=>request()->end_quarter[$i],'capacity_increment'=>request()->capacity_increment[$i],'capex_investment'=>request()->capex_investment[$i]]);
            $i++;

        }
        return response()->json(['status'=>'success','message'=>'Operation Successfull']);
    }
}
