<?php

namespace App\DataFixtures;

class AppProvider
{

    private $brands = [
        "Guinness" => [
            'description' => "Fondée en 1759 à Dublin, Guinness est une marque emblématique connue pour sa stout noire aux saveurs de café et de chocolat. Elle est appréciée dans le monde entier et est souvent associée à la culture irlandaise.",
            'country' => "Irlande",
            'founded' => 1759
        ],
        "Heineken" => [
            'description' => "Originaire des Pays-Bas, Heineken est une marque de bière internationale très populaire. Elle est reconnue pour sa bière blonde légère et rafraîchissante.",
            'country' => "Pays-Bas",
            'founded' => 1864
        ],
        "Stella Artois" => [
            'description' => "Stella Artois est une marque belge de renom, produite depuis plus de 600 ans. Elle est célèbre pour sa bière blonde équilibrée, souvent servie dans des verres spéciaux en forme de calice.",
            'country' => "Belgique",
            'founded' => 1366
        ],
        "Budweiser" => [
            'description' => "Budweiser est une marque emblématique de bière américaine, produite depuis 1876. Elle est célèbre pour sa bière blonde douce et légère, facile à boire.",
            'country' => "États-Unis",
            'founded' => 1876
        ],
        "Corona" => [
            'description' => "Corona est une marque mexicaine très populaire, souvent servie avec une rondelle de citron. Elle est légère et rafraîchissante, parfaite pour les journées ensoleillées.",
            'country' => "Mexique",
            'founded' => 1925
        ],
        "Becks" => [
            'description' => "Becks est une marque allemande qui perpétue la tradition brassicole allemande depuis plus de 140 ans. Elle est connue pour son goût rafraîchissant et sa qualité constante.",
            'country' => "Allemagne",
            'founded' => 1873
        ],
        "Pilsner Urquell" => [
            'description' => "Pilsner Urquell est la première marque de bière Pilsner au monde, brassée en République tchèque depuis 1842. Elle est célèbre pour son goût houblonné et sa couleur dorée brillante.",
            'country' => "République tchèque",
            'founded' => 1842
        ],
        "Chimay" => [
            'description' => "Chimay est une marque trappiste belge renommée, brassée dans une abbaye depuis 1862. Elle est caractérisée par ses saveurs complexes et son processus de brassage artisanal.",
            'country' => "Belgique",
            'founded' => 1862
        ],
        "Hoegaarden" => [
            'description' => "Hoegaarden est une marque belge de bière blanche, brassée avec des ingrédients naturels et des épices. Elle est célèbre pour son goût rafraîchissant avec des notes d'agrumes et d'épices.",
            'country' => "Belgique",
            'founded' => 1445
        ],
        "Sapporo" => [
            'description' => "Sapporo est une marque japonaise qui combine les techniques de brassage allemandes avec les ingrédients japonais. Elle est reconnue pour sa qualité supérieure et sa saveur douce.",
            'country' => "Japon",
            'founded' => 1876
        ],
        "Tsingtao" => [
            'description' => "Tsingtao est une marque de bière chinoise brassée depuis 1903. Elle est légère et rafraîchissante avec une finale propre et nette, reflétant les influences allemandes de son brassage initial.",
            'country' => "Chine",
            'founded' => 1903
        ],
        "Asahi" => [
            'description' => "Asahi est une marque de bière japonaise qui se distingue par son goût rafraîchissant et sa clarté cristalline. Elle est brassée avec une attention particulière à la qualité et à la pureté.",
            'country' => "Japon",
            'founded' => 1889
        ],
        "Peroni" => [
            'description' => "Peroni est une marque italienne de bière légère et rafraîchissante, connue pour sa qualité constante et son arôme distinctif. Elle est parfaite pour accompagner les repas italiens.",
            'country' => "Italie",
            'founded' => 1846
        ],
        "Leffe" => [
            'description' => "Leffe est une marque belge brassée depuis 1240 par les moines de l'abbaye de Leffe. Elle est caractérisée par ses arômes riches et complexes et son caractère fruité.",
            'country' => "Belgique",
            'founded' => 1152
        ],
        "Samuel Adams" => [
            'description' => "Samuel Adams est une marque américaine de bière artisanale, connue pour ses saveurs audacieuses et son engagement envers l'innovation brassicole.",
            'country' => "États-Unis",
            'founded' => 1984
        ],
        "Carlsberg" => [
            'description' => "Carlsberg est une marque danoise produite depuis 1847. Elle est célèbre pour son goût équilibré et sa douceur, avec une amertume subtile.",
            'country' => "Danemark",
            'founded' => 1847
        ],
        "Modelo" => [
            'description' => "Modelo est une marque mexicaine brassée depuis 1925. Elle est légère et rafraîchissante, avec une saveur maltée douce et une finale propre.",
            'country' => "Mexique",
            'founded' => 1925
        ],
        "Newcastle Brown Ale" => [
            'description' => "Newcastle Brown Ale est une marque anglaise avec une riche histoire remontant à 1927. Elle est connue pour ses notes maltées et caramélisées distinctives.",
            'country' => "Royaume-Uni",
            'founded' => 1927
        ],
        "Dos Equis" => [
            'description' => "Dos Equis est une marque de bière mexicaine, célèbre pour sa campagne publicitaire 'L'homme le plus intéressant du monde' et son goût rafraîchissant.",
            'country' => "Mexique",
            'founded' => 1897
        ],
        "Warsteiner" => [
            'description' => "Warsteiner est une marque de bière allemande produite depuis 1753. Elle est reconnue pour sa qualité supérieure et son goût rafraîchissant, reflétant l'excellence du brassage allemand.",
            'country' => "Allemagne",
            'founded' => 1753
        ]
    ];
    

