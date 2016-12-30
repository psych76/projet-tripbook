<?php

use Illuminate\Database\Seeder;

class ParcoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
         DB::table('parcours')->insert(
            [
                'nom_parcours' => 'La Ville Neuve',
                'longueur_parcours' => '4', 
                'description_parcours' => "La Ville Neuve qui se trouve dans l’écoquartier de Nancy Grand Cœur, est toute proche de la gare et de l’ensemble 18e s. UNESCO. S’y concentre l’essentiel de l’activité commerçante de centre ville, avec les axes Saint Jean Saint Dizier qui se croisent au « Point Central ». Cette partie de Nancy fut construite par le duc Charles III à la fin du 16e s. pour répondre au développement démesuré des faubourgs de la ville médiévale. La construction de cette ville nouvelle prendra 30 ans. Les rues obéissent à un tracé orthogonal – typique de la Renaissance et répondent aux nouvelles exigences de sécurité et de salubrité. La cité quadruple en superficie et devient un modèle dans l’Europe de l'époque. Dès l’origine, elle constitue un centre commerçant très actif autour de la place de l’hôtel de ville (à l'emplacement de l'actuel marché central implanté en 1850). A la fin du 19e s. et au début du 20e s. , les grands magasins s’installent à proximité. Les commerces florissants et les banques construisent des batiments audacieux, c’est dire dans le style nouveau Ecole de Nancy. Les axes Saint Jean Saint Dizier concentrent depuis lors la plus grande partie de l’activité financière et commerciale de Nancy ! Dans le quartier des Chanoines, derrière la Primatiale (18e s.), de hauts murs cachent de beaux hôtels particuliers et souvent des jardins. Un peu à l’écart des grands axes, il faut faire un tour dans la petite rue de la Primatiale ou dans la rue Saint Julien qui sont animées en permanence : terrasses, restaurants, bars,… Il reste peu d’édifices Renaissance visibles dans la Ville Neuve hormis les porte Saint Nicolas au sud et saint Georges à l’est (fermant respectivement la rue saint Dizier et la rue saint Georges dans le prolongement de la rue saint Jean). Le promeneur attentif trouvera cependant dans la Ville Neuve de nombreux indices architecturaux ou décoratifs de la Renaissance au 18e s. : cours, statues, ferronneries, escaliers, mascarons, frontons,…",
                
                
            ]);
         DB::table('parcours')->insert(
            [
                'nom_parcours' => 'Art Nouveau',
                'longueur_parcours' => '4', 
                'description_parcours' => "Le -ou les – style(s) Art Nouveau sont apparus et se sont développés un peu partout dans le monde à partir des années 1880, formant des écoles voisines, sinon sœurs. Le mouvement Art nouveau Ecole de Nancy est né lors de l’annexion de l’Alsace et de la Moselle par le Kaiser en 1871. Nancy, ville frontière française, accueille une grande partie de l’intelligentsia qui refuse l’annexion. De ces conditions particulières et de la présence ici d’artistes, d’industriels, d’entrepreneurs, naît l’Ecole de Nancy. Le mouvement s’affaiblit à la mort de Emile Gallé en 1904 et on considère que la Grande Guerre en marque la fin. Avec l’entre deux guerres, se développe ici le style Art Déco (assez tardivement si on compare avec des pays non touchés par le conflit 1914-1918). Le lotissement de quartiers Ecole de Nancy interrompus par la guerre en 14, reprend dans les années 20. C’est ainsi que dans des quartiers comme Saurupt ou celui de Nancy Thermal, voisinent villas art nouveau et villas art déco. Visitez, étudiez et très vite vous « aurez l’œil » pour faire la différence entre les deux époques ! ",
            ]);

        DB::table('parcours')->insert(
            [
                'nom_parcours' => 'Renaissance et XVIIème siècle',
                'longueur_parcours' => '3', 
                'description_parcours' => "En Lorraine, la Renaissance débute en 1477. Le Duc René II, vainqueur de la bataille de Nancy souhaite effacer les traces laissées par la guerre et offrir à sa ville de nouvelles perspectives de développement et de rayonnement. Le projet d’urbanisme de René II relève le défi, prévoit le redéveloppement de la ville par la modernisation des fortifications, mais aussi du château des Ducs de Lorraine - qui devient en 1502 le Palais Ducal -, et par la création de franchises fiscales favorisant l’implantation de commerces. Grâce à ces mesures, Nancy connaît, entre 1477 et 1550, un fort essor démographique. Les capacités d’accueil de la ville médiévale (actuelle Ville Vieille) arrivent à saturation. La population s’installe alors à l’extérieur de la cité, principalement au sud, sur le faubourg Saint-Nicolas et au nord, dans un village nommé Saint-Dizier (actuel faubourg des 3 Maisons). En 1552, Chrétienne de Danemark, régente et mère de Charles III, lance l’aménagement d’un nouvel espace urbain  qui deviendra la place de la Carrière Pour des raisons d’étroitesse, ce lieu destiné à accueillir défilés et carrousels est pensé hors de la ville médiévale, côté est. Toutefois, la question de sa fortification se pose rapidement. La régente demande alors l’aide d’ingénieurs italiens qui préconisent un nouveau type de protection militaire : le front bastionné. Le conseil qu’ils prodiguent est simple. Il faut reconstruire entièrement les fortifications de Nancy en incluant la nouvelle place. Avalisée par le pouvoir, cette recommandation marque le début de travaux qui vont radicalement modifier le visage de Nancy. Les travaux débutent par l’élévation de trois bastions (ouvrages pentagonaux) : les bastions de Vaudémont (actuel parking Stanislas), d’Haussonville (actuel Musée des Beaux-Arts) et du Danemark (au nord ouest de la ville sous l’actuel Cours Léopold). Mais en 1559, alors que Charles III, prend la tête du duché, le nombre d’habitants vivant à l’extérieur de la ville médiévale est aussi important qu’intra-muros. Cette situation provoque de sérieux problèmes d’hygiène et sécuritaires. Par ailleurs, les progrès importants réalisés par l’artillerie de l’époque ont rendu les défenses de la ville obsolètes. Cette question militaire est au centre des préoccupations de Charles III qui décide de revoir complètement la défense de la ville. Il craint que l’indépendance de Nancy, lieu de réunion de la Ligue Catholique,  soit menacée par les guerres de religion. Charles III décide donc d’imaginer une Ville Neuve au sud de la ville médiévale qui sera protégée dans de nouvelles fortifications englobant également la Ville Veille.",
            ]);

        DB::table('parcours')->insert(
            [
                'nom_parcours' => 'Ville Vieille',
                'longueur_parcours' => '2', 
                'description_parcours' => "La Ville Vieille, médiévale et Renaissance, vous fait remonter le temps. Ce quartier est immédiatement reconnaissable sur le plan de la ville par son dessin serré et ses lignes courbes, entre la Place Carnot à l’ouest, le parc de la  Pépinière à l’est et les quartiers 18e s. au sud. Composée d’un entrelacs de ruelles, de petites places, de rues étroites bordées de maisons toutes en hauteur avec frontons sculptés et fenêtres à meneaux, la Ville Vieille s’enroule autour du Palais Ducal, remarquable édifice renaissance construit par René II, vainqueur de Charles le Téméraire en 1477. Les rues sont pavées, les boutiques succèdent aux petits cafés, leurs tables en terrasse sont autant d’invitation à prendre son temps et à profiter des lieux ! L’imposante Porte de la Craffe (14e s.) ferme la Grand Rue : bordée de restaurants, d’artisans, d’épiceries et de commerces de proximité, elle est l’épine dorsale de la Ville Vieille. Ne vous y trompez pas, la ville vielle n’est pas un site « touristique » mais bien un quartier vivant, mêlant toutes les catégories sociales,  et très apprécié des étudiants. Avec son marché dominical, ses marchés aux puces, ses commerces et ses terrasses de café,  le quartier vit en permanence, tous les jours ! Visitez le musée lorrain pour découvrir la Lorraine, son histoire et son fabuleux patrimoine artistique (Notamment les salles Callot et Georges de la Tour). Il occupe les batiments du Palais Ducal, le couvent et l’Eglise des Cordeliers qui possède une chapelle octogonale d’inspiration renaissance florentine, tombeau des ducs de Lorraine",
            ]);

        DB::table('parcours')->insert(
            [
                'nom_parcours' => "Sur l'agglomération",
                'longueur_parcours' => '29', 
                'description_parcours' => "Sur le territoire du Grand Nancy, quelques très beaux anciens villages attestent de traditions vinicoles ou arboricoles : Vandoeuvre-les-Nancy, Villers-les-Nancy, Ludres, Houdemont, Dommartemont, Laxou, Seichamps …. On trouve dans l’agglomération de grands sites remarquables comme la Chartreuse de Bosserville à Art sur Meurthe, le Château de Fléville ou le Domaine de Montaigu à Jarville la Malgrange, des édifices religieux, des fontaines et lavoirs, de charmantes villas à Saint Max, une  folie mauresque à Malzéville - la Douëra-, des sites d’habitat très ancien comme, par exemple,  la butte sainte Geneviève à Essey les Nancy, les berges et les îles sur la Meurthe à Tomblaine…. Chaque commune de l’agglomération recèle des trésors ; un coin d’histoire, un château, des jardins, des anecdotes, de bonnes tables, un panorama à couper le souffle mais aussi de grandes zones commerciales pour le shopping et le ravitaillement, tout est à découvrir selon son temps et ses goûts ! ",
            ]);
        
    }
}
