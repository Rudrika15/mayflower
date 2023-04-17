<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function index()
    {

        $booking  = Book::join('packges', 'packges.id', 'books.packageId')
            // ->join('payments', 'payments.id', '=', 'books.payment_id')
            ->paginate(10, ['books.*', 'packges.packageName']);


        // , 'payments.payment_id', 'payments.amount'
        return view('admin.bookings.index', \compact('booking'));
    }
}
