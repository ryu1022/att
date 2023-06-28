<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Group;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use App\Calendar\CalendarView;


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
            return view('posts/participation')->with(['groups' => $group->get()]);
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
    
    public function join(Request $request)
        {
            $group_id = $request->group_id;
            $user_id = auth()->id();
            $group = Group::findOrFail($group_id);
            $group->users()->attach($user_id);
            return redirect()->back()->with(['success'=>'グループに参加しました！']);
        }
        
    public function show(Group $group)
        {
            $events = $group->events()->get();
            $calendar = new CalendarView(time());
            return view('posts/show')->with(['group' => $group, "events" => $events, "calendar" => $calendar]);
        }
        
    public function event_show(Event $event)
        {
            return view('posts/show')->with(['event' => $event]);
        }
        
    public function event(Group $group)
        {
            return view('posts/event')->with(['group' => $group]);
        }
        
    public function save(Request $request, Event $event, Group $group)
        {
            $input = $request['post'];
            $event->fill($input);
            $event->group_id = $group->id;
            $event->creator_id = Auth::user()->id;
            $event->save();
            $event->users()->attach(Auth::user()->id);
            return redirect('/posts');
            
        }
        
    public function delete(Event $event)
        {
            $event->delete();
            return redirect('/show');
        }
        

}