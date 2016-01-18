<?php

namespace App\Http\Controllers;

use App\Invoices;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{
    //
    public function index()
    {
        if (!Auth::check() ){
            return "Forbbiden";
        }

        $database_invoices = $this->getAllInvoicesFromDatabase();

        $invoices = $this->transform($database_invoices);
        return view('invoices', compact('invoices'));

        //$data['invoices'] = $invoices;
        //return view('invoices', $data);
    }

    private function getAllInvoicesFromDatabase()
    {
        return Invoices::all();
    }

    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
