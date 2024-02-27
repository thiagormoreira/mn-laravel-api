<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\City;
use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return $this->response($users);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);

        $address = Address::create($data['address']);

        $user->address()->associate($address);
        $user->save();

        return $this->response($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            return $this->response(User::findOrFail($id));
        } catch(ModelNotFoundException $e){
            return $this->response(["message"=> "Usuario nao encontrado"],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        try{
            $data = $request->validated();

            $user = User::findOrFail($id);
            $user->update($data);

            $user->address->update($data['address']);

            $city = City::find($data['address']['city']['id']);

            $user->address->city()->associate($city);
            $user->address->save();

            return $this->response($user);
        } catch(ModelNotFoundException $e){
            return $this->response(['message'=> 'Usuario nao encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        try{
            $user = User::findOrFail($id);
            $user->delete();

            return $this->response(['messsage' => 'Usuario deletado com sucesso'], 200);
        } catch(ModelNotFoundException $e){
            return $this->response(['message'=> 'Usuario nao encontrado'],404);
        }
    }
}
