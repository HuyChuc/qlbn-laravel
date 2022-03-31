<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function index(){
        $faqs = Faq::where('enabled',1)->orderBy('id', 'DESC')->paginate(10);
        return view('front.faq.index',compact('faqs'));
    }

    public function show($id){
        $faq = Faq::findOrFail($id);
        return view('front.faq.show', compact('faq'));
    }
}
