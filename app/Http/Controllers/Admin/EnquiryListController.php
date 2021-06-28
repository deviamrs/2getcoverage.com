<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactFormDetail;
use Illuminate\Http\Request;

class EnquiryListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //

        return view('admin.enquiry.index')->withEntries(ContactFormDetail::orderByDesc('id')->get());
    }
}
