<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use DB;
class BiodataController extends Controller
{
    public function biodataIndex(){
      return view('biodataIndex');
    }

    public function biodataCreate(){
      return view('biodataCreate');
    }

    public function searchbio(){
      return redirect()->to('/biodataIndex')->with('message', 'Thank you for searching.');
    }
    
    public function biodatainsert(Request $request){
    
      $data=array();
      $data['biodata_type']=$request->bioType;
      $data['marital_status']=$request->maritalType;
      $data['per_addr_district']=$request->PadrDist;
      $data['per_adr_upazila']=$request->PaddUpoz;
      $data['per_adr_road_home']=$request->Padd;
      $data['pre_adr_district']=$request->PreAddDis;
      $data['pre_adr_upazila']=$request->PreAddUpoz;
      $data['pre_adr_road_home']=$request->PreAdd;
      $data['nationality']=$request->nationality;
      $data['br_date']=$request->bDate;
      $data['body_color']=$request->color;
      $data['height']=$request->height;
      $data['weight']=$request->weight;
      $data['bl_group']=$request->bGroup;
      $data['professoin_type']=$request->profession;
      $data['profession_name']=$request->professDet;

      $data['edu_media']=$request->eduType;
      $data['edu_board']=$request->Eboard;
      $data['ssc_pass']=$request->Spass;
      $data['sss_dept']=$request->Sdep;
      $data['sss_pass_year']=$request->Spassyear;
      $data['hsc_pass']=$request->Hpass;
      $data['hsc_dept']=$request->Hdep;
      $data['hsc_pass_year']=$request->Hpassyear;
      $data['honours']=$request->HDegree;
      $data['honours_inst']=$request->HDegreeInst;
      $data['honours_pass_year']=$request->HDegreePssYear;
      $data['other_edu']=$request->OthersEdu;

      $data['fath_name']=$request->fName;
      $data['moth_name']=$request->mName;
      $data['fath_profe']=$request->fProfession;
      $data['moth_profe']=$request->mProfession;
      $data['broth_num']=$request->brother;
      $data['sist_num']=$request->sister;
      $data['uncle']=$request->uncle;
      $data['family_eco_status']=$request->Estatus;

      $data['beard']=$request->beard;
      $data['pant_over_ankle']=$request->ankleTrouser;
      $data['pray_times']=$request->namaz;
      $data['begin_salah_five']=$request->namazStartTime;
      $data['mahram_nonmahram']=$request->Mahram;
      $data['correct_qur_reci']=$request->correctRecitation;
      $data['madzhab']=$request->madzhab;
      $data['film_serial']=$request->film;
      $data['loving_islami_book']=$request->islamicBook;
      $data['two_followed_scholars']=$request->islamicScholar;
      $data['pir_mazar']=$request->mazar;
      $data['about_yourself']=$request->yourself;

      $data['parents_agreement']=$request->parentsAgree;
      $data['why_marry']=$request->whymarrying;
      $data['wife_curtain']=$request->menCurtain;
      $data['husband_driven_curtain']=$request->femaleCurtain;
      $data['allow_study']=$request->studyAfterMarriage;
      $data['living_location']=$request->afterMarriageStay;
      $data['dowry']=$request->dowry;
      $data['mohrana']=$request->mohrana;

      $data['prof_details']=$request->ownProfessoin;

      $data['highest_age']=$request->hAge;
      $data['body_color_expect']=$request->sColor;
      $data['min_height']=$request->mHeight;
      $data['min_edu']=$request->mEducation;
      $data['district']=$request->districtName;
      $data['part_marital_status']=$request->maritalstatus;
      $data['profe']=$request->demandedProfession;
      $data['eco_status']=$request->economicalStatus;
      $data['family_status']=$request->demandedFamily;
      $data['virtu_in_brief']=$request->demandedvitue;
      $data['created_at']= date("Y-m-d H:i:s", strtotime('now'));
      
      $data=DB::table('biodata')->insert($data);
      if($data){
        // return Redirect::action('BiodataController@biodataIndex');
        // return Redirect::route('biodataIndex');
        // return View::make('index');
        return redirect()->to('/')->with('message', 'Thank you for updating your billing information.');
      }else{
        alert('data not inserted');
      }
    }
}

