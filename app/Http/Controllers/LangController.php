<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function convert(Request $request)
    {
        $original_word = $request->word;
        $words = str_split($request->word);
        $result = '';
        foreach($words as $word)
        {
            if($word == 'a'){
                $result .= '1';
            }
            elseif($word == 'e'){
                $result .= '2';
            }
            elseif($word == 'i'){
                $result .= '3';
            }
            elseif($word == 'o'){
                $result .= '4';
            }
            elseif($word == 'u'){
                $result .= '5';
            }
            elseif($word == ' '){
                $result .= ' ';
            }
            else{
                $word .= 'a';
                $result .= $word;
            }
        }
        // dd($result);
        return view('convert',compact('result','original_word'));

    }
    public function convertCreate()
    {
        return view('convert');
    }
    public function revertCreate()
    {
        return view('revert');
    }
    public function revert(Request $request)
    {
        $original_word = $request->word;
        $words = str_split($request->word);
        $result = '';
        foreach($words as $word)
        {
            if($word == '1'){
                $result .= 'a';
            }
            elseif($word == '2'){
                $result .= 'e';
            }
            elseif($word == '3'){
                $result .= 'i';
            }
            elseif($word == '4'){
                $result .= 'o';
            }
            elseif($word == '5'){
                $result .= 'u';
            }
            elseif($word == ' '){
                $result .= ' ';
            }
            elseif($word == 'a'){
                $result .= '';
            }
            else{
                $result .= $word;
            }
        }
        return view('revert',compact('result','original_word'));
    }
    // public function revertCreate()
    // {
    //     return
    // }
}
