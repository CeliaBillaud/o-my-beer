<?php

namespace App\DataFixtures;

class BeerProvider {

    private $beers = [
        // Guinness
    "Guinness Draught" => [
        "brand" => "Guinness",
        "type" => "Noire",
        "style" => "Irish Dry Stout",
        "hop" => "Goldings, Fuggles",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Pale Ale, Flaked Barley",
        "ibu" => 45,
        "alcohol" => 4.2,
        "blg" => 11.2
    ],
    "Guinness Blonde American Lager" => [
        "brand" => "Guinness",
        "type" => "Blonde",
        "style" => "American Lager",
        "hop" => "Mosaic, Willamette",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 21,
        "alcohol" => 5.0,
        "blg" => 11.7
    ],
    "Guinness Extra Stout" => [
        "brand" => "Guinness",
        "type" => "Noire",
        "style" => "Irish Extra Stout",
        "hop" => "Goldings, Fuggles",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Roasted Barley, Pale Ale",
        "ibu" => 35,
        "alcohol" => 5.6,
        "blg" => 13.1
    ],
    "Guinness Foreign Extra Stout" => [
        "brand" => "Guinness",
        "type" => "Noire",
        "style" => "Foreign Export Stout",
        "hop" => "Goldings, Challenger",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Roasted Barley, Pale Ale",
        "ibu" => 40,
        "alcohol" => 7.5,
        "blg" => 15.2
    ],
    "Guinness Nitro IPA" => [
        "brand" => "Guinness",
        "type" => "Blonde",
        "style" => "American IPA",
        "hop" => "Citra, Centennial",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Pale Ale, Crystal",
        "ibu" => 44,
        "alcohol" => 5.8,
        "blg" => 13.2
    ],
    "Guinness West Indies Porter" => [
        "brand" => "Guinness",
        "type" => "Brune",
        "style" => "English Porter",
        "hop" => "Goldings, Challenger",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Pale Ale, Amber",
        "ibu" => 33,
        "alcohol" => 6.0,
        "blg" => 14.4
    ],
    "Guinness 200th Anniversary Export Stout" => [
        "brand" => "Guinness",
        "type" => "Noire",
        "style" => "Irish Export Stout",
        "hop" => "Goldings, Fuggles",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Roasted Barley, Pale Ale",
        "ibu" => 52,
        "alcohol" => 6.0,
        "blg" => 15.5
    ],
    "Guinness Antwerpen Stout" => [
        "brand" => "Guinness",
        "type" => "Noire",
        "style" => "Belgian-Style Stout",
        "hop" => "Goldings, Willamette",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Roasted Barley, Pale Ale",
        "ibu" => 52,
        "alcohol" => 8.0,
        "blg" => 16.5
    ],
    "Guinness Rye Pale Ale" => [
        "brand" => "Guinness",
        "type" => "Blonde",
        "style" => "Rye Pale Ale",
        "hop" => "Citra, Simcoe",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Pale Ale, Rye",
        "ibu" => 44,
        "alcohol" => 5.0,
        "blg" => 12.0
    ],

// Heineken
    "Heineken Lager" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Euro Pale Lager",
        "hop" => "Saaz, Cascade",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 19,
        "alcohol" => 5.0,
        "blg" => 11.8
    ],
    "Heineken 0.0" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Non-Alcoholic",
        "hop" => "Cascade",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 10,
        "alcohol" => 0.0,
        "blg" => 4.8
    ],
    "Heineken Dark Lager" => [
        "brand" => "Heineken",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Hallertau, Spalt",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Munich, Caramel",
        "ibu" => 21,
        "alcohol" => 5.0,
        "blg" => 12.5
    ],
    "Heineken Light" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Saaz, Cascade",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 21,
        "alcohol" => 3.3,
        "blg" => 8.5
    ],
    "Heineken Star" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Pale Lager",
        "hop" => "Saaz, Cascade",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 19,
        "alcohol" => 5.0,
        "blg" => 11.8
    ],
    "Heineken Premium Light" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Saaz, Cascade",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 16,
        "alcohol" => 3.1,
        "blg" => 8.2
    ],
    "Heineken Tarwebok" => [
        "brand" => "Heineken",
        "type" => "Brune",
        "style" => "Weizenbock",
        "hop" => "Hallertau, Tettnang",
        "yeast" => "Top-Fermenting Ale",
        "malts" => "Wheat, Munich",
        "ibu" => 20,
        "alcohol" => 6.5,
        "blg" => 16.0
    ],
    "Heineken H41 Wild Lager" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Wild Lager",
        "hop" => "Cascade, Nelson Sauvin",
        "yeast" => "Wild Lager Yeast",
        "malts" => "Pilsner, Pale",
        "ibu" => 30,
        "alcohol" => 5.3,
        "blg" => 12.6
    ],
    "Heineken Asia Pacific" => [
        "brand" => "Heineken",
        "type" => "Blonde",
        "style" => "Pale Lager",
        "hop" => "Saaz, Cascade",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Pale",
        "ibu" => 21,
        "alcohol" => 4.8,
        "blg" => 11.5
    ],
    "Heineken Oud Bruin" => [
        "brand" => "Heineken",
        "type" => "Brune",
        "style" => "Oud Bruin",
        "hop" => "Hallertau, Spalt",
        "yeast" => "Bottom-Fermenting Lager",
        "malts" => "Pilsner, Munich",
        "ibu" => 17,
        "alcohol" => 3.5,
        "blg" => 8.2
    ],

