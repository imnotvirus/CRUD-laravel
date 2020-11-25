<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\ModelBook;
use App\Models\User;
class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objBook = new ModelBook();
    }

    public function index()
    {
        $book = $this->objBook->all();
        return view('index', compact('book'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $book=$this->objBook->find($id);
        return view('show', compact('book'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
