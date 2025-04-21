<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts')); 
}
