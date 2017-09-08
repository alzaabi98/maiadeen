<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class CourseController extends Controller
{
    
    public function index() {
    	
    	return view('courses.index');
    }
    


    public function show() {
    	
    	$course =  [

    		'title' => 'Lear php from scarch', 
    		'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing ,elit. Expedita, eaque!',
    		'image' => 'image.png',
    		'author' => 'abdulaziz alzaabi',
    		'start' => '3 stars',
    		'lectures' => 40,
    		'length' => '3 hours'

    	];

    	
    	$lectures= collect([

    		(object)[
    			'title' => 'introduction',
    			'file_url' => '#',
    			'video_url' => '#',
                'parts' => collect([
                    (object) ['name' => 'Lorem ipsum dolor sit amet.', 'time' => '30 min'],
                    (object) ['name' => 'part2', 'time' => '10 min'],
                    (object) ['name' => 'part3', 'time' => '15 min'],

                ])
    		],

    		(object)[
    			'title' => 'how to install the tools',
    			'file_url' => '#',
    			'video_url' => '#',
                 'parts' => collect([
                    (object) ['name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non in laboriosam vero, incidunt ipsa nostrum totam cum dicta doloremque similique, voluptatum assumenda deserunt veritatis maxime voluptatibus saepe dolor! Sapiente, doloremque.', 'time' => '30 min'],
                    (object) ['name' => 'Lorem ipsum dolor sit.', 'time' => '10 min'],
                    (object) ['name' => 'part3', 'time' => '15 min'],

                 ])
    		],

    		(object)[
    			'title' => 'elements vs tag in html',
    			'file_url' => '#',
    			'video_url' => '#',
                'parts' => collect([
                     (object) ['name' => 'part1', 'time' => '30 min'],
                    (object) ['name' => 'part2', 'time' => '10 min'],
                    (object) ['name' => 'Lorem ipsum dolor sit amet, consectetur.', 'time' => '15 min'],
                ])
    		],
    	]);
    	
        $rating = [200,400,700,1200,2000];
    	//$lectures = json_decode($lectures);

    	//dd($lectures);

    	$course = (object) $course;
    	
    	// dd($course);

        $users = collect([
            
            (object)[
                'id' =>1,
                'name' => 'abdulaziz',
                'comment' => 'This is nice course'
            ],
            (object)[
                'id' =>2,
                'name' => 'Ahmed',
                'comment' => 'Lorem ipsum dolor sit.'
            ],
            (object)[
                'id' =>3,
                'name' => 'Abdullah',
                'comment' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate esse minima beatae similique nisi nobis dolore commodi odio expedita, adipisci quos, excepturi alias, sint! Sapiente dolorum nemo amet, officiis esse!'
            ],
             (object)[
                'id' =>4,
                'name' => 'Salim',
                'comment' => 'This Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum eligendi sunt minus expedita facilis blanditiis accusantium perferendis maxime molestiae quos. course'
            ],
            (object)[
                'id' =>5,
                'name' => 'Jasim',
                'comment' => 'This is nice course'
            ],
            (object)[
                'id' =>6,
                'name' => 'Moneer',
                'comment' => 'This is nice course'
            ],
            (object)[
                'id' =>5,
                'name' => 'Hamza',
                'comment' => 'This is nice course'
            ],
            (object)[
                'id' =>6,
                'name' => 'Omar',
                'comment' => 'This is nice course'
            ]
            
        ]);
    	
        //dd($users);
    	return view('courses.show', [
    			'course' => $course,
    			'lectures' =>  $lectures,
                'rating' => $rating ,
                'users' => $users
    		]);
    }
    
}
