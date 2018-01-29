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
        return new CreateMember($this->member)->doCreate();  
    }

    public function getListMember(){
        return new GetMember()->doGet();
    }

    public function editMember(Request $request, $id){
        $this->member = json_decode($request->input('data'));
        return new EditMember($this->member, $id)->doEdit();
    }
    
}
