<?php
namespace app\Repositories;
use App\Invoices;
use RepositoryInterface;
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 18/01/16
 * Time: 18:01
 */
class InvoiceRepository extends Repository
{
    function model()
    {
        return invoices::class;
    }
}