<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'Gels Coffee',
            'title' => 'Premium Coffee Roasters & Baristas',
            'phone' => '+639638703842',
            'location' => 'Taguig & Caloocan, PH',
            'bio' => 'Bringing you the finest coffee experience with freshly roasted beans and expertly brewed drinks.',
            'profile_image' => 'https://wallpapers.com/images/hd/coffee-cup-dark-aesthetic-l5c8uth00nnwfu0n.jpg',

            'skills' => [
                'Espresso Brewing',
                'Latte Art',
                'Coffee Roasting',
                'Barista Training',
                'Customer Service'
            ],

            'projects' => [
                'Signature Espresso Blend' => [
                    'details' => 'A carefully crafted blend of Arabica beans, roasted to perfection for a rich, smooth espresso.',
                    'link' => 'https://gelscoffee.com/signature-espresso'
                ],
                'Cold Brew Collection' => [
                    'details' => 'Refreshing cold brew coffees made with slow-steeped beans for maximum flavor and smoothness.',
                    'link' => 'https://gelscoffee.com/cold-brew'
                ],
                'Seasonal Coffee Drinks' => [
                    'details' => 'Exclusive coffee beverages available for a limited time, featuring unique flavors and ingredients.',
                    'link' => 'https://gelscoffee.com/seasonal-drinks'
                ],
            ],

            'education' => [
                [
                    'title' => 'Barista Certification',
                    'description' => 'All team members are professionally trained and certified by recognized coffee institutions.',
                    'image' => 'https://www.chowhound.com/img/gallery/why-espresso-from-a-coffee-shop-always-tastes-different-from-homemade/intro-1740526988.jpg',
                    'link' => 'https://www.specialtycoffeeassociation.org/certifications',
                ],
                [
                    'title' => 'Sustainable Coffee Practices',
                    'description' => 'Committed to ethical sourcing and environmentally friendly roasting techniques.',
                    'image' => 'https://lorcoffee.com/cdn/shop/articles/Cappuccino-exc.jpg?v=1684870907',
                    'link' => 'https://www.sustainablecoffee.org/',
                ],
            ],

            'social_links' => [
                'LinkedIn' => 'https://www.linkedin.com/in/benitez-angel-a-benitez-01b764385/',
                'GitHub'   => 'https://github.com/user050507280221',
                'Email'    => 'angelbenitezayado477@gmail.com',
                'Instagram'=> 'https://www.instagram.com/vn5e1.hygge/',
                'Facebook' => 'https://facebook.com/angel.benitezayado',
            ],

            'about' => 'At Gels Coffee, we believe every cup tells a story. Our mission is to provide exceptional coffee experiences through passion, quality beans, and expert craftsmanship. Whether you are a coffee connoisseur or just starting your journey, join us for a sip of perfection.'
        ];

        $testimonials = [
            [
                'quote' => 'Gels Coffee is hands down the best coffee experience I’ve ever had. The quality is consistently amazing, and their team is incredibly passionate.',
                'author' => 'Maria L., Coffee Enthusiast',
            ],
            [
                'quote' => 'The cold brew collection is my go-to for hot days. Gels Coffee always delivers freshness and flavor in every bottle.',
                'author' => 'Joshua T., Startup Founder',
            ],
            [
                'quote' => 'Not only do they serve incredible coffee, but their commitment to sustainability and education makes me proud to support them.',
                'author' => 'Clara V., Environmental Advocate',
            ],
        ];

        return view('portfolio.index', compact('portfolio', 'testimonials'));
    }
}