    private $brandsLogos = [
        "Guinness" => "https://asset.brandfetch.io/idD_6bs-HW/idcYYSuaaN.jpeg?updated=1701011086103",
        "Heineken" => "https://asset.brandfetch.io/id7FztrOO0/idtvMFoZg4.png?updated=1667562684192",
        "Stella Artois" => "https://asset.brandfetch.io/idfhqyCPPa/id6Yxn_1pB.jpeg?updated=1710238016770",
        "Budweiser" => "https://1000logos.net/wp-content/uploads/2016/10/Budweiser-Logo-500x281.png",
        "Corona" => "https://asset.brandfetch.io/idfNtg2ok4/idrnMXvAt5.png?updated=1681015471420",
        "Becks"=> "https://1000logos.net/wp-content/uploads/2022/07/Logo-Becks-500x281.png",
        "Pilsner Urquell" => "https://asset.brandfetch.io/idzHp74XNR/idXWhFVe8O.jpeg?updated=1703281319322",
        "Chimay" => "https://www.planete-biere.com/uploads/medium/chimay_20210820_0759.jpg",
        "Hoegaarden" => "https://asset.brandfetch.io/idrkyH3B_I/idIydStjMO.jpeg?updated=1669313212825",
        "Sapporo" => "https://asset.brandfetch.io/idir5LPwF5/iddk05TlMA.jpeg?updated=1707179071050",
        "Tsingtao" => "https://asset.brandfetch.io/idDFP6H9N9/idRHCeckSB.jpeg", 
        "Asahi" => "https://1000logos.net/wp-content/uploads/2021/05/Asahi-logo-500x281.png",
        "Peroni"=> "https://asset.brandfetch.io/idI7bIZX55/id6OGIsGkM.jpeg",
        "Leffe" => "https://asset.brandfetch.io/id7xdI8Qta/idPIP_K-gL.png",
        "Samuel Adams" => 'https://asset.brandfetch.io/idUzEZqeue/ide10knb_B.jpeg',
        "Carlsberg" => 'https://asset.brandfetch.io/idaJicLhTF/idaKoNtjXX.jpeg',
        "Modelo" => 'https://asset.brandfetch.io/idWw7NSe4i/idLw_VOBuP.png?updated=1699020517988',
        "Newcastle Brown Ale" => "https://logowik.com/content/uploads/images/newcastle-brown-ale7874.logowik.com.webp",
        "Dos Equis" => 'https://asset.brandfetch.io/idBQgSacAU/idMhPA1KPh.png',
        "Warsteiner" => 'https://asset.brandfetch.io/idYMyXIo1M/idmJ9wMuc5.png'
    ];


    private $types = [
        "Ambrée",
        "Blonde",
        "Brune",
        "Blanche",
        "Rousse",
        "Noire",
        "Saison",
        "Autres"
    ];


    public function getBrands()
    {
        return $this->brands;
    }
    
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Get the value of brandsLogos
     */ 
    public function getBrandsLogos()
    {
        return $this->brandsLogos;
    }
}