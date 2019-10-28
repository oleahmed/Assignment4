<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class dbController extends Controller
{

 	public function show()
    {
    	$allData = Task::latest()->get();
    	return view ('db',compact('allData'));
    }

    public function store(request $request)
    {
    	$this->validate(request(),[
    		'name' => 'required',
    		'task' => 'required'
    	]);

    	if($request->hasFile('image')){
    		$img = uniqid().'.jpg';
    		$request->image->move('photos',$img);
    		Task::create([
    			'name' => request('name'),
    			'task' => request('task'),
    			'image' => $img
    		]);
    		
    	}else{
    		Task::create([
    			'name' => request('name'),
    			'task' => request('task')
    		]);

    		
    	}

    	return redirect()->route('form');

    }

    	 public function edit($id)
    {
    	$data = Task::find($id);
    	return view('update',compact('data'));
    }

        public function update($id)
    {
    		$this->validate(request(),[
    		'name' => 'required',
    		'task' => 'required'
    	]);

    		Task::find($id)->update([
    			'name' => request('name'),
    			'task' => request('task')
    		]);
    		return redirect()->route('form')->with('updatesuccess','Updated Successfully');
    }

    public function delete($id)
    {
    	Task::find($id)->delete();
    	return redirect()->route('form');
    }

    
    
    }

   



