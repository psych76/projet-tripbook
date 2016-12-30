<?php

use Illuminate\Database\Seeder;

class LieuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


/*
* Lieux pour le parcours d'Art Nouveau
*
*/
        DB::table('lieux')->insert(
            [
                'nom_lieu' => 'La collection Daum',
                'description_lieu' => "Daum et Nancy sont deux noms indissociables qui évoquent l’épopée d’une des plus grandes cristalleries françaises, créée à la fin du XIXème siècle.  La notoriété de DAUM, à l’origine, est liée au mouvement de l’Ecole de Nancy, fondée dans les années 1900. Longévité et créativité sont les caractéristiques de cette entreprise qui a su, au fil du temps, faire évoluer sa production, notamment en pâte de cristal, et qui a contribué largement à sa renommée à travers le monde. La Collection Daum du Musée des Beaux-Arts de Nancy : Riche de plus de 600 pièces, la collection Daum du Musée des Beaux-Arts de Nancy est considérée, aussi bien par la communauté scientifique que par le public, comme la collection de référence. En effet, elle n'a d'équivalent dans aucun musée français ou étranger. Cet ensemble, d'une qualité esthétique et historique de premier plan, permet de présenter l'histoire de la manufacture depuis ses débuts dans les années 1880 jusqu'aux créations des années 1990. La Manufacture DAUM à Nancy, la boutique et la production de Vannes le Châtel : Une des caractéristiques remarquables de la manufacture Daum est sa longévité associée à une renommée jamais démentie. A côté de la création de pièces exceptionnelles, l'amélioration de la qualité de la production courante et le développement des services de table constituent aujourd'hui encore l'un des points forts de l'entreprise. Dans les locaux d’origine des cristalleries au centre de Nancy, une équipe de créateurs dessine et teste des prototypes ; l’atelier produit les pièces les plus rares ; dans l’unique magasin d’usine Daum, on trouve des objets de fins de série ou présentant de très légers défauts (souvent invisibles à un œil profane) à des prix intéressants. ",
            ]);

        DB::table('lieux')->insert(
            [
                'nom_lieu' => 'La Villa Majorelle',
                'description_lieu' => "Fleuron de l’architecture Art Nouveau à Nancy, la Villa Majorelle est tout à fait étonnante : C’est d’abord une masse imposante qui présente toutes des caractéristiques structurelles Ecole de Nancy , comme une sorte de gracieuse encyclopédie du vocabulaire architectural Art Nouveau. Elle est remarquable aussi parce que construite par l’architecte Henri Sauvage, pour (et avec la contribution conséquente) d’un des maîtres de l’Ecole de Nancy, Louis Majorelle. Le périmètre du jardin actuel est beaucoup plus modeste que le jardin initial de la famille Majorelle. Le grès flammé est à la mode dans les années 1900. On le trouve ici sous forme de carreaux, de frises, de couronnements de cheminées et surtout dans l’imposante rampe de la terrasse à décor végétal réalisée par le céramiste Alexandre Bigot (1862-1927). Les éléments de ferronnerie à motif de monnaie du pape sont réalisés dans les ateliers Majorelle : marquise et porte d’entrée, supports des balcons, grilles de fenêtres, portail d’entrée ou encore chéneaux et gouttières. Le bois enfin, apporte sa couleur et sa chaleur à l’élévation. La villa domine ce quartier résidentiel tranquille, à l’ombre de l’abside du Sacré Cœur. Elle dépend du musée de l’Ecole de Nancy, tout proche, et abrite les bureaux de l’antenne nancéienne du réseau international des villes art nouveau : le Réseau Art Nouveau Network. Elle se visite le week-end sur réservation auprès du service des publics les samedis et dimanches à 14h30 et 15h45 dans le cadre de visites guidées. C’est un monument nancéien à ne rater sous aucun prétexte qui a reçu le label 'Maison des Illustres' en 2012. ",
            ]);

        DB::table('lieux')->insert(
            [
                'nom_lieu' => "Le Musée de l'école de Nancy",
                'description_lieu' => "À l’approche du XXème siècle et sous l’impulsion décisive de nombreux artistes, en particulier d’Emile Gallé, l’École de Nancy connaît un développement exceptionnel. Verrerie, mobilier, vitrail et céramique participent à ce mouvement de rénovation. Situé dans la propriété d’Eugène Corbin, acquise par la ville dans les années 1951-1952, le Musée de l’École de Nancy est installé dans un cadre architectural contemporain des œuvres qu’il présente. Malgré l’urbanisation du quartier, le jardin subsiste en grande partie et sa réhabilitation en 1999 permet de restituer les ambiances végétales du début du siècle.",
            ]);
