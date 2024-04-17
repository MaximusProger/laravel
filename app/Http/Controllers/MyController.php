<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function method1(){
        $title ='1';
        $content ='content1';


        return view('method',['title'=>$title,'content'=>$content,]);


    }
    public function method2(){
        $title ='2';
        $content ='content2';
        return view('method',['title'=>$title,'content'=>$content]);


    }
    public function method3(){
        $title ='3';
        $content ='content3';
        return view('method',['title'=>$title,'content'=>$content]);

    }
    //Задание 10.2
    public function method4(){
        $title ='4';
        $content ='content4';
        $links = [
       
        [
        'text' => 'text1',
        'href' => 'href',
        ],
        [
        'text' => 'text2',
        'href' => 'href2',
        ],
        ['text' => 'text3', 
        'href' => 'href3',],];
        $users = [
            [
            'name' => 'user1', 'surname' => 'surname1', 'banned' => true,
            ],
            ['name' => 'user2',
            'surname' => 'surname2',
            'banned' => false,],
            [ 'name' => 'user3',
            'surname' => 'surname3',
            'banned' => true,],
            
            ['name' => 'user4',
            'surname' => 'surname4',
            'banned' => false,],
            [ 'name' => 'user5',
            'surname' => 'surname5',
            'banned' => false,],];

        return view('method4',['title'=>$title,'content'=>$content,'links'=>$links,'users'=>$users]);


    }
    
}
