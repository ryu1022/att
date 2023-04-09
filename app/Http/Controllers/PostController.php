<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
        {
            return view('posts/index');
        }
      
    public function create()
        {
            return view('posts/create');
        } 
    
    public function participation(Group $group)
        {
            return view('posts/participation')->with(['groups' => $group->get()]);;
        } 

    public function store(Request $request, Group $group)
        {
            $input = $request['post'];
            $group->fill($input);
            $group->leader_id = Auth::user()->id;
            $group->save();
            $group->users()->attach(Auth::user()->id);
            return redirect('\posts');
        }
    
    public function particitate(Request $request)
        {
            $group_id = $request->group_id;
            $user_id = auth()->id();
            $group = Group::findOrFail($group_id);
            $group->users()->attach($user_id);
            return redirect()->back()->with(['success'=>'グループに参加しました！']);
        }


}
