<?php

namespace App\Http\Controllers;

use App\Invoices;
use app\Repositories\InvoiceRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{
    protected $invoiceRepo;

    /**
     * InvoicesController constructor.
     * @param $invoiceRepo
     *
     * DEPENDENCI INJECTION
     */
    public function __construct($invoiceRepo)
    {
        $this->invoiceRepo = $invoiceRepo;
    }

    public function index()
    {
        if (!Auth::check() ){
            return "Forbbiden";
        }

        $database_invoices = invoiceRepo->getAllInvoicesFromDatabase();

        $invoices = $this->transform($database_invoices);
        return view('invoices', compact('invoices'));

        //$data['invoices'] = $invoices;
        //return view('invoices', $data);
    }

    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