// Stella Artois
    "Stella Artois Lager" => [
        "brand" => "Stella Artois",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Stella Artois Midnight Lager" => [
        "brand" => "Stella Artois",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Roasted Barley, Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 5.4,
        "blg" => 11.5
    ],
    "Stella Artois Solstice Lager" => [
        "brand" => "Stella Artois",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 4.5,
        "blg" => 11
    ],
    "Stella Artois Cidre" => [
        "brand" => "Stella Artois",
        "type" => "Autres",
        "style" => "Cider",
        "hop" => "N/A",
        "yeast" => "Cider Yeast",
        "malts" => "N/A",
        "ibu" => 0,
        "alcohol" => 4.5,
        "blg" => 10
    ],
    "Stella Artois Gluten-Free" => [
        "brand" => "Stella Artois",
        "type" => "Blonde",
        "style" => "Gluten-Free Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Gluten-Free Malt",
        "ibu" => 15,
        "alcohol" => 4.8,
        "blg" => 9
    ],
    "Stella Artois Spritz" => [
        "brand" => "Stella Artois",
        "type" => "Autres",
        "style" => "Spritz",
        "hop" => "N/A",
        "yeast" => "N/A",
        "malts" => "N/A",
        "ibu" => 0,
        "alcohol" => 3.5,
        "blg" => 7
    ],
    "Stella Artois Black" => [
        "brand" => "Stella Artois",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Roasted Barley, Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 5.4,
        "blg" => 11.5
    ],
    "Stella Artois Pear" => [
        "brand" => "Stella Artois",
        "type" => "Autres",
        "style" => "Fruit Beer",
        "hop" => "N/A",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt",
        "ibu" => 13,
        "alcohol" => 4.5,
        "blg" => 9
    ],
    "Stella Artois Raspberry" => [
        "brand" => "Stella Artois",
        "type" => "Autres",
        "style" => "Fruit Beer",
        "hop" => "N/A",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 4.5,
        "blg" => 9
    ],

// Budweiser
    "Budweiser Lager" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 12,
        "alcohol" => 5.0,
        "blg" => 12
    ],
    "Bud Light" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 4,
        "alcohol" => 4.2,
        "blg" => 9
    ],
    "Budweiser Select" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 12,
        "alcohol" => 4.3,
        "blg" => 8.5
    ],
    "Budweiser Black Crown" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Amber Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 22,
        "alcohol" => 6.0,
        "blg" => 12.5
    ],
    "Budweiser Discovery Reserve" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Red Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 18,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Budweiser Nitro Gold" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Golden Ale",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 16,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Budweiser Freedom Reserve" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Red Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 20,
        "alcohol" => 5.4,
        "blg" => 11
    ],
    "Budweiser Copper Lager" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Amber Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 18,
        "alcohol" => 6.2,
        "blg" => 13
    ],
    "Budweiser Prohibition Brew" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Non-Alcoholic Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 10,
        "alcohol" => 0.5,
        "blg" => 5
    ],
    "Budweiser 1933 Repeal Reserve Amber Lager" => [
        "brand" => "Budweiser",
        "type" => "Blonde",
        "style" => "Amber Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Two-Row Barley Malt",
        "ibu" => 25,
        "alcohol" => 6.1,
        "blg" => 13
    ],

