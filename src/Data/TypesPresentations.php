<?php 
namespace App\Data;

class TypesPresentations {

   private $typesPresentations = [
        "Ambrée" => "Les bières ambrées sont caractérisées par leur couleur cuivrée et leur goût légèrement caramélisé. Elles offrent souvent une combinaison subtile de saveurs maltées et houblonnées.",
        
        "Blonde" => "Les bières blondes sont légères et rafraîchissantes, avec un équilibre entre le malt et le houblon. Elles sont souvent appréciées pour leur simplicité et leur buvabilité.",
        
        "Brune" => "Les bières brunes ont une couleur sombre et des arômes riches de chocolat, de café et de fruits secs. Elles sont souvent plus complexes en bouche, avec des notes torréfiées et sucrées.",
        
        "Blanche" => "Les bières blanches, ou witbiers, sont des bières légères et souvent voilées, avec des notes d'agrumes et d'épices. Elles sont parfaites pour les journées chaudes grâce à leur fraîcheur.",
        
        "Rousse" => "Les bières rousses ont une teinte riche et une saveur équilibrée entre le malt et le houblon. Elles offrent une alternative intéressante entre les bières blondes et les bières brunes.",
        
        "Noire" => "Les bières noires, comme les stouts et les porters, sont caractérisées par leurs saveurs intenses de café, de chocolat et de malt torréfié. Elles sont souvent crémeuses et pleines en bouche.",
        
        "Saison" => "Les bières de type Saison sont des bières de fermentation haute, traditionnellement brassées pendant les mois d'hiver pour être consommées pendant l'été. Elles sont légères, épicées et rafraîchissantes.",
        
        "Autres" => "La catégorie 'Autres' englobe une variété de styles de bières qui ne rentrent pas dans les catégories principales. Cela peut inclure des bières expérimentales, des bières fruitées, ou des bières de spécialité."
   ];

   /**
    * Get the value of typesPresentations
    */ 
   public function getTypesPresentations()
   {
      return $this->typesPresentations;
   }
}
?>

