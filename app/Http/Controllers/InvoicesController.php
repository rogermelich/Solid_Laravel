<?php

namespace App\Http\Controllers;

use App\Invoices;
use app\Repositories\InvoiceRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{
    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $invoiceRepo
     *
     * DEPENDENCI INJECTION
     */
    public function __construct(\RepositoryInterface $invoiceRepo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        if (!Auth::check() ){
            return "Forbbiden";
        }

        $invoices = $this->transform($this->repo->all());
        return view('invoices', compact('invoices'));

        //$data['invoices'] = $invoices;
        //return view('invoices', $data);
    }

    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
