<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TableController extends Controller
{

    public function getTabla($tablename)
    {
        $tableData = DB::table($tablename)->get();
        return view('admin.tabla', compact('tableData'));
    }

    public function uindex()
    {
    $users = User::all();
    return view('admin.users', compact('users'));
    }

    public function pindex()
    {
    $posts = Post::all();
    return view('admin.posts', compact('posts'));
    }

    public function rindex()
    {
    $roles = Role::all();
    return view('admin.roles', compact('roles'));
    }

    public function tindex()
    {
    $tags = Tag::all();
    return view('admin.tags', compact('tags'));
    }


}
