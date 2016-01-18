<?php
namespace app\Repositories;
use App\Invoices;
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 18/01/16
 * Time: 18:01
 */
class InvoiceRepository
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getAllInvoicesFromDatabase()
    {
        return Invoices::all();
    }
}