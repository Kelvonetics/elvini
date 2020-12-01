<?php

 	$yrs = date('Y'); 
 	function rev_legend() 
 	{  
 		$rev_year = \App\eco_revenue_actual::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
			$no_yr = $rev_year->year - 4;	$rev_legend[] = $no_yr;
	 		for($i = 1; $i <= 4; $i++){ 	$rev_legend[$i] = $no_yr + $i; 	}
 		}else{ $rev_legend[0] = 0; } 		
 		return $rev_legend;
 	}
 	function revenue_oil() 
 	{  
 		$rev_year = \App\eco_revenue_actual::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	            $r_oil = \App\eco_revenue_actual::where('year', $no_yr + $i)->sum('oil_actual');
	            $revenue_oil[$i] = ($r_oil / 100000000);
	        }	
 		}else{ $revenue_oil[0] = 0; }	
 		 		
 		return $revenue_oil;
 	} 

 	function revenue_gas() 
 	{  
 		$rev_year = \App\eco_revenue_actual::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$r_gas = \App\eco_revenue_actual::where('year', $no_yr + $i)->sum('gas_actual');
	 			$revenue_gas[$i] = ($r_gas / 100000000);
	        }
 		}else{ $revenue_gas[0] = 0; }	
 		
 		return $revenue_gas;
 	}

 

 	function crude_legend() 
 	{  
 		$rev_year = \App\down_terminal_stream_prod::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
			$no_yr = $rev_year->year - 4;	$crude_legend[] = $no_yr;
	 		for($i = 1; $i <= 4; $i++){ 	$crude_legend[$i] = $no_yr + $i; 	}
 		}else{ $crude_legend[0] = 0; }  		
 		return $crude_legend;
 	}

 	function crude_oil_prod() 
 	{ 
 		$rev_year = \App\down_terminal_stream_prod::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr;  
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$crude_oil_prod[$i] = \App\down_terminal_stream_prod::where('year', $no_yr + $i)->sum('stream_total');
	        }
 		}else{ $crude_oil_prod[0] = 0; }	
 		
 		return $crude_oil_prod;	
 	}

 	function crude_oil_export() 
 	{ 
 		$rev_year = \App\down_monthly_summary_crude_export::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr;
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$crude_oil_export[$i] = \App\down_monthly_summary_crude_export::where('year', $no_yr + $i)->sum('stream_total');
	        }
 		}else{ $crude_oil_export[0] = 0; }	
 		
 		return $crude_oil_export;	
 	}



 	function gas_legend() 
 	{  
 		$rev_year = \App\gas_summary_of_gas_utilization::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
			$no_yr = $rev_year->year - 4;	$gas_legend[] = $no_yr;
	 		for($i = 1; $i <= 4; $i++){ 	$gas_legend[$i] = $no_yr + $i; 	}
 		}else{ $gas_legend[0] = 0; }  		
 		return $gas_legend;
 	}

 	function gas_production() 
 	{ 
 		$rev_year = \App\gas_summary_of_gas_utilization::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$gas_production[$i] = \App\gas_summary_of_gas_utilization::where('year', $no_yr + $i)->sum('total_ag_nag');
	        }
 		}else{ $gas_production[0] = 0; }	
 		
 		return $gas_production;	
 	}

 	function gas_utilized() 
 	{ 
 		$rev_year = \App\gas_summary_of_gas_utilization::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$gas_utilized[$i] = \App\gas_summary_of_gas_utilization::where('year', $no_yr + $i)->sum('total_gas_utilized');
	        }
 		}else{ $gas_utilized[0] = 0; }	
 		
 		return $gas_utilized;	
 	}



 	function hse_legend() 
 	{  
 		$rev_year = \App\she_accident_report_upstream::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
			$no_yr = $rev_year->year - 4;	$hse_legend[] = $no_yr;
	 		for($i = 1; $i <= 4; $i++){ 	$hse_legend[$i] = $no_yr + $i; 	}
 		}else{ $hse_legend[0] = 0; }  		
 		return $hse_legend;
 	}

 	function up_incidences() 
 	{ 
 		$rev_year = \App\she_accident_report_upstream::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr;
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$up_incidences[$i] = \App\she_accident_report_upstream::where('year', $no_yr + $i)->sum('incidents');
	        }
 		}else{ $up_incidences[0] = 0; }		
 		
 		return $up_incidences;	
 	}

 	function down_incidences() 
 	{ 
 		$rev_year = \App\she_accident_report_downstream::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$down_incidences[$i] = \App\she_accident_report_downstream::where('year', $no_yr + $i)->sum('incidents');
	        }
 		}else{ $down_incidences[0] = 0; }		
 		
 		return $down_incidences;	
 	}

 	function up_fatality() 
 	{ 
 		$rev_year = \App\she_accident_report_upstream::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$up_fatality[$i] = \App\she_accident_report_upstream::where('year', $no_yr + $i)->sum('fatality');
	        }
 		}else{ $up_fatality[0] = 0; }		
 		
 		return $up_fatality;	
 	}

 	function down_fatality() 
 	{ 
 		$rev_year = \App\she_accident_report_downstream::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr;  
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$down_fatality[$i] = \App\she_accident_report_downstream::where('year', $no_yr + $i)->sum('fatality');
	        }
 		}else{ $down_fatality[0] = 0; }		
 		
 		return $down_fatality;	
 	}



 	function reserve_legend() 
 	{  
 		$rev_year = \App\up_reserves_oil::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
			$no_yr = $rev_year->year - 4;	$reserve_legend[] = $no_yr;
	 		for($i = 1; $i <= 4; $i++){ 	$reserve_legend[$i] = $no_yr + $i; 	}
 		}else{ $reserve_legend[0] = 0; } 		
 		return $reserve_legend;
 	}


 	function reserve_oil() 
 	{ 
 		$rev_year = \App\up_reserves_oil::orderBy('year', 'desc')->first();	
 		if($rev_year)
 		{ 			
	 		$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$reserve_oil[$i] = \App\up_reserves_oil::where('year', $no_yr + $i)->sum('oil_reserves');
	        }
 		}else{ $reserve_oil[0] = 0; }

 		return $reserve_oil;	
 	}

 	function reserve_cond() 
 	{ 
 		$rev_year = \App\up_reserves_report::orderBy('year', 'desc')->first();	
 		if($rev_year)
 		{ 			
	 		$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr; 
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$reserve_cond[$i] = \App\up_reserves_report::where('year', $no_yr + $i)->sum('condensate_reserves');
	        }
 		}else{ $reserve_cond[0] = 0; }	

 		return $reserve_cond;	
 	}

 	function reserve_gas() 
 	{ 
 		$rev_year = \App\up_reserves_gas::orderBy('year', 'desc')->first();
 		if($rev_year)
 		{
 			$no_yr = $rev_year->year - 5;	$rev_legend[] = $no_yr;  
	 		for($i = 1; $i <= 5; $i++) 
	        {
	            $rev_legend[$i] = $no_yr + $i; 
	 			$reserve_gas[$i] = \App\up_reserves_gas::where('year', $no_yr + $i)->sum('total_gas');
	        }
 		}else{ $reserve_gas[0] = 0; }	
 		
 		return $reserve_gas;	
 	}

 	function crude_year() {  return $crude_year = \App\down_monthly_summary_crude_export::orderBy('year', 'desc')->first();	}
 	function recon_crude() { $years = \App\down_monthly_summary_crude_export::orderBy('year', 'desc')->first();
 	if($years)
 	{
 		return $recon_crude = \App\down_terminal_stream_prod::where('year', $years->year)->sum('stream_total');
 	}   
 		}
 	function crude_export() { $years = \App\down_monthly_summary_crude_export::orderBy('year', 'desc')->first();
 	if($years)
 	{
 		return $crude_export = \App\down_monthly_summary_crude_export::where('year', $years->year)->sum('stream_total');	}
 	}   	
 	function crude_import() { $years = \App\down_monthly_summary_crude_export::orderBy('year', 'desc')->first();
 	if($years)
 	{
 		return $crude_import = \App\down_product_vol_import_permit::where('year', $years->year)->sum('total');	}
 	} 
 	

 	function ag_nag() { return $ag_nag = \App\up_reserves_gas::orderByDesc('year')->limit(1)->first();	}
 	function gas_oil() { return $gas_oil = \App\up_reserves_oil::orderByDesc('year')->limit(1)->first();	}
 	function gas_condensate() { return $gas_condensate = \App\up_reserves_report::orderByDesc('year')->limit(1)->first();	}


 	function ref_year() { return $ref_year = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first(); }
 	function tot_dom_prod() { $years = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first();
 	if($years)
 	{
 		return $tot_dom_prod = \App\down_refinery_production_volumes::where('year', $years->year)->sum('total'); }
 	}
 	
 	function wrpc() { $years = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first(); 
 	if($years)
 	{
 		return $wrpc = \App\down_refinery_production_volumes::where('year', $years->year)->where('refinery_id', '1')->sum('total');}
 	}
 	
 	function krpc() { $years = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first(); 
 	if($years)
 	{
 		return $krpc = \App\down_refinery_production_volumes::where('year', $years->year)->where('refinery_id', '2')->sum('total');}
 	}
 	
 	function phrc() { $years = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first();  
 	if($years)
 	{
 		return $phrc = \App\down_refinery_production_volumes::where('year', $years->year)->where('refinery_id', '3')->orwhere('refinery_id', '5')->sum('total');}
 	}
 	
 	function ndpr() { $years = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first(); 
 	if($years)
 	{
 		return $ndpr = \App\down_refinery_production_volumes::where('year', $years->year)->where('refinery_id', '4')->sum('total');}
 	}
 	


 	function imp_year() { $imp_year = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first(); }
 	function dom_prod() { $years = \App\down_refinery_production_volumes::orderBy('year', 'desc')->first();
 	if($years)
 	{
 		return $dom_prod = \App\down_refinery_production_volumes::where('year', $years->year)->sum('total'); }
 	}
 	
 	function imp_permit() { $years = \App\down_product_vol_import_permit::orderBy('year', 'desc')->first(); 
 	if($years)
 	{
 		return $imp_permit = \App\down_product_vol_import_permit::where('year', $years->year)->sum('total_litres'); }
 	}
 	
 	function act_import() { $years = \App\down_refinary_production::orderBy('year', 'desc')->first(); 
 	if($years)
 	{
 		return $act_import = \App\down_refinary_production::where('year', $years->year)->sum('total_litres'); }
 	}





 	//AUDIT 	
 	function all_login() {	 return $all_login = \App\user_login_history::whereMonth('created_at', '12')->count();	}




	$yrs = date('Y');  $year = $yrs - 1;

 	function OPL_total() {	   return $OPL_total = \App\Bala_opl::count();	}
 	function OML_total() {	   return $OML_total = \App\Bala_oml::count();	}
 	function MARG_total() {	   return $MARG_total = \App\Bala_block::count();	}
 	function Unlisted_total() {	   return $Unlisted_total = \App\concession_unlisted_open::count();	}


 	function ref_high_cap() {	   return $ref_high_cap = \App\down_refinery_performance::orderBy('design_capacity', 'desc')->first();	}
 	function plant_high_cap() {	   return $plant_high_cap = \App\down_petrochemical_plant::orderBy('plant_capacity', 'desc')->first();	}

 	
 	function high_gas_obli() {	   return $high_gas_obli = \App\gas_domestic_gas_obligation::orderBy('performance_obligation', 'desc')->first();	}
 	function gas_year() {	return $years = \App\gas_summary_of_gas_production::orderBy('year', 'desc')->first();  }
 	function gas_prods() {	 $years = \App\gas_summary_of_gas_production::orderBy('year', 'desc')->first();  
 	return $gas_prods = \App\gas_summary_of_gas_production::where('year', $years->year)->sum('total');	}
 	function gas_utils() {	  $years = \App\gas_summary_of_gas_production::orderBy('year', 'desc')->first();   
 	return $gas_utils = \App\gas_summary_of_gas_utilization::where('year', $years->year)->sum('total_gas_utilized');	}
 	function gas_flared() {	$years = \App\gas_summary_of_gas_production::orderBy('year', 'desc')->first();
 	return $gas_flared = \App\gas_summary_of_gas_utilization::where('year', $years->year)->sum('percent_flared');	}


 	function hse_year() {	return $years = \App\she_spill_incidence_report::orderBy('year', 'desc')->first();  }
 	function spill() {  $years = \App\she_spill_incidence_report::orderBy('year', 'desc')->first();
 	return $spill = \App\she_spill_incidence_report::where('year', $years->year)->sum('volume_spilled');	}
 	function incident() {  $years = \App\she_spill_incidence_report::orderBy('year', 'desc')->first();
 	return $incident = \App\she_accident_report_upstream::where('year', $years->year)->sum('incidents');	}
 	function fatality() {  $years = \App\she_accident_report_upstream::orderBy('year', 'desc')->first();
 	return $fatality = \App\she_accident_report_upstream::where('year', $years->year)->sum('fatality');	}
 	// function down_inci() {  $years = \App\she_accident_report_upstream::orderBy('year', 'desc')->first();
 	// return $down_inci = \App\she_accident_report_downstream::orderByDesc('year')->limit(12)->sum('incidents');	}
 	// function down_fata_last_yr() {  return $down_fata_last_yr = \App\she_accident_report_downstream::orderByDesc('year')->limit(12)->sum('fatality');	}


 	//CHARTS
 	function oil_condensate() {	$yr = date('Y'); $yrs = $yr - '10'; return $oil_condensate = \App\up_reserves_report::where('year', '>=', $yrs)->where('month', 'december')->take(5)->get();	}




	function year_array() { return $year_array = ['legends' => 'Total Wells in years']; }

    function array_year() { $yrs = date('Y'); return $array_year = ['5' => $yrs - 5, '4' => $yrs - 4, '3' => $yrs - 3, '2' => $yrs - 2, '1' => $yrs - 1, '0' => $yrs - 0, ]; }
    function years() { $yrs = date('Y'); return $years = ['0' => $yrs - 0, '1' => $yrs - 1, '2' => $yrs - 2, '3' => $yrs - 3, '4' => $yrs - 4]; }


 	function contracts() {  return $contracts = $contract_legend = \App\contract::all(); 	}





        