// Corona
    "Corona Extra" => [
        "brand" => "Corona",
        "type" => "Blonde",
        "style" => "Pale Lager",
        "hop" => "Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 19,
        "alcohol" => 4.6,
        "blg" => 11
    ],
    "Corona Light" => [
        "brand" => "Corona",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.1,
        "blg" => 8.5
    ],
    "Corona Premier" => [
        "brand" => "Corona",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 12,
        "alcohol" => 4.0,
        "blg" => 8
    ],
    "Corona Familiar" => [
        "brand" => "Corona",
        "type" => "Blonde",
        "style" => "Vienna Lager",
        "hop" => "Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.8,
        "blg" => 11
    ],
    "Corona Refresca" => [
        "brand" => "Corona",
        "type" => "Blonde",
        "style" => "Flavored Malt Beverage",
        "hop" => "Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 0,
        "alcohol" => 4.5,
        "blg" => 8
    ],
    "Corona Hard Seltzer" => [
        "brand" => "Corona",
        "type" => "Autres",
        "style" => "Hard Seltzer",
        "hop" => null,
        "yeast" => "Seltzer Yeast",
        "malts" => "Cane Sugar",
        "ibu" => 0,
        "alcohol" => 4.5,
        "blg" => 4
    ],
    "Corona Extra Lime" => [
        "brand" => "Corona",
        "type" => "Blonde",
        "style" => "Pale Lager with Lime",
        "hop" => "Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 19,
        "alcohol" => 4.6,
        "blg" => 11
    ],
    "Corona Hard Seltzer Tropical Lime" => [
        "brand" => "Corona",
        "type" => "Autres",
        "style" => "Hard Seltzer",
        "hop" => null,
        "yeast" => "Seltzer Yeast",
        "malts" => "Cane Sugar",
        "ibu" => 0,
        "alcohol" => 4.5,
        "blg" => 4
    ],
    "Corona Hard Seltzer Cherry" => [
        "brand" => "Corona",
        "type" => "Autres",
        "style" => "Hard Seltzer",
        "hop" => null,
        "yeast" => "Seltzer Yeast",
        "malts" => "Cane Sugar",
        "ibu" => 0,
        "alcohol" => 4.5,
        "blg" => 4
    ],

    // Becks
    "Becks Lager" => [
        "brand" => "Becks",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 21,
        "alcohol" => 4.8,
        "blg" => 11.7
    ],
    "Becks Dark" => [
        "brand" => "Becks",
        "type" => "Brune",
        "style" => "Munich Dunkel",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 4.8,
        "blg" => 12
    ],
    "Becks Green Lemon" => [
        "brand" => "Becks",
        "type" => "Autres",
        "style" => "Flavored Lager",
        "hop" => null,
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 17,
        "alcohol" => 2.5,
        "blg" => 6
    ],
    "Becks Blue" => [
        "brand" => "Becks",
        "type" => "Autres",
        "style" => "Non-Alcoholic",
        "hop" => null,
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 17,
        "alcohol" => 0.05,
        "blg" => 7
    ],
    "Becks Gold" => [
        "brand" => "Becks",
        "type" => "Blonde",
        "style" => "Golden Lager",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 5.0,
        "blg" => 11.5
    ],
    "Becks Vier" => [
        "brand" => "Becks",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 22,
        "alcohol" => 4.0,
        "blg" => 10
    ],
    "Becks Ice" => [
        "brand" => "Becks",
        "type" => "Autres",
        "style" => "Ice Lager",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 19,
        "alcohol" => 5.5,
        "blg" => 13
    ],
    "Becks Sapphire" => [
        "brand" => "Becks",
        "type" => "Autres",
        "style" => "Pilsner",
        "hop" => "Sapphire",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 6.0,
        "blg" => 11.8
    ],
    "Becks Amber Lager" => [
        "brand" => "Becks",
        "type" => "Ambrée",
        "style" => "Amber Lager",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Vienna Malt, Munich Malt",
        "ibu" => 22,
        "alcohol" => 4.8,
        "blg" => 11.7
    ],
    "Becks Pils" => [
        "brand" => "Becks",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertauer Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 38,
        "alcohol" => 4.9,
        "blg" => 11.7
    ],

    // Pilsner Urquell
    "Pilsner Urquell" => [
        "brand" => "Pilsner Urquell",
        "type" => "Blonde",
        "style" => "Czech Pilsner",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 40,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell Nefiltrovaný" => [
        "brand" => "Pilsner Urquell",
        "type" => "Blonde",
        "style" => "Unfiltered Czech Pilsner",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 40,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell M?z" => [
        "brand" => "Pilsner Urquell",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell Radler" => [
        "brand" => "Pilsner Urquell",
        "type" => "Autres",
        "style" => "Radler",
        "hop" => null,
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 2.5,
        "blg" => 7
    ],
    "Pilsner Urquell Velikono?ní Ležák" => [
        "brand" => "Pilsner Urquell",
        "type" => "Blonde",
        "style" => "Easter Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 40,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell Mštná 1859" => [
        "brand" => "Pilsner Urquell",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell Master" => [
        "brand" => "Pilsner Urquell",
        "type" => "Blonde",
        "style" => "Czech Pilsner",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 40,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell Pilník" => [
        "brand" => "Pilsner Urquell",
        "type" => "Autres",
        "style" => "Specialty Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell ?tramberk" => [
        "brand" => "Pilsner Urquell",
        "type" => "Ambrée",
        "style" => "Amber Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Vienna Malt, Pilsner Malt",
        "ibu" => 35,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],
    "Pilsner Urquell " => [
        "brand" => "Pilsner Urquell",
        "type" => "Blonde",
        "style" => "Czech Pilsner",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 40,
        "alcohol" => 4.4,
        "blg" => 12.7
    ],

    // Chimay
    "Chimay Bleue" => [
        "brand" => "Chimay",
        "type" => "Brune",
        "style" => "Belgian Strong Dark Ale",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt, Munich Malt, Caramel Malt",
        "ibu" => 35,
        "alcohol" => 9.0,
        "blg" => 19
    ],
    "Chimay Triple" => [
        "brand" => "Chimay",
        "type" => "Blonde",
        "style" => "Belgian Tripel",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt",
        "ibu" => 25,
        "alcohol" => 8.0,
        "blg" => 16
    ],
    "Chimay Dorée" => [
        "brand" => "Chimay",
        "type" => "Blonde",
        "style" => "Belgian Pale Ale",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 4.8,
        "blg" => 12.5
    ],
    "Chimay Grande Réserve" => [
        "brand" => "Chimay",
        "type" => "Brune",
        "style" => "Belgian Strong Dark Ale",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt, Munich Malt, Caramel Malt",
        "ibu" => 35,
        "alcohol" => 9.0,
        "blg" => 19
    ],
    "Chimay Rouge" => [
        "brand" => "Chimay",
        "type" => "Rousse",
        "style" => "Belgian Dubbel",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt, Munich Malt, Caramel Malt",
        "ibu" => 25,
        "alcohol" => 7.0,
        "blg" => 14
    ],
    "Chimay White" => [
        "brand" => "Chimay",
        "type" => "Blonde",
        "style" => "Belgian Tripel",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt",
        "ibu" => 25,
        "alcohol" => 8.0,
        "blg" => 16
    ],
    "Chimay Spéciale Cent Cinquante" => [
        "brand" => "Chimay",
        "type" => "Brune",
        "style" => "Belgian Strong Dark Ale",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt, Munich Malt, Caramel Malt",
        "ibu" => 35,
        "alcohol" => 10.0,
        "blg" => 20
    ],
    "Chimay Bière de Mars" => [
        "brand" => "Chimay",
        "type" => "Rousse",
        "style" => "Belgian Amber Ale",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Trappist",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 30,
        "alcohol" => 7.0,
        "blg" => 14
    ],

    // Hoegaarden
    "Hoegaarden Original White" => [
        "brand" => "Hoegaarden",
        "type" => "Blanche",
        "style" => "Witbier",
        "hop" => "Saaz",
        "yeast" => "Witbier",
        "malts" => "Wheat Malt, Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 4.9,
        "blg" => 11.8
    ],
    "Hoegaarden Rosée" => [
        "brand" => "Hoegaarden",
        "type" => "Blanche",
        "style" => "Fruit Beer",
        "hop" => "Saaz",
        "yeast" => "Witbier",
        "malts" => "Wheat Malt, Pilsner Malt",
        "ibu" => 10,
        "alcohol" => 3.0,
        "blg" => 8.8
    ],
    "Hoegaarden Grand Cru" => [
        "brand" => "Hoegaarden",
        "type" => "Blonde",
        "style" => "Belgian Strong Pale Ale",
        "hop" => "Saaz",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt",
        "ibu" => 35,
        "alcohol" => 8.5,
        "blg" => 16
    ],
    "Hoegaarden Verboden Vrucht" => [
        "brand" => "Hoegaarden",
        "type" => "Brune",
        "style" => "Belgian Dark Ale",
        "hop" => "Saaz",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt, Caramel Malt",
        "ibu" => 20,
        "alcohol" => 8.5,
        "blg" => 15
    ],
    "Hoegaarden Speciale" => [
        "brand" => "Hoegaarden",
        "type" => "Blonde",
        "style" => "Belgian Blonde Ale",
        "hop" => "Saaz",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 5.0,
        "blg" => 12
    ],
    "Hoegaarden Citron" => [
        "brand" => "Hoegaarden",
        "type" => "Blanche",
        "style" => "Witbier",
        "hop" => "Saaz",
        "yeast" => "Witbier",
        "malts" => "Wheat Malt, Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 3.0,
        "blg" => 8.8
    ],
    "Hoegaarden Farmhouse" => [
        "brand" => "Hoegaarden",
        "type" => "Blonde",
        "style" => "Belgian Saison",
        "hop" => "Saaz",
        "yeast" => "Saison",
        "malts" => "Pilsner Malt, Wheat Malt",
        "ibu" => 25,
        "alcohol" => 4.8,
        "blg" => 11.5
    ],
    "Hoegaarden Julius" => [
        "brand" => "Hoegaarden",
        "type" => "Blanche",
        "style" => "Witbier",
        "hop" => "Saaz",
        "yeast" => "Witbier",
        "malts" => "Wheat Malt, Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 3.0,
        "blg" => 8.8
    ],
    "Hoegaarden Fruitesse" => [
        "brand" => "Hoegaarden",
        "type" => "Autres",
        "style" => "Fruit Beer",
        "hop" => "Saaz",
        "yeast" => "Witbier",
        "malts" => "Wheat Malt",
        "ibu" => 10,
        "alcohol" => 3.0,
        "blg" => 8.8
    ],
    "Hoegaarden Witbier" => [
        "brand" => "Hoegaarden",
        "type" => "Blanche",
        "style" => "Witbier",
        "hop" => "Saaz",
        "yeast" => "Witbier",
        "malts" => "Wheat Malt, Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 4.9,
        "blg" => 11.8
    ],

    // Sapporo
    "Sapporo Premium Beer" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 4.9,
        "blg" => 12
    ],
    "Sapporo Premium Light" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 8,
        "alcohol" => 3.9,
        "blg" => 8
    ],
    "Sapporo Reserve" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 22,
        "alcohol" => 5.2,
        "blg" => 12.5
    ],
    "Sapporo Black Label" => [
        "brand" => "Sapporo",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Sapporo Yebisu" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Premium Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 5.0,
        "blg" => 12
    ],
    "Sapporo Classic" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.7,
        "blg" => 11.5
    ],
    "Sapporo Draft" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 5.0,
        "blg" => 11.8
    ],
    "Sapporo Chilled" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.2,
        "blg" => 9.5
    ],
    "Sapporo Light" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 8,
        "alcohol" => 3.9,
        "blg" => 8
    ],
    "Sapporo Karakuchi" => [
        "brand" => "Sapporo",
        "type" => "Blonde",
        "style" => "Dry Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 5.0,
        "blg" => 11.8
    ],

    // Tsingtao
    "Tsingtao Beer" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.7,
        "blg" => 11.5
    ],
    "Tsingtao Pure Draft" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 15,
        "alcohol" => 4.7,
        "blg" => 11
    ],
    "Tsingtao 1903" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "Premium Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 4.7,
        "blg" => 12
    ],
    "Tsingtao Strong" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "Strong Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 22,
        "alcohol" => 7.5,
        "blg" => 16
    ],
    "Tsingtao Yin" => [
        "brand" => "Tsingtao",
        "type" => "Brune",
        "style" => "Dark Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 5.0,
        "blg" => 11.5
    ],
    "Tsingtao IPA" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "IPA",
        "hop" => "Magnum, Cascade",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Munich Malt",
        "ibu" => 50,
        "alcohol" => 6.2,
        "blg" => 13
    ],
    "Tsingtao Stout" => [
        "brand" => "Tsingtao",
        "type" => "Noire",
        "style" => "Stout",
        "hop" => "Chinook, Cascade",
        "yeast" => "Ale",
        "malts" => "Roasted Barley, Chocolate Malt",
        "ibu" => 35,
        "alcohol" => 5.0,
        "blg" => 14
    ],
    "Tsingtao Lager" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.7,
        "blg" => 11.5
    ],
    "Tsingtao Wheat" => [
        "brand" => "Tsingtao",
        "type" => "Blonde",
        "style" => "Wheat Beer",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Weizen",
        "malts" => "Wheat Malt, Pilsner Malt",
        "ibu" => 12,
        "alcohol" => 4.5,
        "blg" => 10
    ],
    "Tsingtao Saison" => [
        "brand" => "Tsingtao",
        "type" => "Saison",
        "style" => "Saison",
        "hop" => "Saaz, Styrian Goldings",
        "yeast" => "Saison",
        "malts" => "Pilsner Malt, Wheat Malt",
        "ibu" => 25,
        "alcohol" => 5.0,
        "blg" => 11
    ],

    // Asahi
    "Asahi Super Dry" => [
        "brand" => "Asahi",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 5.0,
        "blg" => 11.5
    ],
    "Asahi Black" => [
        "brand" => "Asahi",
        "type" => "Brune",
        "style" => "Schwarzbier",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Roasted Malt",
        "ibu" => 15,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Asahi Gold" => [
        "brand" => "Asahi",
        "type" => "Blonde",
        "style" => "Helles Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 5.5,
        "blg" => 11.5
    ],
    "Asahi Soukai" => [
        "brand" => "Asahi",
        "type" => "Blonde",
        "style" => "Session IPA",
        "hop" => "Cascade, Citra",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Wheat Malt",
        "ibu" => 20,
        "alcohol" => 3.5,
        "blg" => 8
    ],
    "Asahi Dry Zero" => [
        "brand" => "Asahi",
        "type" => "Autres",
        "style" => "Sans Alcool",
        "hop" => "Non applicable",
        "yeast" => "Non applicable",
        "malts" => "Non applicable",
        "ibu" => 0,
        "alcohol" => 0.0,
        "blg" => 0
    ],
    "Asahi Style Free" => [
        "brand" => "Asahi",
        "type" => "Autres",
        "style" => "Sans Alcool",
        "hop" => "Non applicable",
        "yeast" => "Non applicable",
        "malts" => "Non applicable",
        "ibu" => 0,
        "alcohol" => 0.0,
        "blg" => 0
    ],
    "Asahi Jukusen" => [
        "brand" => "Asahi",
        "type" => "Blonde",
        "style" => "Premium Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 25,
        "alcohol" => 5.5,
        "blg" => 12
    ],
    "Asahi Kuro" => [
        "brand" => "Asahi",
        "type" => "Brune",
        "style" => "Schwarzbier",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Roasted Malt",
        "ibu" => 15,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Asahi Orion" => [
        "brand" => "Asahi",
        "type" => "Blonde",
        "style" => "Dortmunder Export",
        "hop" => "Tettnang",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 22,
        "alcohol" => 6.0,
        "blg" => 12
    ],
    "Asahi Kuronama" => [
        "brand" => "Asahi",
        "type" => "Brune",
        "style" => "Schwarzbier",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Roasted Malt",
        "ibu" => 15,
        "alcohol" => 5.0,
        "blg" => 11
    ],

    // Peroni
    "Peroni Nastro Azzurro" => [
        "brand" => "Peroni",
        "type" => "Blonde",
        "style" => "Pilsner",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 5.1,
        "blg" => 11.7
    ],
    "Peroni Gran Riserva" => [
        "brand" => "Peroni",
        "type" => "Blonde",
        "style" => "Premium Lager",
        "hop" => "Saaz, Hallertau Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 25,
        "alcohol" => 6.6,
        "blg" => 13
    ],
    "Peroni Red" => [
        "brand" => "Peroni",
        "type" => "Rousse",
        "style" => "Amber Lager",
        "hop" => "Hallertau Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Caramel Malt",
        "ibu" => 24,
        "alcohol" => 4.7,
        "blg" => 12
    ],
    "Peroni Leggera" => [
        "brand" => "Peroni",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 17,
        "alcohol" => 3.5,
        "blg" => 8
    ],
    "Peroni Crystall" => [
        "brand" => "Peroni",
        "type" => "Blonde",
        "style" => "Cristal Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 5.5,
        "blg" => 12
    ],
    "Peroni 3.5" => [
        "brand" => "Peroni",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 12,
        "alcohol" => 3.5,
        "blg" => 8
    ],
    "Peroni Azzurro Gluten Free" => [
        "brand" => "Peroni",
        "type" => "Blonde",
        "style" => "Gluten-Free Lager",
        "hop" => "Saaz",
        "yeast" => "Lager",
        "malts" => "Gluten-Free Malt",
        "ibu" => 18,
        "alcohol" => 5.1,
        "blg" => 11
    ],
    "Peroni Bock" => [
        "brand" => "Peroni",
        "type" => "Brune",
        "style" => "Bock",
        "hop" => "Hallertau Magnum",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Caramel Malt",
        "ibu" => 22,
        "alcohol" => 7.2,
        "blg" => 15
    ],
    "Peroni Libera 0.0%" => [
        "brand" => "Peroni",
        "type" => "Autres",
        "style" => "Sans Alcool",
        "hop" => "Non applicable",
        "yeast" => "Non applicable",
        "malts" => "Non applicable",
        "ibu" => 0,
        "alcohol" => 0.0,
        "blg" => 0
    ],
    "Peroni Red Label" => [
        "brand" => "Peroni",
        "type" => "Rousse",
        "style" => "Amber Lager",
        "hop" => "Hallertau Magnum",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Caramel Malt",
        "ibu" => 24,
        "alcohol" => 4.7,
        "blg" => 12
    ],

    // Leffe
    "Leffe Blonde" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "Abbey Blonde Ale",
        "hop" => "Styrian Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt",
        "ibu" => 20,
        "alcohol" => 6.6,
        "blg" => 14.5
    ],
    "Leffe Brune" => [
        "brand" => "Leffe",
        "type" => "Brune",
        "style" => "Abbey Brown Ale",
        "hop" => "Styrian Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Caramel Malt",
        "ibu" => 20,
        "alcohol" => 6.5,
        "blg" => 14
    ],
    "Leffe Ruby" => [
        "brand" => "Leffe",
        "type" => "Rousse",
        "style" => "Abbey Amber Ale",
        "hop" => "Styrian Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Caramel Malt",
        "ibu" => 15,
        "alcohol" => 5.0,
        "blg" => 12
    ],
    "Leffe Rituel 9°" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "Abbey Tripel",
        "hop" => "Styrian Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt",
        "ibu" => 20,
        "alcohol" => 9.0,
        "blg" => 17
    ],
    "Leffe Royale Cascade IPA" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "IPA",
        "hop" => "Cascade",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt",
        "ibu" => 35,
        "alcohol" => 7.5,
        "blg" => 15
    ],
    "Leffe Royale Whitbread Golding" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "Golden Ale",
        "hop" => "Whitbread Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt",
        "ibu" => 22,
        "alcohol" => 7.5,
        "blg" => 15
    ],
    "Leffe Royale Mount Hood" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "Golden Ale",
        "hop" => "Mount Hood",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt",
        "ibu" => 22,
        "alcohol" => 7.5,
        "blg" => 15
    ],
    "Leffe Blonde Nectar" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "Honey Ale",
        "hop" => "Styrian Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt, Honey",
        "ibu" => 20,
        "alcohol" => 6.6,
        "blg" => 14.5
    ],
    "Leffe Blonde Eclat" => [
        "brand" => "Leffe",
        "type" => "Blonde",
        "style" => "Light Ale",
        "hop" => "Styrian Golding",
        "yeast" => "Abbey Ale",
        "malts" => "Pilsner Malt, Pale Malt",
        "ibu" => 10,
        "alcohol" => 6.6,
        "blg" => 12
    ],
    "Leffe Blond 0.0%" => [
        "brand" => "Leffe",
        "type" => "Autres",
        "style" => "Sans Alcool",
        "hop" => "Non applicable",
        "yeast" => "Non applicable",
        "malts" => "Non applicable",
        "ibu" => 0,
        "alcohol" => 0.0,
        "blg" => 0
    ],

    // Samuel Adams
    "Samuel Adams Boston Lager" => [
        "brand" => "Samuel Adams",
        "type" => "Blonde",
        "style" => "Vienna Lager",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Two-row Pale Malt, Caramel Malt",
        "ibu" => 30,
        "alcohol" => 4.9,
        "blg" => 12
    ],
    "Samuel Adams Winter Lager" => [
        "brand" => "Samuel Adams",
        "type" => "Brune",
        "style" => "Bock",
        "hop" => "Tettnang Tettnanger, Hallertau Mittelfrüh",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Two-row Pale Malt, Munich Malt, Caramel Malt",
        "ibu" => 22,
        "alcohol" => 5.6,
        "blg" => 14
    ],
    "Samuel Adams Summer Ale" => [
        "brand" => "Samuel Adams",
        "type" => "Blonde",
        "style" => "American Pale Wheat Ale",
        "hop" => "Cascade, Hallertau Mittelfrüh",
        "yeast" => "Top-fermenting Ale",
        "malts" => "Two-row Pale Malt, Wheat Malt",
        "ibu" => 18,
        "alcohol" => 5.3,
        "blg" => 11
    ],
    "Samuel Adams Octoberfest" => [
        "brand" => "Samuel Adams",
        "type" => "Rousse",
        "style" => "Märzen",
        "hop" => "Tettnang Tettnanger, Hallertau Mittelfrüh",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Two-row Pale Malt, Munich Malt, Caramel Malt",
        "ibu" => 16,
        "alcohol" => 5.3,
        "blg" => 13
    ],
    "Samuel Adams Rebel IPA" => [
        "brand" => "Samuel Adams",
        "type" => "Blonde",
        "style" => "American IPA",
        "hop" => "Citra, Simcoe, Cascade, Chinook, Centennial",
        "yeast" => "Top-fermenting Ale",
        "malts" => "Two-row Pale Malt, Caramel Malt",
        "ibu" => 45,
        "alcohol" => 6.5,
        "blg" => 14
    ],
    "Samuel Adams Cherry Wheat" => [
        "brand" => "Samuel Adams",
        "type" => "Blonde",
        "style" => "Fruit Beer",
        "hop" => "Hallertau Mittelfrüh",
        "yeast" => "Top-fermenting Ale",
        "malts" => "Two-row Pale Malt, White Wheat Malt",
        "ibu" => 5,
        "alcohol" => 5.3,
        "blg" => 11
    ],
    "Samuel Adams New England IPA" => [
        "brand" => "Samuel Adams",
        "type" => "Blonde",
        "style" => "New England IPA",
        "hop" => "Citra, Mosaic, Cascade",
        "yeast" => "Top-fermenting Ale",
        "malts" => "Two-row Pale Malt, White Wheat Malt",
        "ibu" => 35,
        "alcohol" => 6.8,
        "blg" => 14
    ],
    "Samuel Adams Cold Snap" => [
        "brand" => "Samuel Adams",
        "type" => "Blonde",
        "style" => "Witbier",
        "hop" => "Spalt Spalter, Hallertau Mittelfrüh",
        "yeast" => "Top-fermenting Ale",
        "malts" => "Two-row Pale Malt, Wheat Malt",
        "ibu" => 10,
        "alcohol" => 5.3,
        "blg" => 12
    ],
    "Samuel Adams Cream Stout" => [
        "brand" => "Samuel Adams",
        "type" => "Brune",
        "style" => "Sweet Stout",
        "hop" => "East Kent Goldings",
        "yeast" => "Top-fermenting Ale",
        "malts" => "Two-row Pale Malt, Caramel Malt, Chocolate Malt",
        "ibu" => 28,
        "alcohol" => 4.9,
        "blg" => 13
    ],

    // Carlsberg
    "Carlsberg Pilsner" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Saaz, Tettnang",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 4.8,
        "blg" => 12
    ],
    "Carlsberg Elephant" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "Strong Lager",
        "hop" => "N/A",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 7.2,
        "blg" => 15
    ],
    "Carlsberg Nordic" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "European Pale Lager",
        "hop" => "Tettnang, Herkules",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 25,
        "alcohol" => 5.0,
        "blg" => 11
    ],
    "Carlsberg 1883" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Saaz, Tettnang",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 35,
        "alcohol" => 4.8,
        "blg" => 12
    ],
    "Carlsberg Smooth Draught" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "Smooth Lager",
        "hop" => "Saaz, Tettnang",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 4.8,
        "blg" => 10
    ],
    "Carlsberg Tuborg" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "European Pale Lager",
        "hop" => "Saaz",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.6,
        "blg" => 11
    ],
    "Carlsberg 900" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Saaz, Tettnang",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 30,
        "alcohol" => 5.5,
        "blg" => 12
    ],
    "Carlsberg Jacobsen Dark Lager" => [
        "brand" => "Carlsberg",
        "type" => "Brune",
        "style" => "Munich Dunkel",
        "hop" => "Perle, Tettnang",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Munich Malt, Caramel Malt, Chocolate Malt",
        "ibu" => 25,
        "alcohol" => 5.8,
        "blg" => 14
    ],
    "Carlsberg Special Brew" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "Malt Liquor",
        "hop" => "N/A",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 25,
        "alcohol" => 7.5,
        "blg" => 15
    ],
    "Carlsberg Lager Beer" => [
        "brand" => "Carlsberg",
        "type" => "Blonde",
        "style" => "European Pale Lager",
        "hop" => "Saaz",
        "yeast" => "Bottom-fermenting Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 20,
        "alcohol" => 5.0,
        "blg" => 11
    ],

    // Modelo
    "Modelo Especial" => [
        "brand" => "Modelo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Magnum",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.4,
        "blg" => 12
    ],
    "Modelo Negra" => [
        "brand" => "Modelo",
        "type" => "Brune",
        "style" => "Munich Dunkel Lager",
        "hop" => "Magnum, Hersbrucker",
        "yeast" => "Lager",
        "malts" => "Dark Munich Malt",
        "ibu" => 25,
        "alcohol" => 5.4,
        "blg" => 14
    ],
    "Modelo Chelada" => [
        "brand" => "Modelo",
        "type" => "Autres",
        "style" => "Mixed Drink",
        "hop" => "Not Applicable",
        "yeast" => "Not Applicable",
        "malts" => "Not Applicable",
        "ibu" => 10,
        "alcohol" => 3.5,
        "blg" => 10
    ],
    "Modelo Chelada Tamarindo Picante" => [
        "brand" => "Modelo",
        "type" => "Autres",
        "style" => "Mixed Drink",
        "hop" => "Not Applicable",
        "yeast" => "Not Applicable",
        "malts" => "Not Applicable",
        "ibu" => 10,
        "alcohol" => 3.5,
        "blg" => 10
    ],
    "Modelo Chelada Limón y Sal" => [
        "brand" => "Modelo",
        "type" => "Autres",
        "style" => "Mixed Drink",
        "hop" => "Not Applicable",
        "yeast" => "Not Applicable",
        "malts" => "Not Applicable",
        "ibu" => 10,
        "alcohol" => 3.5,
        "blg" => 10
    ],
    "Modelo Chelada Mango y Chile" => [
        "brand" => "Modelo",
        "type" => "Autres",
        "style" => "Mixed Drink",
        "hop" => "Not Applicable",
        "yeast" => "Not Applicable",
        "malts" => "Not Applicable",
        "ibu" => 10,
        "alcohol" => 3.5,
        "blg" => 10
    ],
    "Modelo Negra 0.0%" => [
        "brand" => "Modelo",
        "type" => "Autres",
        "style" => "Non-Alcoholic",
        "hop" => "Magnum, Hersbrucker",
        "yeast" => "Lager",
        "malts" => "Dark Munich Malt",
        "ibu" => 20,
        "alcohol" => 0.0,
        "blg" => 8
    ],
    "Modelo Especial Cans" => [
        "brand" => "Modelo",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Magnum",
        "yeast" => "Ale",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 4.4,
        "blg" => 12
    ],
    "Modelo Negra Cans" => [
        "brand" => "Modelo",
        "type" => "Brune",
        "style" => "Munich Dunkel Lager",
        "hop" => "Magnum, Hersbrucker",
        "yeast" => "Lager",
        "malts" => "Dark Munich Malt",
        "ibu" => 25,
        "alcohol" => 5.4,
        "blg" => 14
    ],
    "Modelo Chelada Can" => [
        "brand" => "Modelo",
        "type" => "Autres",
        "style" => "Mixed Drink",
        "hop" => "Not Applicable",
        "yeast" => "Not Applicable",
        "malts" => "Not Applicable",
        "ibu" => 10,
        "alcohol" => 3.5,
        "blg" => 10
    ],

    // Newcastle Brown Ale
    "Newcastle Brown Ale" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Brune",
        "style" => "Brown Ale",
        "hop" => "Fuggle, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt, Chocolate Malt",
        "ibu" => 30,
        "alcohol" => 4.7,
        "blg" => 11
    ],
    "Newcastle Brown Ale Light" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Brune",
        "style" => "Light Brown Ale",
        "hop" => "Fuggle, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt",
        "ibu" => 20,
        "alcohol" => 3.6,
        "blg" => 8
    ],
    "Newcastle Founders' Ale" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Blonde",
        "style" => "English Pale Ale",
        "hop" => "Fuggle, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt",
        "ibu" => 28,
        "alcohol" => 4.8,
        "blg" => 11
    ],
    "Newcastle Bombshell" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Blonde",
        "style" => "Blonde Ale",
        "hop" => "Cascade, Summit",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt",
        "ibu" => 30,
        "alcohol" => 4.4,
        "blg" => 10
    ],
    "Newcastle British Pale Ale" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Blonde",
        "style" => "English Pale Ale",
        "hop" => "Fuggle, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt",
        "ibu" => 32,
        "alcohol" => 4.5,
        "blg" => 10
    ],
    "Newcastle Summer Ale" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Blonde",
        "style" => "Summer Ale",
        "hop" => "Cascade, Styrian Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Wheat Malt",
        "ibu" => 20,
        "alcohol" => 4.4,
        "blg" => 9
    ],
    "Newcastle Session IPA" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Blonde",
        "style" => "Session IPA",
        "hop" => "Cascade, Citra, Simcoe",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Munich Malt",
        "ibu" => 35,
        "alcohol" => 4.3,
        "blg" => 9
    ],
    "Newcastle Werewolf" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Brune",
        "style" => "Werewolf Ale",
        "hop" => "Fuggle, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt",
        "ibu" => 30,
        "alcohol" => 4.5,
        "blg" => 10
    ],
    "Newcastle Cabbie" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Brune",
        "style" => "Porter",
        "hop" => "Fuggle, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt, Chocolate Malt",
        "ibu" => 30,
        "alcohol" => 4.2,
        "blg" => 10
    ],
    "Newcastle Alchemy Ale" => [
        "brand" => "Newcastle Brown Ale",
        "type" => "Blonde",
        "style" => "Blonde Ale",
        "hop" => "Cascade, Goldings",
        "yeast" => "Ale",
        "malts" => "Pale Malt, Crystal Malt",
        "ibu" => 40,
        "alcohol" => 4.8,
        "blg" => 11
    ],

    // Dos Equis
    "Dos Equis Lager" => [
        "brand" => "Dos Equis",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 12,
        "alcohol" => 4.2,
        "blg" => 9
    ],
    "Dos Equis Ambar" => [
        "brand" => "Dos Equis",
        "type" => "Ambrée",
        "style" => "Vienna Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Vienna Malt, Munich Malt, Caramel Malt",
        "ibu" => 18,
        "alcohol" => 4.7,
        "blg" => 11
    ],
    "Dos Equis Lime & Salt" => [
        "brand" => "Dos Equis",
        "type" => "Blonde",
        "style" => "Flavored Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 12,
        "alcohol" => 4.2,
        "blg" => 9
    ],
    "Dos Equis Dos-a-Rita" => [
        "brand" => "Dos Equis",
        "type" => "Autres",
        "style" => "Margarita Beer Cocktail",
        "hop" => "N/A",
        "yeast" => "N/A",
        "malts" => "N/A",
        "ibu" => 9,
        "alcohol" => 8.0,
        "blg" => 12
    ],
    "Dos Equis Ranch Water" => [
        "brand" => "Dos Equis",
        "type" => "Autres",
        "style" => "Seltzer",
        "hop" => "N/A",
        "yeast" => "N/A",
        "malts" => "N/A",
        "ibu" => 0,
        "alcohol" => 4.5,
        "blg" => 4
    ],
    "Dos Equis Azul" => [
        "brand" => "Dos Equis",
        "type" => "Blonde",
        "style" => "Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 12,
        "alcohol" => 4.2,
        "blg" => 9
    ],
    "Dos Equis Verano" => [
        "brand" => "Dos Equis",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 10,
        "alcohol" => 4.1,
        "blg" => 8
    ],
    "Dos Equis Invierno" => [
        "brand" => "Dos Equis",
        "type" => "Brune",
        "style" => "Winter Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Vienna Malt, Chocolate Malt",
        "ibu" => 20,
        "alcohol" => 5.5,
        "blg" => 12
    ],
    "Dos Equis Light" => [
        "brand" => "Dos Equis",
        "type" => "Blonde",
        "style" => "Light Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 10,
        "alcohol" => 4.2,
        "blg" => 8
    ],
    "Dos Equis Tecate Titanium" => [
        "brand" => "Dos Equis",
        "type" => "Blonde",
        "style" => "Strong Lager",
        "hop" => "Saaz, Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 18,
        "alcohol" => 7.5,
        "blg" => 13
    ],

    // Warsteiner
    "Warsteiner Premium Verum" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 4.8,
        "blg" => 11.4
    ],
    "Warsteiner Premium Fresh" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 4.8,
        "blg" => 11.4
    ],
    "Warsteiner Winter" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "Winter Lager",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Caramel Malt",
        "ibu" => 20,
        "alcohol" => 5.6,
        "blg" => 12.5
    ],
    "Warsteiner Pilsener" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 4.8,
        "blg" => 11.4
    ],
    "Warsteiner Oktoberfest" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "Festbier",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt, Munich Malt",
        "ibu" => 20,
        "alcohol" => 5.9,
        "blg" => 13
    ],
    "Warsteiner Grapefruit Radler" => [
        "brand" => "Warsteiner",
        "type" => "Autres",
        "style" => "Radler",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 8,
        "alcohol" => 2.5,
        "blg" => 7
    ],
    "Warsteiner Alkoholfrei" => [
        "brand" => "Warsteiner",
        "type" => "Autres",
        "style" => "Non-Alcoholic",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 18,
        "alcohol" => 0.0,
        "blg" => 8
    ],
    "Warsteiner Lemon" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "Flavored Lager",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 2.5,
        "blg" => 7
    ],
    "Warsteiner Herb" => [
        "brand" => "Warsteiner",
        "type" => "Blonde",
        "style" => "German Pilsner",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Pilsner Malt",
        "ibu" => 24,
        "alcohol" => 4.8,
        "blg" => 11.4
    ],
    "Warsteiner Dunkel" => [
        "brand" => "Warsteiner",
        "type" => "Brune",
        "style" => "Munich Dunkel",
        "hop" => "Hallertau Tradition, Hallertau Perle",
        "yeast" => "Lager",
        "malts" => "Munich Malt, Pilsner Malt, Caramel Malt",
        "ibu" => 22,
        "alcohol" => 4.8,
        "blg" => 12
    ],

    ];


    /**
     * Get the value of beers
     */ 
    public function getBeers()
    {
        return $this->beers;
    }
}