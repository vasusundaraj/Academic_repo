<?php


namespace App\Http\Controllers;


class CandidatePoolController extends Controller
{
    public function index(){
        return view('layout.candidate_pool');
    }
}
