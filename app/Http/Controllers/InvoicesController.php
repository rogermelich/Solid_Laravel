<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use app\Repositories\UserRepository;
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
    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        if (!Auth::check() ){
            return "Forbbiden";
        }

        $invoices = $this->repo->all();
        $invoices = $this->transform($invoices);
        return view('invoices', compact('invoices'));

        //$data['invoices'] = $invoices;
        //return view('invoices', $data);
    }

    private function transform($database_invoices)
    {
        return $database_invoices;
    }
}
