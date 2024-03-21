<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        // id massimo per assegnare una categoria randomica
        $maxId= count($categories);
        //prima parte del nome
        $name1 = [
            "A-", "Aero", "AeroDynamic", "Affluent", "Ageless", "Algo", "Allure", "Alpha", "Analog", "Analogous", "AntiLuxe", "Aqua", "Arbor", "Arcane", "Ardor", "Art",  "Artistry", "Asteroid", "Astra", "Astro",  "AstroNaut", "Aura", "Avant", "Axio", "Azura", "B-", "Barren", "Bewitch", "Bio",  "Biome", "Bitwise", "Blackhole", "Bliss", "Blissful", "Bloop",  "Bolt", "Boogie", "Bounce", "Breezo", "Brill", "Burst", "Byte",  "Calm",  "Celeste", "Celestial", "Cerebro", "Charma", "Chill", "Chorus", "Chrono", "Cipher", "Clima", "Codeflow", "Cogni", "Cognix", "Comet", "Coolth", "Cosmos", "Craftsmanship", "Crysta", "Cumulus", "Curio", "Cyber", "Cynos", "DataFlow", "DataLess", "Datarise", "Decadent", "Design", "Digi", "Digito", "Dimma", "Divinix", "Dominant", "Doodle", "Drift", "Drizzle", "Dullify", "Duo", "Dyna", "Dynamo", "Dyno", "E-", "Eager", "Echo", "Echoic", "Electro", "Elite", "Elysian", "Elysium", "Enchant", "Enigma", "Epic", "Epoch", "Eternal", "Ethereal",  "Ethos", "Euphoria", "Evolve", "Exo", "Factoid", "Familiar", "Fauna", "Fervor", "Fit", "Fizz", "Flash", "Flexi",  "Flora", "Fluxi", "Foresta", "Frigid", "Frolic", "Frosty", "Fusion", "G-", "Gaia", "Galactic", "Galaxy", "Genteel", "Geo", "Geoform", "Giga", "Glamour", "Glint", "Glisten", "Glitter", "Grand", "Green", "Grit", "Groovy", "Ground", "Gust", "Heli", "Helix",  "Herculean", "Hurry", "Hydro", "Hyper", "i", "Ignis", "Ignite", "Illumi", "Indifferent", "Infini", "Infinity", "Innovate", "Inquire", "Instant", "Insular", "Integra", "Interstellar", "Intragalactic", "Inverse", "Jazzy", "Jive", "Jolt", "Kineto", "Lava", "Lavish", "Leisure", "Logic", "Lumen", "Lumina", "Luminous", "Luna", "Lunar", "Lustrous", "Lux", "Luxe", "Magic", "Magma", "Majestic", "Majik", "Matchless", "Maxi", "Mega", "Mellow", "MellowMax", "Merger", "Meta", "Meteor", "Mingle", "Mini", "Mirage", "Modish", "Modulex", "Modulo",  "Motivo", "Mountainize", "Mystic", "Mystique", "Nano", "Nebula", "Neo", "Nexusa", "Nimbus", "Noble", "Noto", "Nova", "Novice", "Oceanize", "Odyssey", "Omicron", "Omni", "Omnius", "Onyx", "Opti", "Optima", "Opulent", "Ora", "Orbit", "Oxy", "Pantheon", "Peerless", "Petit", "Phantom", "Pinnacle", "Pixel", "Pixo",  "Play", "Plexi",  "Plural", "Plush", "Polar", "Polarix", "Posh", "Prestige", "Presto", "Prime",  "Pro", "Propel", "Prowess", "Psi", "Pure",  "Pyra", "Pyro", "Quantal", "Quantico", "Quantix", "Quantum", "Quasar", "Quirk", "Quiver", "R-", "Radiant", "Radiate", "Rapid", "Rapture", "Ravish", "Regal", "Repose", "Resono", "Resplend", "Retro",  "Retrograde", "Reverie", "Rhythmix", "Robust", "Rove", "Rush", "Rustique", "S-", "Scholar", "Sequen", "Sequent", "Sequo", "Serene", "Serenity", "Shade", "Silico", "Silken", "Silvi", "Simplex", "Singular", "Sizzle", "Sleek", "Smart",  "Solace", "Solar", "Solstice", "Spiffy", "Spiral", "Splendid", "Sprint", "Steer", "Stella", "Stellara", "Strata", "Strato", "Suave", "Superior", "Surge", "Swank", "Swift", "Swoosh", "Syncro",  "Tactile", "Tangent", "Tech",  "TechNature", "Tera", "Terra", "Terraform", "TerraNova", "Tetra", "Thermo", "Timely", "Tincture", "Titan", "Trailblazer", "Trance", "Tranquil", "Trekker", "Trixel", "Turbo", "Twirl", "Twist", "u", "U-", "Ultra", "Unformed", "Universe", "Unparalleled", "Urbane", "Urbano", "Vega", "Veloci", "Vento", "Ventus", "Verdant", "Verdix", "Verti", "Verve", "Vexi", "Vibra", "Vigor", "Virtex", "Virtu", "Virtualize", "Virtue", "Virtuex", "Virtuo", "Vista", "Viva", "VivaVoid", "Vivid", "Volt", "Vox", "Voxa", "Voxel", "Voyager", "Whimsy", "Whirl", "Whirlwind", "Z-", "Zen",  "Zenex", "Zenith", "Zenithal", "Zephyr", "Zesty", "Zeta", "Zip"
        ];
        //seconda parte del nome
        $name2= [
            "Affluent", "Allurist", "Anvil", "Arc", "Arch", "Balm", "Band", "Bark", "Bash", "Bastion", "Bay", "Beam", "Bit", "Blaze", "Bliss", "Blitz", "Bloom", "Blyss", "Boop", "Bop", "Breeze", "Brook", "Brush", "Burstify", "Buzz", "Byte", "Bytez", "Bytify", "Cache", "Capture", "Carnival", "Celestial", "Charm", "Circuit", "Citadel", "Cliff", "Cloud", "Code", "Column", "Core", "Cosmosis", "Craft", "Crest", "Crisp", "Crown", "Crux", "Cynosure", "Dapple", "Dash", "Dense", "Dew", "Dock", "Draft", "Dream", "Drench", "Drift", "Drizzle", "Dronix", "Dune", "Echo", "Elan", "Elegance", "Elixir", "Ember", "Enthrall", "Esteem", "Etch", "Euphoria", "Euphorix", "Exquisite", "Factum", "Fantasia", "Fern", "Fiesta", "Fizz", "Flare", "Flash", "Flicker", "Flint", "Flit", "Flow", "Form", "Formula", "Fortify", "Fortress", "Fringe", "Frontier", "Frost", "Future", "Fyzz", "Gaze", "Gilded", "Glam", "Glamm", "Gleam", "Glee", "Gleen", "Glide", "Glim", "Glimmer", "Glisten", "Glitz", "Glow", "Grace", "Graph", "Groove", "Grove", "Gust", "Gusto", "Halo", "Hammer", "Haven", "Haze", "Hex", "Hue", "Hush", "Ignition", "Insight", "Jewel",  "Jig", "Jingle", "Jolt", "Joy", "Kache", "Latch", "Leaf", "Leaflet", "Leap", "Lexicon", "Link", "Loom", "Loop", "Lume", "Lush", "Luster", "Luxify", "Majestix", "Marquee", "Matrix", "Mesh", "Mingle", "Miragea", "Mirageo", "Mist", "Mode", "Modest", "Modex", "Modique", "Mote", "Motif", "Mural", "Muse", "Mystic", "Nebulous", "Net", "Nexus", "Node", "Noise", "Noodle", "Nova", "Novus", "Oasis", "Odysseyon", "Optix", "Opulentia", "Path", "Peak", "Phase", "Pinnacle", "Pinnaclea", "Pinnaclez", "Pioneer", "Pique", "Pixel", "Pixelize", "Plop", "Plunge", "Pod", "Point", "Port", "Prance", "Probe", "Prowl", "Pulse", "Quake", "Quantex", "Quest", "Quill", "Quirkify", "Quiver", "Raddiance", "Radiance", "Radiant", "Rally", "Rambler", "Rave", "Refuge", "Relic", "Respite", "Retreat", "Rhythm", "Ritz", "Rove", "Rune", "Safari", "Sapling", "Sculpt", "Seed", "Shard", "Sheen", "Sheer", "Shift", "Shimmer", "Shroud", "Signal", "Silk", "Sink", "Skim", "Slice", "Slick", "Slide", "Snap", "Soiree", "Solid", "Span", "Spangle", "Sparse", "Spell", "Sphere", "Spin", "Spire", "Splendor", "Splice", "Sprint", "Spritz", "Sprout", "Squiggle", "Star", "Static", "Stellar", "Stellarize", "Stint", "Stone", "Streak", "Stream", "Strobe", "Study", "Summit", "Swirl", "Swoosh", "Sync", "Synk", "Tang", "Tech", "Thorn", "Titanize", "Totem", "Track", "Trail", "Trend", "Tweak", "Twig", "Twirl", "Twist", "Twistify", "Unadorned", "Valley", "Vanguard", "Velvet", "Verve", "Vibe", "Vibify", "Vigor", "Vogue", "Vogueish", "Void", "Voyage", "Vybify", "Wave", "Whirl", "Whiz", "Wiggle", "Zap", "Zeal", "Zenon", "Zeppelin", "Zing", "Zizzle"
        ];
        $min_price = 3;
        $max_price = 100;

        
        //
        for ($i=0; $i < 100; $i++) { 
            # code...
             $faker=Faker::create('it_IT');
             //popolare il db senza utilizzare la factory:
            // $new_product = new Product();
            // $new_product->category_id = random_int(1,$maxId );
            // $new_product->name = $faker->randomElement($name1) . $faker->randomElement($name2);
            // $new_product->description = $faker->text();
            // $new_product->image = $faker->imageUrl(640, 480, 'product', true);
            // $new_product->ean_code = $faker->ean13();
            // $new_product->price = random_int($min_price, $max_price) - 0.01;
            // $new_product->sponsored = $i < 5? 1 : 0;
            // //dd($new_product);
            // $new_product->save();
            
            //popolare il db utilizzando la factory:
            Product::factory()->create([
                "category_id" => random_int(1,$maxId ),
                "name" => $faker->randomElement($name1) . $faker->randomElement($name2),
                "price" => random_int($min_price, $max_price) - 0.01,
                "sponsored" => $i < 5? 1 : 0
            ]);
        }

    }
}
