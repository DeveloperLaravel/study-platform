<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $events = [
            [
                'title' => 'Event One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'venue' => 'Tripoli',
                'seats' => 25,
                'price' => 35,
                'date' => '2026-02-21',
            ],
            [
                'title' => 'Event Two',
                'description' => 'Sed do eiusmod tempor incididunt ut labore.',
                'venue' => 'Benghazi',
                'seats' => 40,
                'price' => 50,
                'date' => '2026-03-10',
            ],
            [
                'title' => 'Event Three',
                'description' => 'Ut enim ad minim veniam quis nostrud.',
                'venue' => 'Misrata',
                'seats' => 60,
                'price' => 70,
                'date' => '2026-04-05',
            ],
        ];

        $posts = [
            [
                'title' => 'Evento at HW',
                'author' => 'Admin',
                'image' => 'images/demo/blog1.jpg',
                'excerpt' => 'Pellentesque habitant morbi tristique senectus et netus.',
            ],
            [
                'title' => 'Evento at NY',
                'author' => 'Admin',
                'image' => 'images/demo/blog2.jpg',
                'excerpt' => 'Vestibulum tortor quam, feugiat vitae ultricies eget.',
            ],
            [
                'title' => 'US Feast',
                'author' => 'Admin',
                'image' => 'images/demo/blog3.jpg',
                'excerpt' => 'Aenean ultricies mi vitae est mauris placerat.',
            ],
        ];

        $plans = [
            [
                'name' => 'Silver',
                'price' => 10000,
                'seats' => 100,
                'hotel' => '3 Star Hotel',
            ],
            [
                'name' => 'Gold',
                'price' => 20000,
                'seats' => 300,
                'hotel' => '5 Star Hotel',
            ],
            [
                'name' => 'Platinum',
                'price' => 30000,
                'seats' => 500,
                'hotel' => '7 Star Hotel',
            ],
        ];

        $team = [
            [
                'name' => 'Jon Doe',
                'role' => 'CEO',
                'image' => 'images/team1.jpg',
            ],
            [
                'name' => 'Sara Ahmed',
                'role' => 'Project Manager',
                'image' => 'images/team2.jpg',
            ],
            [
                'name' => 'Ali Mansour',
                'role' => 'Lead Developer',
                'image' => 'images/team3.jpg',
            ],
            [
                'name' => 'Mona Saleh',
                'role' => 'Event Manager',
                'image' => 'images/team4.jpg',
            ],
        ];

        $testimonials = [
            [
                'name' => 'Monir Hossain',
                'role' => 'CEO',
                'image' => 'images/testimonial.jpg',
                'content' => 'Amazing service and professional team!',
            ],
            [
                'name' => 'Nur Ul Hossain',
                'role' => 'Project Manager',
                'image' => 'images/testimonial2.jpg',
                'content' => 'The event was well organized and perfect.',
            ],
            [
                'name' => 'Rub Elvi',
                'role' => 'Developer',
                'image' => 'images/testimonial3.jpg',
                'content' => 'Highly recommended for big events.',
            ],
        ];

        return view('home', compact(
            'events',
            'posts',
            'plans',
            'team',
            'testimonials'
        ));
    }
}
