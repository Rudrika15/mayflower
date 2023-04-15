<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    function index()
    {
        $booking  = Book::join('packges', 'packges.id', 'books.packageId')
            ->paginate(5, ['books.*', 'packges.packageName']);

        return view('admin.bookings.index', \compact('booking'));
    }
}
