<?php

use Illuminate\Database\Seeder;
use \App\Color;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Color::exists()) {
            return;
        }

        Color::insert($this->getData());
    }

    protected function getData()
    {
        return [
            ["hex" => "#0048BA", "name" => "Absolute Zero"],
            ["hex" => "#4C2F27", "name" => "Acajou"],
            ["hex" => "#B0BF1A", "name" => "Acid green"],
            ["hex" => "#7CB9E8", "name" => "Aero"],
            ["hex" => "#C9FFE5", "name" => "Aero blue"],
            ["hex" => "#B284BE", "name" => "African violet"],
            ["hex" => "#5D8AA8", "name" => "Air Force blue (RAF)"],
            ["hex" => "#00308F", "name" => "Air Force blue (USAF)"],
            ["hex" => "#72A0C1", "name" => "Air superiority blue"],
            ["hex" => "#AF002A", "name" => "Alabama crimson"],
            ["hex" => "#F2F0E6", "name" => "Alabaster"],
            ["hex" => "#F0F8FF", "name" => "Alice blue"],
            ["hex" => "#E32636", "name" => "Alizarin crimson"],
            ["hex" => "#C46210", "name" => "Alloy orange"],
            ["hex" => "#EFDECD", "name" => "Almond"],
            ["hex" => "#D6D6D6", "name" => "Aluminum"],
            ["hex" => "#D2D9DB", "name" => "Aluminum foil"],
            ["hex" => "#E52B50", "name" => "Amaranth"],
            ["hex" => "#9F2B68", "name" => "Amaranth deep purple"],
            ["hex" => "#F19CBB", "name" => "Amaranth pink"],
            ["hex" => "#AB274F", "name" => "Amaranth purple"],
            ["hex" => "#D3212D", "name" => "Amaranth red"],
            ["hex" => "#3B7A57", "name" => "Amazon"],
            ["hex" => "#FFBF00", "name" => "Amber"],
            ["hex" => "#FF7E00", "name" => "Amber (SAE/ECE)"],
            ["hex" => "#3B3B6D", "name" => "American blue"],
            ["hex" => "#391802", "name" => "American bronze"],
            ["hex" => "#804040", "name" => "American brown"],
            ["hex" => "#D3AF37", "name" => "American gold"],
            ["hex" => "#34B334", "name" => "American green"],
            ["hex" => "#FF8B00", "name" => "American orange"],
            ["hex" => "#FF9899", "name" => "American pink"],
            ["hex" => "#431C53", "name" => "American purple"],
            ["hex" => "#B32134", "name" => "American red"],
            ["hex" => "#FF033E", "name" => "American rose"],
            ["hex" => "#CFCFCF", "name" => "American silver"],
            ["hex" => "#551B8C", "name" => "American violet"],
            ["hex" => "#F2B400", "name" => "American yellow"],
            ["hex" => "#9966CC", "name" => "Amethyst"],
            ["hex" => "#F2F3F4", "name" => "Anti-flash white"],
            ["hex" => "#CD9575", "name" => "Antique brass"],
            ["hex" => "#665D1E", "name" => "Antique bronze"],
            ["hex" => "#915C83", "name" => "Antique fuchsia"],
            ["hex" => "#841B2D", "name" => "Antique ruby"],
            ["hex" => "#FAEBD7", "name" => "Antique white"],
            ["hex" => "#008000", "name" => "Ao (English)"],
            ["hex" => "#66B447", "name" => "Apple"],
            ["hex" => "#8DB600", "name" => "Apple green"],
            ["hex" => "#FBCEB1", "name" => "Apricot"],
            ["hex" => "#00FFFF", "name" => "Aqua"],
            ["hex" => "#7FFFD4", "name" => "Aquamarine"],
            ["hex" => "#D0FF14", "name" => "Arctic lime"],
            ["hex" => "#C0C0C0", "name" => "Argent"],
            ["hex" => "#4B5320", "name" => "Army green"],
            ["hex" => "#8F9779", "name" => "Artichoke"],
            ["hex" => "#E9D66B", "name" => "Arylide yellow"],
            ["hex" => "#7DC242", "name" => "Asda Green"],
            ["hex" => "#32AD61", "name" => "Asda Green (2002)"],
            ["hex" => "#66C992", "name" => "Asda Green (1999)"],
            ["hex" => "#80C197", "name" => "Asda Green (1994)"],
            ["hex" => "#00DEA4", "name" => "Asda Green (1985)"],
            ["hex" => "#C86500", "name" => "Asda Orange"],
            ["hex" => "#CA7309", "name" => "Asda Orange (1968)"],
            ["hex" => "#B2BEB5", "name" => "Ash gray"],
            ["hex" => "#87A96B", "name" => "Asparagus"],
            ["hex" => "#003A6C", "name" => "undefined"],
            ["hex" => "#FF9966", "name" => "Atomic tangerine"],
            ["hex" => "#A52A2A", "name" => "Auburn"],
            ["hex" => "#FDEE00", "name" => "Aureolin"],
            ["hex" => "#6E7F80", "name" => "AuroMetalSaurus"],
            ["hex" => "#568203", "name" => "Avocado"],
            ["hex" => "#FF2052", "name" => "Awesome"],
            ["hex" => "#63775B", "name" => "Axolotl"],
            ["hex" => "#007FFF", "name" => "Azure"],
            ["hex" => "#F0FFFF", "name" => "Azure mist"],
            ["hex" => "#DBE9F4", "name" => "Azureish white"],
            ["hex" => "#89CFF0", "name" => "Baby blue"],
            ["hex" => "#A1CAF1", "name" => "Baby blue eyes"],
            ["hex" => "#F4C2C2", "name" => "Baby pink"],
            ["hex" => "#FEFEFA", "name" => "Baby powder"],
            ["hex" => "#FF91AF", "name" => "Baker-Miller pink"],
            ["hex" => "#21ABCD", "name" => "Ball blue"],
            ["hex" => "#FAE7B5", "name" => "Banana Mania"],
            ["hex" => "#FFE135", "name" => "Banana yellow"],
            ["hex" => "#006A4E", "name" => "Bangladesh green"],
            ["hex" => "#E85395", "name" => "Barbie Pink (1959-1975)"],
            ["hex" => "#D3419D", "name" => "Barbie Pink (1975-1990)"],
            ["hex" => "#F364A2", "name" => "Barbie Pink (1990-1999)"],
            ["hex" => "#F7238A", "name" => "Barbie Pink (1999-2004)"],
            ["hex" => "#FF3988", "name" => "Barbie Pink (2004-2005)"],
            ["hex" => "#FC419A", "name" => "Barbie Pink (2005-2009)"],
            ["hex" => "#E94196", "name" => "Barbie Pink"],
            ["hex" => "#E0218A", "name" => "Barbie Pink (Pantone)"],
            ["hex" => "#7C0A02", "name" => "Barn red"],
            ["hex" => "#1DACD6", "name" => "Battery charged blue"],
            ["hex" => "#848482", "name" => "Battleship grey"],
            ["hex" => "#5FC9BF", "name" => "Bayside"],
            ["hex" => "#98777B", "name" => "Bazaar"],
            ["hex" => "#BCD4E6", "name" => "Beau blue"],
            ["hex" => "#9F8170", "name" => "Beaver"],
            ["hex" => "#F28E1C", "name" => "Beer"],
            ["hex" => "#FA6E79", "name" => "Begonia"],
            ["hex" => "#F5F5DC", "name" => "Beige"],
            ["hex" => "#2E5894", "name" => "B'dazzled blue"],
            ["hex" => "#9C2542", "name" => "Big dip o’ruby"],
            ["hex" => "#E88E5A", "name" => "Big Foot Feet"],
            ["hex" => "#FFE4C4", "name" => "Bisque"],
            ["hex" => "#3D2B1F", "name" => "Bistre"],
            ["hex" => "#967117", "name" => "Bistre brown"],
            ["hex" => "#CAE00D", "name" => "Bitter lemon"],
            ["hex" => "#BFFF00", "name" => "Bitter lime"],
            ["hex" => "#FE6F5E", "name" => "Bittersweet"],
            ["hex" => "#BF4F51", "name" => "Bittersweet shimmer"],
            ["hex" => "#000000", "name" => "Black"],
            ["hex" => "#3D0C02", "name" => "Black bean"],
            ["hex" => "#1B1811", "name" => "Black chocolate"],
            ["hex" => "#3B2F2F", "name" => "Black coffee"],
            ["hex" => "#54626F", "name" => "Black coral"],
            ["hex" => "#253529", "name" => "Black leather jacket"],
            ["hex" => "#3B3C36", "name" => "Black olive"],
            ["hex" => "#BFAFB2", "name" => "Black Shadows"],
            ["hex" => "#FFEBCD", "name" => "Blanched almond"],
            ["hex" => "#A57164", "name" => "Blast-off bronze"],
            ["hex" => "#318CE7", "name" => "Bleu de France"],
            ["hex" => "#ACE5EE", "name" => "Blizzard blue"],
            ["hex" => "#FAF0BE", "name" => "Blond"],
            ["hex" => "#8A0303", "name" => "Blood"],
            ["hex" => "#D1001C", "name" => "Blood orange"],
            ["hex" => "#660000", "name" => "Blood red"],
            ["hex" => "#A41313", "name" => "Blood (Animal)"],
            ["hex" => "#630F0F", "name" => "Blood (organ)"],
            ["hex" => "#0000FF", "name" => "Blue"],
            ["hex" => "#1F75FE", "name" => "Blue (Crayola)"],
            ["hex" => "#0093AF", "name" => "Blue (Munsell)"],
            ["hex" => "#0087BD", "name" => "Blue (NCS)"],
            ["hex" => "#0018A8", "name" => "Blue (Pantone)"],
            ["hex" => "#333399", "name" => "Blue (pigment)"],
            ["hex" => "#0247FE", "name" => "Blue (RYB)"],
            ["hex" => "#A2A2D0", "name" => "Blue bell"],
            ["hex" => "#00B9FB", "name" => "Blue bolt"],
            ["hex" => "#0088DC", "name" => "Blue cola"],
            ["hex" => "#6699CC", "name" => "Blue-gray"],
            ["hex" => "#0D98BA", "name" => "Blue-green"],
            ["hex" => "#064E40", "name" => "Blue-green (color wheel)"],
            ["hex" => "#5DADEC", "name" => "Blue jeans"],
            ["hex" => "#4CB7A5", "name" => "Blue lagoon"],
            ["hex" => "#553592", "name" => "Blue-magenta violet"],
            ["hex" => "#0CBFE9", "name" => "Blue raspberry"],
            ["hex" => "#126180", "name" => "Blue sapphire"],
            ["hex" => "#8A2BE2", "name" => "Blue-violet"],
            ["hex" => "#7366BD", "name" => "Blue-violet (Crayola)"],
            ["hex" => "#4D1A7F", "name" => "Blue-violet (color wheel)"],
            ["hex" => "#5072A7", "name" => "Blue yonder"],
            ["hex" => "#4F86F7", "name" => "Blueberry"],
            ["hex" => "#1C1CF0", "name" => "Bluebonnet"],
            ["hex" => "#DE5D83", "name" => "Blush"],
            ["hex" => "#79443B", "name" => "Bole"],
            ["hex" => "#0095B6", "name" => "Bondi blue"],
            ["hex" => "#E3DAC9", "name" => "Bone"],
            ["hex" => "#DDE26A", "name" => "Bored accent green"],
            ["hex" => "#006A4E", "name" => "Bottle green"],
            ["hex" => "#873260", "name" => "Boysenberry"],
            ["hex" => "#0E9CA5", "name" => "undefined"],
            ["hex" => "#0070FF", "name" => "Brandeis blue"],
            ["hex" => "#87413F", "name" => "Brandy"],
            ["hex" => "#B5A642", "name" => "Brass"],
            ["hex" => "#FF631C", "name" => "Brave orange"],
            ["hex" => "#CB4154", "name" => "Brick red"],
            ["hex" => "#1DACD6", "name" => "Bright cerulean"],
            ["hex" => "#EBECF0", "name" => "Bright gray"],
            ["hex" => "#66FF00", "name" => "Bright green"],
            ["hex" => "#BF94E4", "name" => "Bright lavender"],
            ["hex" => "#D891EF", "name" => "Bright lilac"],
            ["hex" => "#C32148", "name" => "Bright maroon"],
            ["hex" => "#1974D2", "name" => "Bright navy blue"],
            ["hex" => "#FF007F", "name" => "Bright pink"],
            ["hex" => "#08E8DE", "name" => "Bright turquoise"],
            ["hex" => "#D19FE8", "name" => "Bright ube"],
            ["hex" => "#FFAA1D", "name" => "Bright yellow (Crayola)"],
            ["hex" => "#3399FF", "name" => "Brilliant azure"],
            ["hex" => "#F4BBFF", "name" => "Brilliant lavender"],
            ["hex" => "#FF55A3", "name" => "Brilliant rose"],
            ["hex" => "#FB607F", "name" => "Brink pink"],
            ["hex" => "#004225", "name" => "British racing green"],
            ["hex" => "#88540B", "name" => "Bronze"],
            ["hex" => "#CD7F32", "name" => "Bronze"],
            ["hex" => "#B08D57", "name" => "Bronze (metallic)"],
            ["hex" => "#737000", "name" => "Bronze yellow"],
            ["hex" => "#993300", "name" => "Brown"],
            ["hex" => "#AF593E", "name" => "Brown (Crayola)"],
            ["hex" => "#964B00", "name" => "Brown (traditional)"],
            ["hex" => "#A52A2A", "name" => "Brown (web)"],
            ["hex" => "#6B4423", "name" => "Brown-nose"],
            ["hex" => "#AF6E4D", "name" => "Brown sugar"],
            ["hex" => "#5F1933", "name" => "undefined"],
            ["hex" => "#4A2C2A", "name" => "undefined"],
            ["hex" => "#CC9966", "name" => "undefined"],
            ["hex" => "#1B4D3E", "name" => "Brunswick green"],
            ["hex" => "#FFC1CC", "name" => "Bubble gum"],
            ["hex" => "#E7FEFF", "name" => "Bubbles"],
            ["hex" => "#7BB661", "name" => "Bud green"],
            ["hex" => "#F0DC82", "name" => "Buff"],
            ["hex" => "#480607", "name" => "Bulgarian rose"],
            ["hex" => "#800020", "name" => "Burgundy"],
            ["hex" => "#DEB887", "name" => "Burlywood"],
            ["hex" => "#A17A74", "name" => "Burnished brown"],
            ["hex" => "#CC5500", "name" => "Burnt orange"],
            ["hex" => "#E97451", "name" => "Burnt sienna"],
            ["hex" => "#8A3324", "name" => "Burnt umber"],
            ["hex" => "#24A0ED", "name" => "Button blue"],
            ["hex" => "#BD33A4", "name" => "Byzantine"],
            ["hex" => "#702963", "name" => "Byzantium"],
            ["hex" => "#536872", "name" => "Cadet"],
            ["hex" => "#5F9EA0", "name" => "Cadet blue"],
            ["hex" => "#A9B2C3", "name" => "Cadet blue (Crayola)"],
            ["hex" => "#91A3B0", "name" => "Cadet grey"],
            ["hex" => "#0A1195", "name" => "Cadmium blue"],
            ["hex" => "#006B3C", "name" => "Cadmium green"],
            ["hex" => "#ED872D", "name" => "Cadmium orange"],
            ["hex" => "#B60C26", "name" => "Cadmium purple"],
            ["hex" => "#E30022", "name" => "Cadmium red"],
            ["hex" => "#FFF600", "name" => "Cadmium yellow"],
            ["hex" => "#7F3E98", "name" => "Cadmium violet"],
            ["hex" => "#A67B5B", "name" => "Café au lait"],
            ["hex" => "#4B3621", "name" => "Café noir"],
            ["hex" => "#1E4D2B", "name" => "Cal Poly Pomona green"],
            ["hex" => "#FCFFA4", "name" => "Calamansi"],
            ["hex" => "#A3C1AD", "name" => "Cambridge blue"],
            ["hex" => "#C19A6B", "name" => "Camel"],
            ["hex" => "#EFBBCC", "name" => "Cameo pink"],
            ["hex" => "#78866B", "name" => "Camouflage green"],
            ["hex" => "#FFFF99", "name" => "Canary"],
            ["hex" => "#FFEF00", "name" => "Canary yellow"],
            ["hex" => "#FF0800", "name" => "Candy apple red"],
            ["hex" => "#E4717A", "name" => "Candy pink"],
            ["hex" => "#00BFFF", "name" => "Capri"],
            ["hex" => "#592720", "name" => "Caput mortuum"],
            ["hex" => "#FFD59A", "name" => "Caramel"],
            ["hex" => "#C41E3A", "name" => "Cardinal"],
            ["hex" => "#00CC99", "name" => "Caribbean green"],
            ["hex" => "#1AC1DD", "name" => "Caribbean blue"],
            ["hex" => "#960018", "name" => "Carmine"],
            ["hex" => "#D70040", "name" => "Carmine (M&amp;P)"],
            ["hex" => "#EB4C42", "name" => "Carmine pink"],
            ["hex" => "#FF0038", "name" => "Carmine red"],
            ["hex" => "#FFA6C9", "name" => "Carnation pink"],
            ["hex" => "#B31B1B", "name" => "Carnelian"],
            ["hex" => "#56A0D3", "name" => "Carolina blue"],
            ["hex" => "#ED9121", "name" => "Carrot orange"],
            ["hex" => "#00563F", "name" => "Castleton green"],
            ["hex" => "#062A78", "name" => "Catalina blue"],
            ["hex" => "#703642", "name" => "Catawba"],
            ["hex" => "#C95A49", "name" => "Cedar Chest"],
            ["hex" => "#92A1CF", "name" => "Ceil"],
            ["hex" => "#ACE1AF", "name" => "Celadon"],
            ["hex" => "#007BA7", "name" => "Celadon blue"],
            ["hex" => "#2F847C", "name" => "Celadon green"],
            ["hex" => "#B2FFFF", "name" => "Celeste"],
            ["hex" => "#4997D0", "name" => "Celestial blue"],
            ["hex" => "#246BCE", "name" => "Celtic blue"],
            ["hex" => "#DE3163", "name" => "Cerise"],
            ["hex" => "#EC3B83", "name" => "Cerise pink"],
            ["hex" => "#007BA7", "name" => "Cerulean"],
            ["hex" => "#2A52BE", "name" => "Cerulean blue"],
            ["hex" => "#001440", "name" => "Cetacean blue"],
            ["hex" => "#6D9BC3", "name" => "Cerulean frost"],
            ["hex" => "#1DACD6", "name" => "Cerulean (Crayola)"],
            ["hex" => "#007AA5", "name" => "CG blue"],
            ["hex" => "#E03C31", "name" => "CG red"],
            ["hex" => "#A0785A", "name" => "Chamoisee"],
            ["hex" => "#F7E7CE", "name" => "Champagne"],
            ["hex" => "#F1DDCF", "name" => "Champagne pink"],
            ["hex" => "#36454F", "name" => "Charcoal"],
            ["hex" => "#232B2B", "name" => "Charleston green"],
            ["hex" => "#D0748B", "name" => "Charm"],
            ["hex" => "#E68FAC", "name" => "Charm pink"],
            ["hex" => "#DFFF00", "name" => "Chartreuse (traditional)"],
            ["hex" => "#7FFF00", "name" => "Chartreuse (web)"],
            ["hex" => "#FFA600", "name" => "Cheese"],
            ["hex" => "#DE3163", "name" => "Cherry"],
            ["hex" => "#FFB7C5", "name" => "Cherry blossom pink"],
            ["hex" => "#954535", "name" => "Chestnut"],
            ["hex" => "#FFC34D", "name" => "Chickadee"],
            ["hex" => "#DE6FA1", "name" => "China pink"],
            ["hex" => "#A8516E", "name" => "China rose"],
            ["hex" => "#141414", "name" => "Chinese black"],
            ["hex" => "#365194", "name" => "Chinese blue"],
            ["hex" => "#CD8032", "name" => "Chinese bronze"],
            ["hex" => "#AB381F", "name" => "Chinese brown"],
            ["hex" => "#D0DB61", "name" => "Chinese green"],
            ["hex" => "#CC9900", "name" => "Chinese gold"],
            ["hex" => "#F37042", "name" => "Chinese orange"],
            ["hex" => "#DE70A1", "name" => "Chinese pink"],
            ["hex" => "#720B98", "name" => "Chinese purple"],
            ["hex" => "#CD071E", "name" => "Chinese red"],
            ["hex" => "#AA381E", "name" => "Chinese red"],
            ["hex" => "#CCCCCC", "name" => "Chinese silver"],
            ["hex" => "#856088", "name" => "Chinese violet"],
            ["hex" => "#E2E5DE", "name" => "Chinese white"],
            ["hex" => "#FFB200", "name" => "Chinese yellow"],
            ["hex" => "#4AFF00", "name" => "Chlorophyll green"],
            ["hex" => "#3F000F", "name" => "Chocolate brown"],
            ["hex" => "#58111A", "name" => "Chocolate cosmos"],
            ["hex" => "#3C1421", "name" => "Chocolate Kisses"],
            ["hex" => "#7B3F00", "name" => "Chocolate (traditional)"],
            ["hex" => "#D2691E", "name" => "Chocolate (web)"],
            ["hex" => "#A8A9AD", "name" => "Chrome aluminum"],
            ["hex" => "#FFA700", "name" => "Chrome yellow"],
            ["hex" => "#98817B", "name" => "Cinereous"],
            ["hex" => "#E34234", "name" => "Cinnabar"],
            ["hex" => "#D2691E", "name" => "Cinnamon"],
            ["hex" => "#CD607E", "name" => "Cinnamon Satin"],
            ["hex" => "#E4D00A", "name" => "Citrine"],
            ["hex" => "#933709", "name" => "undefined"],
            ["hex" => "#9FA91F", "name" => "Citron"],
            ["hex" => "#7F1734", "name" => "Claret"],
            ["hex" => "#FBCCE7", "name" => "Classic rose"],
            ["hex" => "#0047AB", "name" => "Cobalt blue"],
            ["hex" => "#D2691E", "name" => "Cocoa brown"],
            ["hex" => "#965A3E", "name" => "Coconut"],
            ["hex" => "#E9EDF6", "name" => "Coconut White"],
            ["hex" => "#6F4E37", "name" => "Coffee"],
            ["hex" => "#3C3024", "name" => "Cola"],
            ["hex" => "#C4D8E2", "name" => "Columbia Blue"],
            ["hex" => "#FFFFCC", "name" => "Conditioner"],
            ["hex" => "#F88379", "name" => "Congo pink"],
            ["hex" => "#002E63", "name" => "Cool black"],
            ["hex" => "#8C92AC", "name" => "Cool grey"],
            ["hex" => "#EEE0B1", "name" => "Cookies and cream"],
            ["hex" => "#B87333", "name" => "Copper"],
            ["hex" => "#DA8A67", "name" => "Copper (Crayola)"],
            ["hex" => "#AD6F69", "name" => "Copper penny"],
            ["hex" => "#CB6D51", "name" => "Copper red"],
            ["hex" => "#996666", "name" => "Copper rose"],
            ["hex" => "#FF3800", "name" => "Coquelicot"],
            ["hex" => "#FF7F50", "name" => "Coral"],
            ["hex" => "#F88379", "name" => "Coral pink"],
            ["hex" => "#FF4040", "name" => "Coral red"],
            ["hex" => "#FD7C6E", "name" => "Coral reef"],
            ["hex" => "#F6A494", "name" => "Coral Reef (Valspar Paint Color)"],
            ["hex" => "#893F45", "name" => "Cordovan"],
            ["hex" => "#FBEC5D", "name" => "Corn"],
            ["hex" => "#B31B1B", "name" => "Cornell red"],
            ["hex" => "#6495ED", "name" => "Cornflower blue"],
            ["hex" => "#93CCEA", "name" => "Cornflower"],
            ["hex" => "#FFF8DC", "name" => "Cornsilk"],
            ["hex" => "#2E2D88", "name" => "Cosmic cobalt"],
            ["hex" => "#FFF8E7", "name" => "Cosmic latte"],
            ["hex" => "#81613C", "name" => "Coyote brown"],
            ["hex" => "#FFBCD9", "name" => "Cotton candy"],
            ["hex" => "#FFFDD0", "name" => "Cream"],
            ["hex" => "#DC143C", "name" => "Crimson"],
            ["hex" => "#BE0032", "name" => "Crimson glory"],
            ["hex" => "#990000", "name" => "Crimson red"],
            ["hex" => "#A7D8DE", "name" => "Crystal"],
            ["hex" => "#68A0B0", "name" => "Crystal blue"],
            ["hex" => "#F5F5F5", "name" => "Cultured"],
            ["hex" => "#00FFFF", "name" => "Cyan"],
            ["hex" => "#4E82B4", "name" => "Cyan azure"],
            ["hex" => "#4682BF", "name" => "Cyan-blue azure"],
            ["hex" => "#28589C", "name" => "Cyan cobalt blue"],
            ["hex" => "#188BC2", "name" => "Cyan cornflower blue"],
            ["hex" => "#00B7EB", "name" => "Cyan (process)"],
            ["hex" => "#58427C", "name" => "Cyber grape"],
            ["hex" => "#FFD300", "name" => "Cyber yellow"],
            ["hex" => "#F56FA1", "name" => "Cyclamen"],
            ["hex" => "#FFFF31", "name" => "Daffodil"],
            ["hex" => "#F0E130", "name" => "Dandelion"],
            ["hex" => "#FDDB6D", "name" => "Dandelion (Crayola)"],
            ["hex" => "#00008B", "name" => "Dark blue"],
            ["hex" => "#666699", "name" => "Dark blue-gray"],
            ["hex" => "#804A00", "name" => "Dark bronze"],
            ["hex" => "#514100", "name" => "Dark bronze (Coin)"],
            ["hex" => "#654321", "name" => "Dark brown"],
            ["hex" => "#88654E", "name" => "Dark brown-tangelo"],
            ["hex" => "#5D3954", "name" => "Dark byzantium"],
            ["hex" => "#A40000", "name" => "Dark candy apple red"],
            ["hex" => "#08457E", "name" => "Dark cerulean"],
            ["hex" => "#333333", "name" => "Dark charcoal"],
            ["hex" => "#986960", "name" => "Dark chestnut"],
            ["hex" => "#490206", "name" => "Dark chocolate"],
            ["hex" => "#3C1321", "name" => "Dark chocolate (Hershey's)"],
            ["hex" => "#26428B", "name" => "Dark cornflower blue"],
            ["hex" => "#CD5B45", "name" => "Dark coral"],
            ["hex" => "#008B8B", "name" => "Dark cyan"],
            ["hex" => "#536878", "name" => "Dark electric blue"],
            ["hex" => "#AA6C39", "name" => "Dark gold"],
            ["hex" => "#B8860B", "name" => "Dark goldenrod"],
            ["hex" => "#A9A9A9", "name" => "Dark gray (X11)"],
            ["hex" => "#013220", "name" => "Dark green"],
            ["hex" => "#006400", "name" => "Dark green (X11)"],
            ["hex" => "#1F262A", "name" => "Dark gunmetal"],
            ["hex" => "#00416A", "name" => "Dark imperial blue"],
            ["hex" => "#00147E", "name" => "Dark imperial blue"],
            ["hex" => "#1A2421", "name" => "Dark jungle green"],
            ["hex" => "#BDB76B", "name" => "Dark khaki"],
            ["hex" => "#483C32", "name" => "Dark lava"],
            ["hex" => "#734F96", "name" => "Dark lavender"],
            ["hex" => "#8BBE1B", "name" => "Dark lemon lime"],
            ["hex" => "#534B4F", "name" => "Dark liver"],
            ["hex" => "#543D37", "name" => "Dark liver (horses)"],
            ["hex" => "#8B008B", "name" => "Dark magenta"],
            ["hex" => "#A9A9A9", "name" => "Dark medium gray"],
            ["hex" => "#003366", "name" => "Dark midnight blue"],
            ["hex" => "#4A5D23", "name" => "Dark moss green"],
            ["hex" => "#02075D", "name" => "Dark Navy"],
            ["hex" => "#556B2F", "name" => "Dark olive green"],
            ["hex" => "#FF8C00", "name" => "Dark orange"],
            ["hex" => "#9932CC", "name" => "Dark orchid"],
            ["hex" => "#779ECB", "name" => "Dark pastel blue"],
            ["hex" => "#03C03C", "name" => "Dark pastel green"],
            ["hex" => "#966FD6", "name" => "Dark pastel purple"],
            ["hex" => "#C23B22", "name" => "Dark pastel red"],
            ["hex" => "#E75480", "name" => "Dark pink"],
            ["hex" => "#003399", "name" => "Dark powder blue"],
            ["hex" => "#4F3A3C", "name" => "Dark puce"],
            ["hex" => "#301934", "name" => "Dark purple"],
            ["hex" => "#872657", "name" => "Dark raspberry"],
            ["hex" => "#8B0000", "name" => "Dark red"],
            ["hex" => "#E9967A", "name" => "Dark salmon"],
            ["hex" => "#560319", "name" => "Dark scarlet"],
            ["hex" => "#8FBC8F", "name" => "Dark sea green"],
            ["hex" => "#3C1414", "name" => "Dark sienna"],
            ["hex" => "#71706E", "name" => "Dark silver"],
            ["hex" => "#8CBED6", "name" => "Dark sky blue"],
            ["hex" => "#483D8B", "name" => "Dark slate blue"],
            ["hex" => "#2F4F4F", "name" => "Dark slate gray"],
            ["hex" => "#177245", "name" => "Dark spring green"],
            ["hex" => "#918151", "name" => "Dark tan"],
            ["hex" => "#FFA812", "name" => "Dark tangerine"],
            ["hex" => "#483C32", "name" => "Dark taupe"],
            ["hex" => "#CC4E5C", "name" => "Dark terra cotta"],
            ["hex" => "#00CED1", "name" => "Dark turquoise"],
            ["hex" => "#D1BEA8", "name" => "Dark vanilla"],
            ["hex" => "#9400D3", "name" => "Dark violet"],
            ["hex" => "#9B870C", "name" => "Dark yellow"],
            ["hex" => "#00703C", "name" => "Dartmouth green"],
            ["hex" => "#555555", "name" => "Davy's grey"],
            ["hex" => "#D70A53", "name" => "Debian red"],
            ["hex" => "#9C8AA4", "name" => "Deep amethyst"],
            ["hex" => "#40826D", "name" => "Deep aquamarine"],
            ["hex" => "#A9203E", "name" => "Deep carmine"],
            ["hex" => "#EF3038", "name" => "Deep carmine pink"],
            ["hex" => "#E9692C", "name" => "Deep carrot orange"],
            ["hex" => "#DA3287", "name" => "Deep cerise"],
            ["hex" => "#FAD6A5", "name" => "Deep champagne"],
            ["hex" => "#B94E48", "name" => "Deep chestnut"],
            ["hex" => "#704241", "name" => "Deep coffee"],
            ["hex" => "#9B351B", "name" => "Deep dumpling"],
            ["hex" => "#C154C1", "name" => "Deep fuchsia"],
            ["hex" => "#056608", "name" => "Deep green"],
            ["hex" => "#0E7C61", "name" => "Deep green-cyan turquoise"],
            ["hex" => "#004B49", "name" => "Deep jungle green"],
            ["hex" => "#333366", "name" => "undefined"],
            ["hex" => "#F5C71A", "name" => "Deep lemon"],
            ["hex" => "#9955BB", "name" => "Deep lilac"],
            ["hex" => "#CC00CC", "name" => "Deep magenta"],
            ["hex" => "#820000", "name" => "Deep maroon"],
            ["hex" => "#D473D4", "name" => "Deep mauve"],
            ["hex" => "#355E3B", "name" => "Deep moss green"],
            ["hex" => "#FFCBA4", "name" => "Deep peach"],
            ["hex" => "#FF1493", "name" => "Deep pink"],
            ["hex" => "#A95C68", "name" => "Deep puce"],
            ["hex" => "#850101", "name" => "Deep red"],
            ["hex" => "#843F5B", "name" => "Deep ruby"],
            ["hex" => "#FF9933", "name" => "Deep saffron"],
            ["hex" => "#00BFFF", "name" => "Deep sky blue"],
            ["hex" => "#4A646C", "name" => "Deep Space Sparkle"],
            ["hex" => "#556B2F", "name" => "Deep spring bud"],
            ["hex" => "#7E5E60", "name" => "Deep taupe"],
            ["hex" => "#66424D", "name" => "Deep Tuscan red"],
            ["hex" => "#330066", "name" => "Deep violet"],
            ["hex" => "#BA8759", "name" => "Deer"],
            ["hex" => "#6AB2CA", "name" => "Delicate girl blue"],
            ["hex" => "#1560BD", "name" => "Denim"],
            ["hex" => "#2243B6", "name" => "Denim blue"],
            ["hex" => "#669999", "name" => "Desaturated cyan"],
            ["hex" => "#C19A6B", "name" => "Desert"],
            ["hex" => "#EDC9AF", "name" => "Desert sand"],
            ["hex" => "#EA3C53", "name" => "Desire"],
            ["hex" => "#B9F2FF", "name" => "Diamond"],
            ["hex" => "#696969", "name" => "Dim gray"],
            ["hex" => "#C53151", "name" => "Dingy Dungeon"],
            ["hex" => "#9B7653", "name" => "Dirt"],
            ["hex" => "#B5651E", "name" => "Dirty brown"],
            ["hex" => "#E8E4C9", "name" => "Dirty white"],
            ["hex" => "#1E90FF", "name" => "Dodger blue"],
            ["hex" => "#FEF65B", "name" => "Dodie yellow"],
            ["hex" => "#D71868", "name" => "Dogwood rose"],
            ["hex" => "#85BB65", "name" => "Dollar bill"],
            ["hex" => "#828E84", "name" => "Dolphin gray"],
            ["hex" => "#2496CD", "name" => "Douban Blue"],
            ["hex" => "#2E963D", "name" => "Douban Green"],
            ["hex" => "#F7C58E", "name" => "Douban Light Yellow"],
            ["hex" => "#967117", "name" => "Drab"],
            ["hex" => "#00009C", "name" => "Duke blue"],
            ["hex" => "#B07939", "name" => "Durian"],
            ["hex" => "#E6D0AB", "name" => "Durian White"],
            ["hex" => "#E1BD27", "name" => "Durian Yellow"],
            ["hex" => "#E5CCC9", "name" => "Dust storm"],
            ["hex" => "#EFDFBB", "name" => "Dutch white"],
            ["hex" => "#5D3A1A", "name" => "Earthtone"],
            ["hex" => "#E1A95F", "name" => "Earth yellow"],
            ["hex" => "#555D50", "name" => "Ebony"],
            ["hex" => "#C2B280", "name" => "Ecru"],
            ["hex" => "#1B1B1B", "name" => "Eerie black"],
            ["hex" => "#614051", "name" => "Eggplant"],
            ["hex" => "#F0EAD6", "name" => "Eggshell"],
            ["hex" => "#1034A6", "name" => "Egyptian blue"],
            ["hex" => "#17182B", "name" => "Elderberry"],
            ["hex" => "#7DF9FF", "name" => "Electric blue"],
            ["hex" => "#B56257", "name" => "Electric brown"],
            ["hex" => "#FF003F", "name" => "Electric crimson"],
            ["hex" => "#00FFFF", "name" => "Electric cyan"],
            ["hex" => "#00FF00", "name" => "Electric green"],
            ["hex" => "#6F00FF", "name" => "Electric indigo"],
            ["hex" => "#F4BBFF", "name" => "Electric lavender"],
            ["hex" => "#CCFF00", "name" => "Electric lime"],
            ["hex" => "#FF3503", "name" => "Electric orange"],
            ["hex" => "#F62681", "name" => "Electric pink"],
            ["hex" => "#BF00FF", "name" => "Electric purple"],
            ["hex" => "#E60000", "name" => "Electric red"],
            ["hex" => "#3F00FF", "name" => "Electric ultramarine"],
            ["hex" => "#8F00FF", "name" => "Electric violet"],
            ["hex" => "#FFFF33", "name" => "Electric yellow"],
            ["hex" => "#50C878", "name" => "Emerald"],
            ["hex" => "#046307", "name" => "Emerald green"],
            ["hex" => "#6C3082", "name" => "Eminence"],
            ["hex" => "#1B4D3E", "name" => "English green"],
            ["hex" => "#B48395", "name" => "English lavender"],
            ["hex" => "#AB4B52", "name" => "English red"],
            ["hex" => "#CC474B", "name" => "English vermillion"],
            ["hex" => "#563C5C", "name" => "English violet"],
            ["hex" => "#96C8A2", "name" => "Eton blue"],
            ["hex" => "#44D7A8", "name" => "Eucalyptus"],
            ["hex" => "#39569C", "name" => "Facebook Blue"],
            ["hex" => "#C19A6B", "name" => "Fallow"],
            ["hex" => "#801818", "name" => "Falu red"],
            ["hex" => "#B53389", "name" => "Fandango"],
            ["hex" => "#DE5285", "name" => "Fandango pink"],
            ["hex" => "#F400A1", "name" => "Fashion fuchsia"],
            ["hex" => "#E5AA70", "name" => "Fawn"],
            ["hex" => "#4D5D53", "name" => "Feldgrau"],
            ["hex" => "#FDD5B1", "name" => "Feldspar"],
            ["hex" => "#4F7942", "name" => "Fern green"],
            ["hex" => "#FF2800", "name" => "Ferrari red"],
            ["hex" => "#6C541E", "name" => "Field drab"],
            ["hex" => "#FF5470", "name" => "Fiery rose"],
            ["hex" => "#B22222", "name" => "Firebrick"],
            ["hex" => "#CE2029", "name" => "Fire engine red"],
            ["hex" => "#E95C4B", "name" => "Fire opal"],
            ["hex" => "#E25822", "name" => "Flame"],
            ["hex" => "#FC8EAC", "name" => "Flamingo pink"],
            ["hex" => "#6B4423", "name" => "Flattery"],
            ["hex" => "#F7E98E", "name" => "Flavescent"],
            ["hex" => "#EEDC82", "name" => "Flax"],
            ["hex" => "#FFE9D1", "name" => "Flesh"],
            ["hex" => "#216BD6", "name" => "Flickr Blue"],
            ["hex" => "#FB0081", "name" => "Flickr Pink"],
            ["hex" => "#A2006D", "name" => "Flirt"],
            ["hex" => "#FFFAF0", "name" => "Floral white"],
            ["hex" => "#F498AD", "name" => "Flower girl"],
            ["hex" => "#15F4EE", "name" => "Fluorescent blue"],
            ["hex" => "#FFBF00", "name" => "Fluorescent orange"],
            ["hex" => "#FF1493", "name" => "Fluorescent pink"],
            ["hex" => "#CCFF00", "name" => "Fluorescent yellow"],
            ["hex" => "#FF004F", "name" => "Folly"],
            ["hex" => "#5FA777", "name" => "Forest green (Crayola)"],
            ["hex" => "#014421", "name" => "Forest green (traditional)"],
            ["hex" => "#228B22", "name" => "Forest green (web)"],
            ["hex" => "#A67B5B", "name" => "French beige"],
            ["hex" => "#856D4D", "name" => "French bistre"],
            ["hex" => "#0072BB", "name" => "French blue"],
            ["hex" => "#FD3F92", "name" => "French fuchsia"],
            ["hex" => "#86608E", "name" => "French lilac"],
            ["hex" => "#9EFD38", "name" => "French lime"],
            ["hex" => "#D473D4", "name" => "French mauve"],
            ["hex" => "#FD6C9E", "name" => "French pink"],
            ["hex" => "#811453", "name" => "French plum"],
            ["hex" => "#4E1609", "name" => "French puce"],
            ["hex" => "#C72C48", "name" => "French raspberry"],
            ["hex" => "#F64A8A", "name" => "French rose"],
            ["hex" => "#77B5FE", "name" => "French sky blue"],
            ["hex" => "#8806CE", "name" => "French violet"],
            ["hex" => "#AC1E44", "name" => "French wine"],
            ["hex" => "#A6E7FF", "name" => "Fresh Air"],
            ["hex" => "#E936A7", "name" => "Frostbite"],
            ["hex" => "#FF00FF", "name" => "Fuchsia"],
            ["hex" => "#C154C1", "name" => "Fuchsia (Crayola)"],
            ["hex" => "#FF77FF", "name" => "Fuchsia pink"],
            ["hex" => "#CC397B", "name" => "Fuchsia purple"],
            ["hex" => "#C74375", "name" => "Fuchsia rose"],
            ["hex" => "#E48400", "name" => "Fulvous"],
            ["hex" => "#CC6666", "name" => "Fuzzy Wuzzy"],

        ];
    }
}
