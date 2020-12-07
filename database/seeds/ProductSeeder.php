<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category 1
        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Passion for Purple Roses', '-')),
            'name' => 'Passion for Purple Roses',
            'thumbnail' => 'images/PassionforPurpleRoses.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => '<div><p>If they have a passion for purple, our bouquet of farm-fresh roses is the perfect surprise. Expertly gathered with lush greenery, these sweet blooms will leave someone you care about simply captivated.</p>
            <ul>
            <li>Gathering of purple roses, available in 12 or 24 stems</li>
            <li>Picked fresh on our premier farms around the world, our flowers are cared for every step of the way and shipped fresh to ensure lasting beauty and enjoyment.</li>
            </ul>
            <p><strong>About Cozee Candle</strong><br> Featuring fresh, curated scents that leave a memorable impression, our Cozee Candle collection is exclusively created by 1800Flowers. Paired with our beautiful floral bouquets, it’s a gift guaranteed to please all the senses.</p>
            <p>Add to their gift:</p>
            <ul>
            <li>Exclusive purple glass vase with an artistic footed detail and a classic, stylish design; measures 9"H (24 stems only)</li>
            <li>Clear glass tapered vase in a sleek design style; measures 9"H (24 stems only)</li>
            <li>Purple hourglass vase with elegant carved fluted detail; measures 8"H (12 stems only)</li>
            <li>A warm and subtle scent of fresh roses creates a cozy environment with our soy wax blend candle from Cozee Candle; arrives in charming mini floral pail; 3.5 oz. (available with purple vases only)</li>
            </ul></div>',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Two Dozen Red Roses', '-')),
            'name' => 'Two Dozen Red Roses',
            'thumbnail' => 'images/TwoDozenRedRoses.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Pink Petal Roses', '-')),
            'name' => 'Pink Petal Roses',
            'thumbnail' => 'images/PinkPetalRoses.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Yellow Roses', '-')),
            'name' => 'Yellow Roses',
            'thumbnail' => 'images/YellowRoses.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Peppermint Rose Bouquet', '-')),
            'name' => 'Peppermint Rose Bouquet',
            'thumbnail' => 'images/PeppermintRoseBouquet.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Kaleidoscope Roses', '-')),
            'name' => 'Kaleidoscope Roses',
            'thumbnail' => 'images/KaleidoscopeRoses.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Merry Red Roses', '-')),
            'name' => 'Merry Red Roses',
            'thumbnail' => 'images/MerryRedRoses.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Classing Budding Rose', '-')),
            'name' => 'Classing Budding Rose',
            'thumbnail' => 'images/ClassingBuddingRose.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Red Rose Reindeer', '-')),
            'name' => 'Red Rose Reindeer',
            'thumbnail' => 'images/RedRoseReindeer.jpg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);


        // Category 2
        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Winter Bliss', '-')),
            'name' => 'Winter Bliss',
            'thumbnail' => 'images/WinterBliss.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => '<div><p>Our best-selling winter bouquet captures the blissful beauty of the European countryside. Fresh-picked red &amp; white blooms are hand-arranged in a glass vase tied with red ribbon. It’s a gift that reveals the beauty of the season, while bringing you closer to the people you love.</p>
            <ul>
            <li>All-around arrangement with red roses, carnations, and mini carnations; white Asiatic lilies and Peruvian lilies (alstroemeria); accented with baby’s breath, hypericum berries and assorted Christmas greenery</li>
            <li>Artistically designed in a clear glass vase tied with satin red ribbon; vase measures 8"H</li>
            <li>Extra large arrangement measures approximately 18"H x 15"W</li>
            <li>Large arrangement measures approximately 17"H x 14"W</li>
            <li>Medium arrangement measures approximately 16"H x 13"W</li>
            <li>Small arrangement does not include Asiatic lilies or hypericum; measures approximately 15"H x 12"W</li>
            <li>Our florists hand-design each arrangement, so colors, varieties and container may vary due to local availability</li>
            <li>To ensure lasting beauty, Asiatic lilies and Peruvian lilies may arrive in bud form and will fully bloom over the next few days</li>
            </ul></div>',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Floral Embrace', '-')),
            'name' => 'Floral Embrace',
            'thumbnail' => 'images/FloralEmbrace.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Daydream Bouquet', '-')),
            'name' => 'Daydream Bouquet',
            'thumbnail' => 'images/DaydreamBouquet.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Happy Birthday Assorted Roses', '-')),
            'name' => 'Happy Birthday Assorted Roses',
            'thumbnail' => 'images/HappyBirthdayAssortedRoses.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Dashing Through the Snow Sleigh', '-')),
            'name' => 'Dashing Through the Snow Sleigh',
            'thumbnail' => 'images/DashingThroughtheSnowSleigh.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Warm Sunset Bouquet', '-')),
            'name' => 'Warm Sunset Bouquet',
            'thumbnail' => 'images/WarmSunsetBouquet.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Winter Moonlight Bouquet', '-')),
            'name' => 'Winter Moonlight Bouquet',
            'thumbnail' => 'images/WinterMoonlightBouquet.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Fields Of Europe Happy Birthday', '-')),
            'name' => 'Fields Of Europe Happy Birthday',
            'thumbnail' => 'images/FieldsOfEuropeHappyBirthday.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Sunflower Bouquet', '-')),
            'name' => 'Sunflower Bouquet',
            'thumbnail' => 'images/SunflowerBouquet.jpg',
            'category_id' => 2,
            'price' => 100000,
            'description' => 'TEST',
        ]);


        // Category 3
        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Happy Gerbera Daisies', '-')),
            'name' => 'Happy Gerbera Daisies',
            'thumbnail' => 'images/HappyGerberaDaisies.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => '<div><p>Here’s a bright, colorful gift that has cheer written all over it. Our vibrant Gerbera daisies are gathered together into a beautiful bouquet to deliver smiles for all of life’s special celebrations or everyday moments.</p>
            <ul>
            <li>Gathering of assorted Gerbera daisies, accented with fresh bear grass; available in 12 or 24 stems</li>
            <li>Flowers arrive with protective netting and stem straws</li>
            <li>Picked fresh on our premier farms around the world, our flowers are cared for every step of the way and shipped fresh to ensure lasting beauty and enjoyment</li>
            </ul>
            <p>Add to their gift:</p>
            <ul></ul></div>',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Lavender Garden Bouquet', '-')),
            'name' => 'Lavender Garden Bouquet',
            'thumbnail' => 'images/LavenderGardenBouquet.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Festive Tidings Bouquet', '-')),
            'name' => 'Festive Tidings Bouquet',
            'thumbnail' => 'images/FestiveTidingsBouquet.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Happy Daisy', '-')),
            'name' => 'Happy Daisy',
            'thumbnail' => 'images/HappyDaisy.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Vibrant Gem Bouquet', '-')),
            'name' => 'Vibrant Gem Bouquet',
            'thumbnail' => 'images/VibrantGemBouquet.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Fair Trade Certified Pink Roses & White Daisies', '-')),
            'name' => 'Fair Trade Certified Pink Roses & White Daisies',
            'thumbnail' => 'images/FairTradeCertifiedPinkRosesWhiteDaisies.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Lucky Ladybug Gerbera Daisy Plant', '-')),
            'name' => 'Lucky Ladybug Gerbera Daisy Plant',
            'thumbnail' => 'images/LuckyLadybugGerberaDaisyPlant.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Modern Rose and Gerbera Daisy Bouquet', '-')),
            'name' => 'Modern Rose and Gerbera Daisy Bouquet',
            'thumbnail' => 'images/ModernRoseandGerberaDaisyBouquet.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Red & White Delight', '-')),
            'name' => 'Red & White Delight',
            'thumbnail' => 'images/RedWhiteDelight.jpg',
            'category_id' => 3,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        // Category 4
        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Winter White Gardenia', '-')),
            'name' => 'Winter White Gardenia',
            'thumbnail' => 'images/WinterWhiteGardenia.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => '<div><p>Our white gardenia plant is a winter favorite. Fragrant and full of warm wishes, our elegant plant arrives in a snowflake embossed planter with shimmering silver finishes. For a gift that really sparkles, add our keepsake crystal snowflake ornament, perfect for the tree or as a unique holiday accent décor piece.</p>
            <ul>
            <li>White gardenia plant; produces fragrant blooms from May to September</li>
            <li>Set in a keepsake an embossed metal planter with silver finish</li>
            <li>Large plant measures overall approximately 12 -14”H</li>
            <li>Small plant measures overall approximately 10 -12”H</li>
            </ul>
            <p>Add to their gift:</p>
            <ul>
            <li>Prism snowflake ornament with dangling glass crystal; measures 8"L</li>
            </ul></div>',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Bloom Dish Garden', '-')),
            'name' => 'Bloom Dish Garden',
            'thumbnail' => 'images/BloomDishGarden.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Majestic Mosaic Hydrangea', '-')),
            'name' => 'Majestic Mosaic Hydrangea',
            'thumbnail' => 'images/MajesticMosaicHydrangea.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Juniper Bonsai', '-')),
            'name' => 'Juniper Bonsai',
            'thumbnail' => 'images/JuniperBonsai.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Grand Gardenia', '-')),
            'name' => 'Grand Gardenia',
            'thumbnail' => 'images/GrandGardenia.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Money Tree', '-')),
            'name' => 'Money Tree',
            'thumbnail' => 'images/MoneyTree.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Elegant Calla Lily', '-')),
            'name' => 'Elegant Calla Lily',
            'thumbnail' => 'images/ElegantCallaLily.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Charming Rose Garden', '-')),
            'name' => 'Charming Rose Garden',
            'thumbnail' => 'images/CharmingRoseGarden.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('Holiday Amaryllis by Real Simple', '-')),
            'name' => 'Holiday Amaryllis by Real Simple',
            'thumbnail' => 'images/HolidayAmaryllisbyRealSimple.jpg',
            'category_id' => 4,
            'price' => 100000,
            'description' => 'TEST',
        ]);

    }
}
