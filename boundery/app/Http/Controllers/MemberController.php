<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member\Entity\Member;
use App\Member\Action\CreateMember;


class MemberController extends Controller
{

    private $member;
  

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->member  = new Member();
    }


    public function createNewMember(Request $request){
        $this->member = json_decode($request->input('data'));
        try{
            return new CreateMember($this->member)->doCreate();  
        }catch(MemberCreateException $e){
            //log exception
        }
    }

    public function getListMember(){
        try{
            return new GetMember()->doGet();
        }catch(MemberGetException $e){
            //log exception
        }
    }

    public function editMember(Request $request, $id){
       try{
            $this->member = json_decode($request->input('data'));
            return new EditMember($this->member, $id)->doEdit();
        }catch(MemberCreateException $e){
            //log exception
        }
    }
    
}
