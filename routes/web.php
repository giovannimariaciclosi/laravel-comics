<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $linksList = [
    'CHARACTERS',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP',
  ];

  $iconsList = [
    [
      "text" => "DIGITAL COMICS",
      "image" => "buy-comics-digital-comics.png",
    ],
    [
      "text" => "DC MERCHANDISE",
      "image" => "resources/buy-comics-merchandise.png",
    ],
    [
      "text" => "SUBSCRIPTION",
      "image" => "resources/img/buy-comics-subscriptions.png",
    ],
    [
      "text" => "COMIC SHOP LOCATOR",
      "image" => "resources/img/buy-comics-shop-locator.png",
    ],
    [
      "text" => "DC POWER VISA",
      "image" => "resources/img/buy-dc-power-visa.svg",
    ]
  ];

  $footerLinksList =
    [
      [
        "text" => "DC COMICS",
        "contents" => [
          "Characters",
          "Comics",
          "Movies",
          "TV",
          "Games",
          "Videos",
          "News",
        ]
      ],
      [
        "text" => "SHOP",
        "contents" => [
          "Shop DC",
          "Shop DC Collectibles"
        ]
      ],
      [
        "text" => "DC",
        "contents" => [
          "Terms Of Use",
          "Privacy Policy (New)",
          "Ad Choices",
          "Advertising",
          "Jobs",
          "Subscriptions",
          "Talent Workshops",
          "CPSC Certificates",
          "Ratings",
          "Shop Help",
          "Contact Us"
        ]
      ],
      [
        "text" => "SITES",
        "contents" => [
          "DC",
          "MAD Magazine",
          "DC Kids",
          "DC Universe",
          "DC Power Visa"
        ]
      ],
    ];

  $comics = config('comics');
  // dd($footerLinksList);


  return view(('home'), compact('linksList', 'comics', 'iconsList', 'footerLinksList'));
})->name('home');
