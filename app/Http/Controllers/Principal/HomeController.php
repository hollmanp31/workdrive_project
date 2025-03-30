<?php

namespace App\Http\Controllers\Principal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menuItems = [
            ['icon' => 'fas fa-users', 'route' => 'index1'],
            ['icon' => 'fas fa-user-cog', 'route' => 'inicio'], 
            ['icon' => 'fa-solid fa-circle-user', 'route' => 'usuarios'], 
            ['icon' => 'fas fa-lock', 'route' => 'permisos']
        ];
        return view('layouts.index', compact('menuItems'));
    } 

    public function index1()
    {
        $menuItems = [
            ['icon' => 'fas fa-users', 'route' => 'index1'],
            ['icon' => 'fas fa-user-cog', 'route' => 'inicio'], 
            ['icon' => 'fa-solid fa-circle-user', 'route' => 'usuarios'], 
            ['icon' => 'fas fa-lock', 'route' => 'permisos']
        ];
        return view('index1', compact('menuItems'));
    } 

    public function inicio()
    {
        $menuItems = [
            ['icon' => 'fas fa-users', 'route' => 'index1'],
            ['icon' => 'fas fa-user-cog', 'route' => 'inicio'], 
            ['icon' => 'fa-solid fa-circle-user', 'route' => 'usuarios'], 
            ['icon' => 'fas fa-lock', 'route' => 'permisos']
        ];
        return view('inicio', compact('menuItems'));
    }
    public function usuarios()
    {
        $menuItems = [
            ['icon' => 'fas fa-users', 'route' => 'index1'],
            ['icon' => 'fas fa-user-cog', 'route' => 'inicio'], 
            ['icon' => 'fa-solid fa-circle-user', 'route' => 'usuarios'], 
            ['icon' => 'fas fa-lock', 'route' => 'permisos']
        ];
        return view('usuarios', compact('menuItems'));
    } 
    public function permisos()
    {
        $menuItems = [
            ['icon' => 'fas fa-users', 'route' => 'index1'],
            ['icon' => 'fas fa-user-cog', 'route' => 'inicio'], 
            ['icon' => 'fa-solid fa-circle-user', 'route' => 'usuarios'], 
            ['icon' => 'fas fa-lock', 'route' => 'permisos']
        ];
        return view('permisos', compact('menuItems'));
    }
}


    //