/*
* Lieux pour le parcours Renaissance et 17e siècle
*
*/

        

        DB::table('lieux')->insert(
            [
                'nom_lieu' => "Porte Saint-Nicolas",
                'description_lieu' => "Créée à la Renaissance (de 1603 à 1608), lors de la construction de la Ville-Neuve, la porte Saint-Nicolas est située sur la route menant à Saint-Nicolas-de-Port (d’où son nom). Véritable symbole pour le pouvoir ducal, c’est par cette porte que les ducs faisaient leur entrée dans la capitale à partir du XVIe siècle.",
            ]);

		DB::table('lieux')->insert(
            [
                'nom_lieu' => "Porte Saint-Georges",
                'description_lieu' => "Construite entre 1606 et 1619, la porte Saint-Georges fait partie des plus beaux monuments nancéiens remontant à la Renaissance. Pourtant, elle a bien failli être détruite : En 1878, le conseil municipal décide de démolir la porte afin de faciliter le passage du tramway. Le projet souleva de vives protestations. Finalement, en 1879, la société d’archéologie lorraine, soutenue par Victor Hugo et Emile Gallé, sauvèrent la porte en la faisant classer Monument Historique.",
            ]);
		DB::table('lieux')->insert(
            [
                'nom_lieu' => "Palais Ducal",
                'description_lieu' => "Edifié au XVIe siècle, il fut tout d’abord la résidence des ducs de Lorraine. Délaissé au XVIIIe siècle par Léopold, qui lui préféra Lunéville, il devint le Musée Lorrain en 1848. Sa remarquable porterie, inspirée de celle du château de Blois, mêle de façon élégante l’art gothique et la Renaissance italienne. ",
            ]);
		DB::table('lieux')->insert(
            [
                'nom_lieu' => "Eglise des Cordeliers",
                'description_lieu' => "Elle doit son nom à l’ordre des franciscains et fut édifiée au XVe siècle, par  René II, au lendemain de la Bataille de Nancy. « Saint-Denis » des ducs de Lorraine, elle conserve quelques tombeaux remarquables. Sa chapelle, ronde et coiffée d’un superbe octogone à lanternon, est inspirée de celle des Médicis de Florence. La dynastie des Habsbourg Lorraine reste toujours très attachée à la chapelle funéraire de ses aïeux.",
            ]);
		DB::table('lieux')->insert(
            [
                'nom_lieu' => "Porte de la Craffe",
                'description_lieu' => "Elément de fortifications le plus ancien de Nancy, elle fut édifiée au XIVe siècle et servit de prison. A la fin de la Renaissance, elle fut doublée par la porte Notre-Dame, visible à l’arrière.",
            ]);
		DB::table('lieux')->insert(
            [
                'nom_lieu' => "Porte de la citadelle",
                'description_lieu' => "Le duc Charles III la fit édifier au XVIe siècle pour doubler et renforcer la défense de la ville. Elle était alors entourée de quatre bastions et séparée de la Porte de la Craffe par des fossés. ",
            ]);
		DB::table('lieux')->insert(
            [
                'nom_lieu' => "Hôtel d'Haussonville",
                'description_lieu' => "Du nom du curé bâtisseur de la Basilique Saint-Epvre, la rue Monseigneur Trouillet est bordée de très belles demeures, dont l’Hôtel d’Haussonville. Les balustrades sont de factures différentes : l’une gothique flamboyante et l’autre Renaissance. Très belle porte en trompe l’œil.",
            ]);
    }
}
