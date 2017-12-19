<?php
namespace EduSchool\Http\Controllers\Admin;

use EduSchool\Models\User;
use Illuminate\Http\Request;
use EduSchool\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = \FormBuilder::create(UserForm::class, [
            'url' => route('admin.users.store'),
            'method' => 'POST'
        ]);
        return view('admin.users.create',compact('form'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    public function showDetails(){

    }
    /**
     * Display the specified resource.
     *
     * @param  \EduSchool\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \EduSchool\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \EduSchool\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \EduSchool\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

    }
}