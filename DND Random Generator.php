<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color: #FFEEF2;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        table, th, td {
            border: 1px solid #595758;
        }
        table {
            border-collapse: collapse;
            align-self: right;
            
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th{
        	background-color: #86A397;
            color: #0C0A3E;
        }
        div{
            display: flex;
            justify-content: space-evenly;
        }
        label{
            border: thick double;
            border-radius: 35px;
            border-color: #0C0A3E;
            margin: 50px;
            padding: 15px;
            background-color: #86A397;
        }
        button{
            border-radius: 4px;
            border-color: black;
            background-color: #E08E45;
            font-size: 16px;
            padding: 18px 80px;
            border-radius: 4px;
            margin: 15px;

        }
        button:hover{
            background-color: #FFEEF2;
            border-radius: 8px;
            border-color: #E08E45;
            color: #E08E45;
        }
        .vertical {
            border-left: 2px solid #595758;
            height: flex;
            position:absolute;
            left: 50%;
        }
        .containerleft {
            background-color: #86A397;
            flex-grow: 6;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 25px;
            border: 2px solid #0C0A3E;
            margin: 15px;
            border-radius: 25px;
        }
        .containerright {
            columns: 2;
            background-color: #FFEEF2;
            flex-grow: 4;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 25px;
            border: 4px solid #86A397;
            margin: 15px;
            border-radius: 25px;
        }
        .container {
            display: flex;
            display: -webkit-flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        .row {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }
        .column {
            display: flex;
            flex-direction: column;
            flex-basis: 100%;
            flex: 1;
        }
        .commonItems {
            color: #9A9898;
            text-align: center;
            
        }
        .uncommonItems {
            color: #4FB361;
            text-align: center;
        }
        .rareItems {
            color: #5676B3;
            text-align: center;
        }
        .veryRareItems {
            color: #5C3367;
            text-align: center;
        }
        .legendaryItems {
            color: #DFC129;
            text-align: center;
        }
        .artifactItems {
            color: #AB3535;
            text-align: center;
        }
        .backstory {
            background-color: #86A397;
            justify-content: center;
            padding: 25px;
            border: 2px solid #0C0A3E;
            margin: 15px 0;
        }
        .boxes {
            
        }
    </style>
</head>

<body>

<?php
$armorClass = 0;
$arrlength = 0;
$charisma = 0;
$charismaAbility = 0;
$charismaMod = 0;
$class = " ";
$conMod = 0;
$constitution = 0;
$constitutionAbility = 0;
$count = 0;
$currHealth = 0;
$dex = 0;
$dexMod = 0;
$dexAbility = 0;
$dieSides = 6;
$dieTotal = 0;
$firstName = " ";
$hasShield = 0;
$healthRoll = 0;
$hp = 0;
$intelligence = 0;
$intelligenceAbility = 0;
$intMod = 0;
$intHealth = 0;
$lastName = " ";
$levelHealth = 0;
$motivation = " ";
$proficiencyBonus = 0;
$race = " ";
$randomArmorClass = 0;
$randomArmorCounter = 0;
$randomArtifactItemsCounter = 0;
$randomGold = 0;
$randomItemsCounter;
$randomLegendaryItemsCounter = 0;
$randomLevel = 0;
$randomLevelHP = 0;
$randomTown = "";
$randomVeryRareItemsCounter = 0;
$roll1 = 0;
$roll2 = 0;
$roll3 = 0;
$roll4 = 0;
$rolls = 4;
$shield = "";
$strength = 0;
$strengthAbility = 0;
$strengthMod = 0;
$wisdom = 0;
$wisdomAbility = 0;
$wisdomMod = 0;
$armor = [];
$dieRoll1 = [];
$dieRoll2 = [];
$dieRoll3 = [];
$dieRoll4 = [];
$dieRoll5 = [];
$dieRoll6 = [];
$levelHP = [];
$randomFirstName = [
    "Bob",
    "Varis",
    "Nyx",
    "Luna",
    "Ash",
    "Jack",
    "Lilith",
    "Nix",
    "Zephyr",
    "Rhogar",
    "Paeral",
    "Raven",
    "Ember",
    "Amira",
    "Dante",
    "Ellis",
    "Beatrice",
    "Emmeline",
    "Lucia",
    "Roger",
    "Walter",
    "Aubrey",
    "Audrey",
    "Avery",
    "Bentley",
    "Carrington",
    "Chance",
    "Dana",
    "Darnell",
];
$randomLastName = [
    "Xavier",
    "Gerald",
    "Todlyfer",
    "Wallinger",
    "Bollinger",
    "Clarke",
    "Cooper",
    "Fletcher",
    "Foreman",
    "Abdon",
    "Ackford",
    "Backhouse",
    "Bagshaw",
    "Bickerton",
    "Acklam",
    "Caister",
    "Cobbod",
    "Cockcroft",
    "Colbeck",
    "Eastoff",
    "Ecton",
    "Fifield",
    "Findon",
    "Fenby",
    "Fishburn",
];
$randomRace = [
    "Dragonborn",
    "Half-Elf",
    "Dwarf",
    "Halfling",
    "Elf",
    "Half-Orc",
    "Gnome",
    "Human",
];
$randomClass = [
    "Fighter",
    "Barbarian",
    "Bard",
    "Monk",
    "Cleric",
    "Paladin",
    "Druid",
    "Wizard",
];
$randomLightArmor = [
    "Padded Armor", 
    "Leather Armor", 
    "Studded Armor"];
$randomMediumArmor = [
    "Hide Armor",
    "Chain Shirt Armor",
    "Scale Mail Armor",
    "Breastplate Armor",
    "Half Plate Armor",
];
$randomHeavyArmor = [
    "Ring Mail Armor",
    "Chain Mail Armor",
    "Splint Armor",
    "Plate Armor",
];
$randomCommonItems = [
    "Armblade",
    "Band of Loyalty",
    "Bead of Nourishment",
    "Bead of Refreshment",
    "Boots of False Tracks",
    "Bottle of Boundless Coffee",
    "Breathing Bubble",
    "Cartographer's Map Case",
    "Charlatan's Die",
    "Chest of Preserving",
    "Cleansing Stone",
    "Cloak of Billowing",
    "Cloak of Many Fashions",
    "Clockwork Amulet",
    "Clothes of Mending",
    "Coins of Delving",
    "Cuddly Stixhaven Mascot",
    "Dark Shard Amulet",
    "Dread Helm",
    "Ear Horn of Hearing",
    "Earring of Message",
    "Enduring Spellbook",
    "Ersatz Eye",
    "Everbright Lantern",
    "Feather Token",
    "Hat of Vermin",
    "Hat of Wizardry",
    "Heward’s Handy Spice Pouch",
    "Horn of Silent Alarm",
    "Illuminator's Tattoo",
    "Imbued Wood Focus",
    "Instrument of Illusions",
    "Instrument of Scribing",
    "Keycharm",
    "Lantern of Tracking",
    "Lock of Trickery",
    "Masque Charm",
    "Masquerade Tattoo",
    "Medal of Muscle",
    "Medal of the Conch",
    "Medal of the Horizonback",
    "Medal of the Maze",
    "Medal of the Meat Pie",
    "Medal of Wetlands",
    "Medal of Wit",
    "Moodmark Paint",
    "Moon-Touch Sword",
    "Mystery Key",
    "Orb of Direction",
    "Orb of Gonging",
    "Orb of Shielding",
    "Orb of Time",
    "Perfume of Bewitching",
    "Pipe of Remembrance",
    "Pipe of Smoke Monsters",
    "Pole of Angeling",
    "Pole of Collapsing",
    "Pot of Awakening",
    "Potion of Climbing",
    "Potion of Comprehension",
    "Potion of Healing",
    "Potion of Watchful Rest",
    "Pressure Capsule",
    "Prosthetic Limb",
    "Rope of Mending",
    "Ruby of the War Mage",
    "Scribe's Pen",
    "Sekolahian Worshiping Statuette",
    "Shield of Expression",
    "Shiftweave",
    "Spell Scroll",
    "Spellshard",
    "Spellwrought Tattoo",
    "Spyglass of Clairvoyance",
    "Stagg of Adornment",
    "Staff of Bird Calls",
    "Staff of Flowers",
    "Strixhaven Pennant",
    "Talking Doll",
    "Tankard of Plenty",
    "Tankard of Sobriety",
    "Thermal Cube",
    "Unbreakable Arrow",
    "Veteran's Cane",
    "Voting Kit",
    "Vox Seeker",
    "Walloping Ammunition" . "Wand of Conducting",
    "Wand of Pyrotechnics",
    "Wand of Scowls",
    "Wand of Smiles",
    "Wand Sheath",
];
$randomUncommonItems = [
    "Alchemy Jug",
    "All-Purpose Tool",
    "Amulet of Proof Against Detection and Location",
    "Amulet of the Devout",
    "Amulet of the Drunkard",
    "Arcane Grimoire",
    "Bag of Bounty",
    "Bag of Holding",
    "Bag of Tricks",
    "Balance of Harmony",
    "Balloon Pack",
    "Blood of the Lycanthrope Antidote",
    "Blood Spear",
    "Bloodwell Vial",
    "Boomerang, +1",
    "Boots of Elvenkind",
    "Boots of Striding and Springing",
    "Boots of the Winterlands",
    "Bottled Breath",
    "Bracers of Archery",
    "Brooch of Living Essence",
    "Brooch of Shielding",
    "Broom of Flying",
    "Cap of Waterbreathing",
    "Circlet of Blasting",
    "Circlet of Human Perfection",
    "Cloak of Elvenkind",
    "Cloak of Protection",
    "Cloak of the Manta Ray",
    "Cracked Driftglobe",
    "Crown of the Forest",
    "Cursed Luckstone",
    "Decanter of Endless Water",
    "Deck of Illusions",
    "Driftglobe",
    "Dust of Corrosion",
    "Dust of Deliciousness",
    "Dust of Disappearance",
    "Dust of Dryness",
    "Dust of Sneezing and Choking",
    "Earworm",
    "Efficient Quiver",
    "Elemental Gem",
    "Emerald Pen",
    "Eversmoking Bottle",
    "Eyes of Charming",
    "Eyes of Minute Seeing",
    "Eyes of the Eagle",
    "Feywild Shard",
    "Finder's Goggles",
    "Gauntlets of Ogre Power",
    "Gem of Brightness",
    "Gloves of Missle Snaring",
    "Gloves of Swimming and Climbing",
    "Gloves of Thievery",
    "Goggles of Night",
    "Goggles of Object Reading",
    "Guardian Emblem",
    "Guild Signet",
    "Harkon's Bite",
    "Hat of Disguise",
    "Headband of Intellect",
    "Hellfire Weapon",
    "Helm of Comprehending Languages",
    "Helm of Telepathy",
    "Helm of Underwater Action",
    "Hew",
    "Immovable Rod",
    "Infernal Puzzle Box",
    "Inquisutuve's Goggles",
    "Insignia of Claws",
    "Javelin of Lighting",
    "Keoghtom's Ointment",
    "Lantern of Revealing",
    "Lightbringer",
    "Living Gloves",
    "Loredold Primer",
    "Mask of the Beast",
    "Medallion of Thoughts",
    "Mizzium Apparatus",
    "Mummy Rot Antidote",
    "Nature's Mantle",
    "Necklace of Adaptation",
    "Night Caller",
    "Oil of Slipperiness",
    "Orc Stone",
    "Paper Bird",
    "Pearl of Power",
    "Periapt of Health",
    "Periapt of Wound Closure",
    "Philter of Love",
    "Pipes of Haunting",
    "Pipes of the Sewer",
    "Pixie Dust",
    "Potion of Advantage",
    "Potion of Animal Friendship",
    "Potion of Fire Breath",
    "Potion of Growth",
    "Potion of Poison",
    "Potion of Resistance",
    "Potion of Water breathing",
    "Quiver of Ehlonna",
    "Restorative Ointment",
    "Ring of Jumping",
    "Ring of Mind Shielding",
    "Ring of Obscuring",
    "Ring of Swimming",
    "Ring of Truth Telling",
    "Ring of Water Walking",
    "Ring of Warmth",
    "Ring of Shared Suffering",
    "Robe of the Serpents",
    "Robe of Useful Items",
    "Rod of Retribution",
    "Rope of Climbing",
    "Saddle of the Cavalier",
    "Seeker Dart",
    "Sending Stones",
    "Shatterspike",
    "Skybliner Staff",
    "Slippers of Spider Climbing",
    "Smokepowder",
    "Staff of the Adder",
    "Staff of the Python",
    "Stone of Good Luck",
    "Stone of hte Ill Luck",
    "Storm Boomerang",
    "Sword of Vengeance",
    "Thessaltoxin Antidote",
    "Travel Alchemical Kit",
    "Trident of Fish Command",
    "Uncommon Glamerweave",
    "Wand of Entangle",
    "Wand of Magic Detection",
    "Wand of Magic Missiles",
    "Wand of Secrets",
    "Wand of Web",
    "Weapon of Warning",
    "Weapon, +1",
    "Wheel of Wind and Water",
    "Wind Fan",
    "Winged Boots",
    "Wingwear",
    "Winter's Dark Bite",
    "Yklwa, +1",
];
$randomRareItems = [
    "Acheron Blade",
    "Alchemical Compendium",
    "Amulet of Health",
    "Amulet of Protection from Turning",
    "Astral Shard",
    "Atlas of Endless Horizons",
    "Badge of the Watch",
    "Bag of Beans",
    "Banner of the Krig Rune",
    "Bead of Force",
    "Bell Branch",
    "Belt of Dwarvenkind",
    "Berserker Axe",
    "Bonecounter",
    "Boomerang, +2",
    "Boots of Leviation",
    "Boots of Speed",
    "Bowl of Commanding Water Elements",
    "Bracer of Defense",
    "Brazier of Commanding Fire Elementals",
    "Bridle of Capturing",
    "Butchers Bib",
    "Cape of the Mountebank",
    "Cauldron of Plenty",
    "Censor of Controlling Air Elementals",
    "Charm of Plant Command",
    "Chime of Opening",
    "Chromantic Rose",
    "Claw of the Wyrm Rune",
    "Claws of the Umber Hulk",
    "Cloak of Displacement",
    "Cloak of the Bat",
    "Corpse Slayer",
    "Crystal Blade",
    "Cube of Force",
    "Daern's Instant Fortress",
    "Dagger of Blindsight",
    "Dagger of Venom",
    "Devotee's Censer",
    "Dimensional Shackles",
    "Docent",
    "Dodecahedron of Doom",
    "Dragon Slayer",
    "Dragon Wing Bow",
    "Dragonguard",
    "Draggontooth Dagger",
    "Duplicitous Manuscript",
    "Eagle Whistle",
    "Elemental Essence Shard",
    "Elixir of Health",
    "Failed Experiment Wand",
    "Far Realm Shard",
    "Feather of Diatryma Summoning",
    "Feather Token",
    "Flame Tongue",
    "Folding Boat",
    "Fulminating Treatise",
    "Gauntlets of Flaming Fury",
    "Gavel of the Venn Rune",
    "Gem of Seeing",
    "Ghost Latern",
    "Giant Slayer",
    "Gulthias Staff",
    "Handy Haversack",
    "Hell Hound Cloak",
    "Helm of Teleportation",
    "Heward's Handy Haversack",
    "Hook of Fisher's Delight",
    "Horn of Blasting",
    "Horn of the Endless Maze",
    "Horseshoes of Speed",
    "Instant Fortress",
    "Iron Bands of Bilarro",
    "Iron Bands of Binding",
    "Kagonesti Forest Shroud",
    "Knave's Eye Patch",
    "Libram of Souls and Flesh",
    "Loadstone",
    "Lyre of Building",
    "Mace of Disruption",
    "Mace of Smiting",
    "Mace of Terror",
    "Mantle of Spell Resistance",
    "Master's Amulet",
    "Mind Blade",
    "Mind Lash",
    "Mirror of the Past",
    "Necklace of Fireballs",
    "Necklace of Prayer Beads",
    "Needle of Mending",
    "Oil of Etherealness",
    "Opal of the lld Rune",
    "Opal of the Stein Rune",
    "Outer Essence Shard",
    "Periapt of Proof Against Poison",
    "Piercer",
    "Piwafwi of Fire Resistance",
    "Planecaller's Codex",
    "Portable Hole",
    "Potion of Clairvoyance",
    "Potion of Diminution",
    "Potion of Gaseous Form",
    "Potion of Heroism",
    "Potion of Invulnerability",
    "Potion of Maximum Power",
    "Potion of Mind Reading",
    "Professor Orb",
    "Professor Skant",
    "Protective Verses",
    "Quaal's Feather Token",
    "Reveker's Concertina",
    "Ring of Animal Influence",
    "Ring of Evasion",
    "Ring of Feather Falling",
    "Ring of Free Action",
    "Ring of Protection",
    "Ring of Resitance",
    "Ring of Spell Storing",
    "Ring of Temporal Salvation",
    "Ring of the Ram",
    "Ring of the X-ray Vision",
    "Robe of Eyes",
    "Robe of Summer",
    "Rod of Rulership",
    "Rod of the Vonindod",
    "Rope of Entanglement",
    "Saint Markovia's Thighbone",
    "Scissors of Shadow Snipping",
    "Scroll of Protection",
    "Serpent's Fang",
    "Shadowfell Shard",
    "Shard of Xeluan",
    "Shield Guradian Amulet",
    "Spelljamming Helm",
    "Spider Staff",
    "Staff of Charming",
    "Staff of Defense",
    "Staff of Healing",
    "Staff of Swarming Insects",
    "Staff of the Ivory Claw",
    "Staff of the Woodlands",
    "Staff of Withering",
    "Stone of Controlling Eartch Elementals",
    "Stonespeaker Crystal",
    "Sun Blade",
    "Sword of Life Stealing",
    "Sword of Wounding",
    "Teleportation Tablet",
    "Tentacle Rod",
    "Ventilating Lungs",
    "Vicious Rapier, +1", 
    "Vicious Weapon",
    "Wand of Binding",
    "Wand of Enemy Detection",
    "Wand of Fear",
    "Wand of Fireballs",
    "Wand of Lightning Bolts",
    "Wand of Paralysis",
    "Wand of the Viscid Globs",
    "Wand of Winter",
    "Wand of Wonder",
    "Weapon of Certian Death",
    "Weird Tank",
    "Wings of Flying",
    "Woodcutter's Axe",
    "Yklwa, +2",
];
$randomVeryRareItems = [
    "Absorbing Tatto",
    "Amethyst Lodestone",
    "Amulet of the Black Skull",
    "Amulet of the Planes",
    "Animated Sheild",
];
$randomLegendaryItems = [
    "Apparatus of Crab",
    "Black Dragon Mask",
    "Blackrazor",
    "Black Staff",
    "Azuredge",
    "Belashyrra's Beholder Crown",
    "Belt of Giant Strength",
    "Black Crystal Tablet",
    "Blue Dragon Mask",
    "Bookmark",
    "Cloak of Invisibility",
    "Crystal Ball of Mind Reading",
    "Crystal Ball of Telepathy",
    "Crystal Ball of True Seeing",
    "Cubic Gate",
    "Danoth's Visor",
    "Dawnbringer",
    "Deck of Many Things",
    "Defender",
    "Dragonlance",
    "Drown",
    "Efreeti Chain",
    "Fane-Eater",
    "Flail of Tiamat",
    "Gloves of Soul Catching",
    "Gold Canary Figurine of Wondrous Power",
    "Greater Silver Sword",
    "Green Dragon Mask",
    "Grimoire Infinitus",
    "Gurt's Greataxe",
    "Hammer of Thunderbolts",
    "Hammock of Worlds",
    "Hazorawn",
    "Helm of Disjunction",
    "Helm of the Scavenger",
    "Hither-Thither Staff",
    "Holy Avenger",
    "Holy Symbol of Ravenkind",
    "Horn of Beckoning Death",
    "Icon of Ravenloft",
    "Infernal Tack",
    "Infiltrator's Key",
    "Iron Flask",
    "Ironfang",
    "Jewel of Three Prayers",
    "Korolnor Scepter",
    "Lost Crown of Besilmer",
    "Luck Blade",
    "Luxon Beacon",
    "Matalotok",
    "Moonblade",
    "Nepenthe",
    "Nether Scroll of Azumar",
    "Nightbringer",
    "Nightfall Pearl",
    "Orcsplitter",
    "Platinum Scarf",
    "Potion of Dragon's Majesty",
    "Potion of Giant Size",
    "Red Dragon Mask",
    "Red Wizard Blade",
    "Ring of Air Elemental Command",
    "Ring of Djinni Summoning",
    "Ring of Earth Elemental Command",
    "Ring of Fire Elemental Command",
    "Ring of Invisibility",
    "Ring of Spell Turning",
    "Ring of Three Wishes",
    "Ring of Water Elemental Command",
    "Robe of the Archmagi",
    "Rod of Lordly Might",
    "Rod of Ressurection",
    "Ruby Wave Gem",
    "Scarab of Protection",
    "Scroll of Tarrasque Summoning",
    "Scroll of the Comet",
    "Shard Solitaire",
    "Snicker-Snack",
    "Sovereign Glue",
    "Spell Bottle",
    "Sphere of Annihilation",
    "Staff of the Magi",
    "Stormgirdle",
    "Sunsword",
    "Sword of Answering",
    "Tablet of the Reawakening",
    "Talarith",
    "Talisman of Pure Good",
    "Talisman of the Sphere",
    "Talisman of ultimate Evil",
    "Tinderstrike",
    "Tome of the Stilled Tongue",
    "Topaz Annihilator",
    "Universal Solvent",
    "Verminshroud",
    "Vorpal Sword",
    "Wave",
    "Waythe",
    "Well of Many Worlds",
    "Whelm",
    "White Dragon Mask",
    "Windvane",
    "Witchlight Vane",
    "WitchLight Watch",
    "Wreath of the Prism",
    "Ythryn Mythallar",
];
$randomArtifactItems = [
    "Axe of Dwarvish Lords",
    "Baba Yaga’s Mortar and Pestle",
    "Blade of Avernus",
    "Blade of Broken Mirrors",
    "Book of Exalted Deeds",
    "Book of Vile Darkness",
    "Book of Vile Darkness",
    "Crook of Rao",
    "Demonomicon of Iggwilv",
    "Draakhorn",
    "Eye and Hand of Vecna",
    "Grovelthrash",
    "Iggwilv's Cauldron",
    "Lash of Shadows",
    "Luba's tarokka of Souls",
    "Mace of the Black Crown",
    "Mask of the Dragon Queen",
    "Mighty Servant of Leuk-o",
    "Orb of Dragonkind",
    "Orrery of the Wanderer",
    "Ring of Winter",
    "Ruins Wake",
    "RuinStone",
    "Silken Spite",
    "Staff of the Forgotten One",
    "Stone of Golorr",
    "Sword of Kas",
    "Sword of Zariel",
    "Teeth of Dahlver",
    "The Bloody End",
    "Wand of Orcus",
    "Will of the Talon",
    "Wyrmskull Throne",
];
$proficiencyArray = [
    $dexMod,
    $charismaMod,
    $intMod,
    $strengthMod,
    $wisdomMod,
    $conMod,
];
$randomProficiency = [];
$actions = [];
$wizardActions = [
    "Acid Splash, 60ft",
    "Fire Bolt, 120ft",
    "Message, 120ft",
    "Lighting Lore",
];
$bardActions = [
    "Rapier, 1d8, piercing",
    "Charm Person, 30ft",
    "Thunderwave, 15ft Cube",
];
$druidActions = [
    "Javelin +1, 1d6+1, Piercing, Range:30/120ft",
    "Wild Shape",
    "Blindness/Deafness, 2nd Level,  30ft",
    "Chill Touch, Cantrip, 120ft, 2d8",
];
$fighterActions = [
    "Longsword, 1d8, Piercing",
    "Longbow, 1d8, Piercing, Range:150/600",
];
$monkActions = ["Unarmed Attack", "Shortsword, 1d6"];
$clericActions = [
    "Destroy Undead",
    "Aura of Vitality, self(30ft Sphere)",
    "Summon Celestial, 90ft",
    "Aura of Life, self(30ft Sphere)",
];
$paladinActions = [
    "Lay on Hands",
    "Warhammer, 1d8(10) Bludgeoning",
    "Divine Smite",
    "Prayer of Healing, 30ft, 2d8+Spellcasting ability modifier",
];
$barbarianActions = [
    "Rage",
    "Great Axe, 1d12, Slashing",
    "Hand Axe, 1d6, Slashing, Range:20/60",
];
$abilityArray = [];
$backstoryTown = [
    "City of Waterdeep",
    "City of Neverwinter",
    "City of Baldur's Gate",
    "City of the Radiant Citadel",
    "City of Menzoberranzan",
    "Mount Hotenow",
    "City of Helm's Hold",
    "Neverwinter Woods",
    "Morgur's Mound",
    "Outskirts of Flint Rock",
    "City of Triboar",
    "Sword Mountains",
];
$backstoryMotivation = [
"Their drive for exploration, discovery, and adventure.",
"Seeking treasure and riches.",
"Seeking heroism.",
"Seeking revenge for the death of ",
"Seeking to become rich by any means.",
"Gaining the favour of a powerful entity.",
"Seeing a government fall.",
"Wanting to murder $firstName, who is a person of noble blood.",
"Wanting to win the heart $firstName $lastName, who they are deeply in love with.",
"Seeking to sabotage a former mentor.",
"Wanting to be respected by the elite.",
"Wanting to Find out the fate of a lost loved one.",
"Seeking to be the pride of their family name.",
"Desiring to save a country from ruin.",
"Seeking to steal back their only child.",
];




// Random Number
$number = mt_rand(1, 2);

// Random Class Generator
$class = array_rand($randomClass);

// Dice Rolling, add the top 3, assign to appropriate field
while ($count <= 6) {
    if ($strengthAbility <= 0) {
        $roll1 = mt_rand(1, 6);
        $roll2 = mt_rand(1, 6);
        $roll3 = mt_rand(1, 6);
        $roll4 = mt_rand(1, 6);
        array_push($dieRoll1, $roll1, $roll2, $roll3, $roll4);
        sort($dieRoll1, SORT_NUMERIC);
        array_shift($dieRoll1);
        $strengthAbility = array_sum($dieRoll1);
    } elseif ($dexAbility <= 0) {
        $roll1 = mt_rand(1, 6);
        $roll2 = mt_rand(1, 6);
        $roll3 = mt_rand(1, 6);
        $roll4 = mt_rand(1, 6);
        array_push($dieRoll2, $roll1, $roll2, $roll3, $roll4);
        sort($dieRoll2, SORT_NUMERIC);
        array_shift($dieRoll2);
        $dexAbility = array_sum($dieRoll2);
    } elseif ($constitutionAbility <= 0) {
        $roll1 = mt_rand(1, 6);
        $roll2 = mt_rand(1, 6);
        $roll3 = mt_rand(1, 6);
        $roll4 = mt_rand(1, 6);
        array_push($dieRoll3, $roll1, $roll2, $roll3, $roll4);
        sort($dieRoll3, SORT_NUMERIC);
        array_shift($dieRoll3);
        $constitutionAbility = array_sum($dieRoll3);
    } elseif ($intelligenceAbility <= 0) {
        $roll1 = mt_rand(1, 6);
        $roll2 = mt_rand(1, 6);
        $roll3 = mt_rand(1, 6);
        $roll4 = mt_rand(1, 6);
        array_push($dieRoll4, $roll1, $roll2, $roll3, $roll4);
        sort($dieRoll4, SORT_NUMERIC);
        array_shift($dieRoll4);
        $intelligenceAbility = array_sum($dieRoll4);
    } elseif ($wisdomAbility <= 0) {
        $roll1 = mt_rand(1, 6);
        $roll2 = mt_rand(1, 6);
        $roll3 = mt_rand(1, 6);
        $roll4 = mt_rand(1, 6);
        array_push($dieRoll5, $roll1, $roll2, $roll3, $roll4);
        sort($dieRoll5, SORT_NUMERIC);
        array_shift($dieRoll5);
        $wisdomAbility = array_sum($dieRoll5);
    } elseif ($charismaAbility <= 0) {
        $roll1 = mt_rand(1, 6);
        $roll2 = mt_rand(1, 6);
        $roll3 = mt_rand(1, 6);
        $roll4 = mt_rand(1, 6);
        array_push($dieRoll6, $roll1, $roll2, $roll3, $roll4);
        sort($dieRoll6, SORT_NUMERIC);
        array_shift($dieRoll6);
        $charismaAbility = array_sum($dieRoll6);
    } else {
    }

    $count++;
}

// Assign Abilities base on Class
array_push(
    $abilityArray,
    $charismaAbility,
    $constitutionAbility,
    $dexAbility,
    $intelligenceAbility,
    $strengthAbility,
    $wisdomAbility
);
rsort($abilityArray);
if ($class == 1) {
    $strength = $abilityArray[0];
    $constitution = $abilityArray[1];
    $charisma = $abilityArray[2];
    $dex = $abilityArray[3];
    $intelligence = $abilityArray[4];
    $wisdom = $abilityArray[5];
} elseif ($class == 7) {
    $intelligence = $abilityArray[0];
    $constitution = $abilityArray[1];
    $dex = $abilityArray[2];
    $charisma = $abilityArray[3];
    $wisdom = $abilityArray[4];
    $strength = $abilityArray[5];
} elseif ($class == 2) {
    $charisma = $abilityArray[0];
    $constitution = $abilityArray[1];
    $dex = $abilityArray[2];
    $intelligence = $abilityArray[3];
    $wisdom = $abilityArray[4];
    $strength = $abilityArray[5];
} elseif ($class == 6) {
    $wisdom = $abilityArray[0];
    $dex = $abilityArray[1];
    $constitution = $abilityArray[2];
    $intelligence = $abilityArray[3];
    $strength = $abilityArray[4];
    $charisma = $abilityArray[5];
} elseif ($class == 3) {
    $dex = $abilityArray[0];
    $wisdom = $abilityArray[1];
    $constitution = $abilityArray[2];
    $strength = $abilityArray[3];
    $charisma = $abilityArray[4];
    $intelligence = $abilityArray[5];
} elseif ($class == 4) {
    $wisdom = $abilityArray[0];
    $constitution = $abilityArray[1];
    $dex = $abilityArray[2];
    $strength = $abilityArray[3];
    $intelligence = $abilityArray[4];
    $charisma = $abilityArray[5];
} elseif ($class == 5) {
    $strength = $abilityArray[0];
    $dex = $abilityArray[1];
    $charisma = $abilityArray[2];
    $constitution = $abilityArray[3];
    $wisdom = $abilityArray[4];
    $intelligence = $abilityArray[5];
} else {
    $strength = $abilityArray[0];
    $dex = $abilityArray[1];
    $constitution = $abilityArray[2];
    $charisma = $abilityArray[3];
    $wisdom = $abilityArray[4];
    $intelligence = $abilityArray[5];
}

// Add Race Benefits to Abilities
if ($randomRace == 0) {
    $strength = $strength + 2;
    $charisma = $charisma + 1;
} elseif ($randomRace == 1) {
    $charisma = $charisma + 2;
    $constitution = $constitution + 1;
    $charisma = $charisma + 1;
} elseif ($randomRace == 2) {
    $constitution = $constitution + 2;
} elseif ($randomRace == 3) {
    $dex = $dex + 2;
} elseif ($randomRace == 4) {
    $dex = $dex + 2;
} elseif ($randomRace == 5) {
    $strength = $strength + 2;
    $constitution = $constitution + 1;
} elseif ($randomRace == 6) {
    $intelligence = $intelligence + 2;
} elseif ($randomRace == 7) {
    $intelligence = $intelligence + 1;
    $dex = $dex + 1;
    $strength = $strength + 1;
    $constitution = $constitution + 1;
    $charisma = $charisma + 1;
    $wisdom = $wisdom + 1;
} else {
}

// Constitution Modifier
$conMod = ($constitution - 10) / 2;
$conMod = floor($conMod);

// Intelligence Modifier
$intMod = ($intelligence - 10) / 2;
$intMod = floor($intMod);

// Dexterity Modifier
$dexMod = ($dex - 10) / 2;
$dexMod = floor($dexMod);

// Wisdom Modifier
$wisdomMod = ($wisdom - 10) / 2;
$wisdomMod = floor($wisdomMod);

// Charisma Modifier
$charismaMod = ($charisma - 10) / 2;
$charismaMod = floor($charismaMod);

// Strength Modifier
$strengthMod = ($strength - 10) / 2;
$strengthMod = floor($strengthMod);

// Random Race Generator
$race = array_rand($randomRace);

// Initial Health
$classKey = array_search($class, $randomClass);

if ($class == 7) {
    $intHealth = $conMod + 6;
} elseif ($class == 1) {
    $intHealth = $conMod + 12;
} elseif ($class == 2) {
    $intHealth = $conMod + 8;
} elseif ($class == 0) {
    $intHealth = $conMod + 10;
} elseif ($class == 3) {
    $intHealth = $conMod + 8;
} elseif ($class == 4) {
    $intHealth = $conMod + 8;
} elseif ($class == 5) {
    $intHealth = $conMod + 10;
} else {
    $intHealth = $conMod + 8;
}

// Action Generator
$actionKey = array_search($class, $randomClass);
if ($class == 7) {
    $actions = $wizardActions;
} elseif ($class == 1) {
    $actions = $barbarianActions;
} elseif ($class == 2) {
    $actions = $bardActions;
} elseif ($class == 0) {
    $actions = $fighterActions;
} elseif ($class == 3) {
    $actions = $monkActions;
} elseif ($class == 4) {
    $actions = $clericActions;
} elseif ($class == 5) {
    $actions = $paladinActions;
} else {
    $actions = $druidActions;
}
// Random Level Generator
$randomLevel = rand(5, 20);
$randomLevelHP = $randomLevel;

// Random Gold Generator
if ($randomLevel <= 10) {
    $randomGold = mt_rand(10, 250);
} elseif ($randomLevel > 10 && $randomLevel <= 13) {
    $randomGold = mt_rand(250, 750);
} elseif ($randomLevel > 13 && $randomLevel <= 16) {
    $randomGold = mt_rand(750, 1500);
} else {
    $randomGold = mt_rand(1500, 3000);
}

// Random Name Generator
$firstName = array_rand($randomFirstName);
$lastName = array_rand($randomLastName);

// Common Random Item Generator
if ($randomLevel <= 9) {
    $randomCommonItemsCounter = mt_rand(1, 3);
    shuffle($randomCommonItems);
} else {
    $randomCommonItemsCounter = mt_rand(2, 3);
    shuffle($randomCommonItems);
}

// Uncommon Random Item Generator
if ($randomLevel <= 10) {
    $randomUncommonItemsCounter = mt_rand(1, 2);
    shuffle($randomUncommonItems);
} else {
    $randomUncommonItemsCounter = mt_rand(1, 3);
    shuffle($randomUncommonItems);
}

// Rare Random Item Generator
$randomItemsCounter = mt_rand(1, 9);

if ($randomItemsCounter >= 5 && $randomLevel < 10) {
    $randomRareItemsCounter = mt_rand(0, 1);
    shuffle($randomRareItems);
} elseif ($randomLevel >= 10) {
    $randomRareItemsCounter = mt_rand(1, 2);
    shuffle($randomRareItems);
} else {
}

// Very Rare Random Item Generator
$randomItemsCounter = mt_rand(1, 9);
if ($randomItemsCounter >= 8 && $randomLevel >= 12) {
    shuffle($randomVeryRareItems);
    $randomVeryRareItemsCounter = mt_rand(1, 2);
} elseif ($randomItemsCounter >= 5 && $randomLevel >= 8) {
    shuffle($randomVeryRareItems);
    $randomVeryRareItemsCounter = 1;
} else {
}

// Legendary Random Item Generator
$randomItemsCounter = mt_rand(1, 9);
if ($randomLevel >= 14 && $randomItemsCounter >= 5) {
    shuffle($randomLegendaryItems);
    $randomLegendaryItemsCounter = 1;
} elseif ($randomLevel >= 17) {
    shuffle($randomLegendaryItems);
    $randomLegendaryItemsCounter = 1;
} else {
}

// Artifact Random Item Generator
$randomItemsCounter = mt_rand(1, 9);
if ($randomLevel >= 10 && $randomLevel <= 12 && $randomItemsCounter >= 9) {
    shuffle($randomArtifactItems);
    $randomArtifactItemsCounter = 1;
} elseif ($randomLevel >= 13 && $randomLevel <= 16 && $randomItemsCounter >= 7) {
    shuffle($randomArtifactItems);
    $randomArtifactItemsCounter = 1;
} elseif ($randomLevel > 16 && $randomItemsCounter >= 5) {
}

// Determine Proficency Bonus
if ($randomLevel <= 8) {
    $proficiencyBonus = 3;
} elseif ($randomLevel > 8 && $randomLevel <= 12) {
    $proficiencyBonus = 4;
} elseif ($randomLevel > 12 && $randomLevel <= 16) {
    $proficiencyBonus = 5;
} else {
    $proficiencyBonus = 6;
}

// Current Health based off level
if ($class == 1) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 12);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} elseif ($class == 7) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 6);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} elseif ($class == 2) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 8);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} elseif ($class == 0) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 10);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} elseif ($class == 3) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 8);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} elseif ($class == 4) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 8);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} elseif ($class == 5) {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 10);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
} else {
    while ($randomLevelHP >= 0) {
        $levelHealth = rand(1, 8);
        array_push($levelHP, $levelHealth);
        $randomLevelHP--;
    }
    $currHealth = array_sum($levelHP) + $intHealth;
}

// Random Armor and Shield Assigned
if ($class == 0 && $strength >= 15) {
    shuffle($randomHeavyArmor);
    $armor = $randomHeavyArmor[0];
    $randomArmorCounter = 1;
    $hasShield = 1;
} elseif ($class == 0) {
    shuffle($randomMediumArmor);
    $armor = $randomMediumArmor[0];
    $randomArmorCounter = 1;
    $hasShield = 1;
} elseif ($class == 1) {
    shuffle($randomMediumArmor);
    $armor = $randomMediumArmor[0];
    $randomArmorCounter = 1;
    if ($number = 1) {
        $hasShield = 1;
    } else {
        $hasShield = 0;
    }
} elseif ($class == 2) {
    shuffle($randomLightArmor);
    $armor = $randomLightArmor[0];
    $randomArmorCounter = 1;
    $hasShield = 0;
} elseif ($class == 3) {
    $hasShield = 0;
} elseif ($class == 4) {
    shuffle($randomMediumArmor);
    $armor = $randomMediumArmor[0];
    $randomArmorCounter = 1;
    $hasShield = 1;
} elseif ($class == 5 && $strength >= 15) {
    shuffle($randomHeavyArmor);
    $armor = $randomHeavyArmor[0];
    $randomArmorCounter = 1;
    $hasShield = 1;
} elseif ($class == 5) {
    shuffle($randomMediumArmor);
    $armor = $randomMediumArmor[0];
    $randomArmorCounter = 1;
    if ($number = 1) {
        $hasShield = 1;
    } else {
        $hasShield = 0;
    }
} elseif ($class == 6) {
    shuffle($randomLightArmor);
    $armor = $randomLightArmor[0];
    $randomArmorCounter = 1;
    $hasShield = 0;
} elseif ($class == 7) {
    $hasShield = 0;
} else {
    $hasShield = 0;
}

// Add Shield and Armor Class to Character

if ($armor == "Padded Armor" || $armor == "leather Armor") {
    $armorClass = 11 + $dexMod;
} elseif ($armor == "Studded Armor") {
    $armorClass = 12 + $dexMod;
} elseif ($armor == "Hide Armor") {
    $armorClass = 12 + $dexMod;
} elseif ($armor == "Chain Shirt Armor") {
    $armorClass = 13 + $dexMod;
} elseif ($armor == "Scale Mail Armor") {
    $armorClass = 14 + $dexMod;
} elseif ($armor == "Breastplate Armor") {
    $armorClass = 14 + $dexMod;
} elseif ($armor == "Half Plate Armor") {
    $armorClass = 15 + $dexMod;
} elseif ($armor == "Ring Mail Armor") {
    $armorClass = 14;
} elseif ($armor == "Chain Mail Armor") {
    $armorClass = 16;
} elseif ($armor == "Splint Armor Armor") {
    $armorClass = 17;
} elseif ($armor == "Plate Armor") {
    $armorClass = 18;
} else {
    $armorClass = 10 + $dexMod;
}

if ($hasShield == 1) {
    $shield = "Shield";
    $armorClass = $armorClass + 2;
} else {
    $shield = " ";
}

// Add Age
$agenum = rand(0, 10);
if ($agenum < 4) {
    $age = "Young";
} elseif ($agenum >= 4 && $agenum < 7) {
    $age = "Middle-Age";
} else {
    $age = "Old";
}

// Randomize Backstory
shuffle($backstoryTown);
$randomTown = $backstoryTown[0];

shuffle($backstoryMotivation);
$motivation = $backstoryMotivation[0];

?> 


<button onClick="window.location.reload();">Randomize</button>
<center>
    <u>
        <h1>
            <b>
                <?php echo $randomFirstName[$firstName] .
                    " " .
                    $randomLastName[$lastName]; ?>
                <br>
    </u>
                <font size="+2", #595758>
                    <?php echo "Level " . $randomLevel; ?>
                </font>
            </b>
        </h1> 
    <hr>
    <h2>
        <b>
            <?php echo $age .
                " " .
                $randomRace[$race] .
                " | " .
                $randomClass[$class]; ?>
        </b>
    </h2>
</center>
<div class="row">
    <label  class="boxes" style='disply:inline'> 
        <font size="+2">
            <u>
                HP
            </u>
            <center>
                <?php echo $currHealth; ?>
            </center>
        </font>
    </label>
    <label class="boxes" style='disply:inline'> 
        <font size="+2">
            <u>
                Initiative
            </u>
            <center>
                <?php 
                if ($dexMod > 0) { 
                echo "+" . $dexMod; 
                }
                elseif ($dexMod == 0){
                echo $dexMod;
                }
                else {
                    echo "-" . $dexMod;
                }
                ?>
            </center>
        </font>
    </label>
    <label class="boxes" style='disply:inline'> 
        <font size="+2">
            <u>
                AC
            </u>
            <center>
                <?php echo $armorClass; ?>
            </center>
        </font>
    </label>
</div>
<br>
<center>
    <table width="100%">
        <tr>
            <th> Ability </th>    
            <th>Strength</th>
            <th>Dexterity</th>
            <th>Constitution</th>
            <th>Intelligence</th>
            <th>Wisdom</th>
            <th>Charisma</th>
        </tr>
        <tr>
            <th> Score </th>    
            <td><?php echo $strength; ?></td>
            <td><?php echo $dex; ?></td>
            <td><?php echo $constitution; ?></td>
            <td><?php echo $intelligence; ?></td>
            <td><?php echo $wisdom; ?></td>
            <td><?php echo $charisma; ?></td>
        </tr>
        <tr>
            <th> Modifier </th>
            <td><?php 
            if ($strengthMod > 0) {
            echo "+" . $strengthMod; 
            }
            else {
               echo $strengthMod;
            }
            ?></td>
            <td><?php 
            if ($dexMod > 0) {
                echo "+" . $dexMod; 
            }
            else {
                echo $dexMod;
            }
            ?></td>
            <td><?php 
            if ($conMod > 0) {
                echo "+" . $conMod; 
                }
            else {
                    echo $conMod;
                }
                ?></td>
            <td><?php 
            if ($intMod > 0) {
                echo "+" . $intMod; 
                }
            else {
                    echo $intMod;
                }
                ?></td>
            <td><?php 
            if ($wisdomMod > 0) {
                echo "+" . $wisdomMod; 
                }
            else {
                    echo $wisdomMod;
                }; ?></td>
            <td><?php 
            if ($charismaMod > 0) {
                echo "+" . $charismaMod; 
                }
            else {
                    echo $charismaMod;
                } 
            ?></td>
        </tr>
    </table>
</center>
<br>
<hr>
<div class="container">
    <div class="containerleft">
        <div>
            <h3>
                <b>
                    <u>
                        ACTIONS:
                    </u>
                </b>
            </h3>
        </div>
        <div>
            <?php echo $actions[0]; ?>
        </div>
        <div>
            <?php echo $actions[1]; ?>
        </div>
        <div>
            <?php echo $actions[2]; ?>
        </div>
        <div>
            <?php echo $actions[3]; ?>
        </div>
    </div>
    <div class="containerright">
        <header>
            <div>
                <h3>
                    <b>
                        <u>
                            Personal Belongings:
                        </u>
                    </b>
                </h3>
            </div>
        </header>
        <body>
            <div class="row">
                <div class="column">
                    <div>
                        <h4>
                            <b>
                                <u>
                                    Gold:
                                </u>
                            </b>
                        </h4>
                    </div>
                    <div style="color: #A08918;">
                        <?php echo $randomGold . " Gold"; ?>
                    </div>
                    <div>
                        <h4>
                            <b>
                                <u>
                                    Armor and Shield:
                                </u>
                            </b>
                        </h4>
                    </div>
                    <div class="armor">
                        <?php for ($i = 0; $i < $randomArmorCounter; $i++) {
                            echo $armor . "<br>";
                        } ?>
                    </div>
                    <div class="armor">
                        <?php echo $shield; ?>
                    </div>
                </div>
                <div class="column">
                    <div>
                        <h4>
                            <b>
                                <u>
                                    Magical Items:
                                </u>
                            </b>
                        </h4>
                    </div>
                    <div class="commonItems">
                        <?php for ($i = 0; $i < $randomCommonItemsCounter; $i++) {
                            echo $randomCommonItems[$i] . "<br>";
                        } ?>
                    </div>
                    <div class="uncommonItems">
                        <?php for ($i = 0; $i < $randomUncommonItemsCounter; $i++) {
                            echo $randomUncommonItems[$i] . "<br>";
                        } ?>
                    </div>
                    <div class="rareItems">
                        <?php for ($i = 0; $i < $randomRareItemsCounter; $i++) {
                            echo $randomRareItems[$i] . "<br>";
                        } ?>
                    </div>
                    <div class="veryRareItems">
                        <?php for ($i = 0; $i < $randomVeryRareItemsCounter; $i++) {
                            echo $randomVeryRareItems[$i] . "<br>";
                        } ?>
                    </div>
                    <div class="legendaryItems">
                        <?php for (
                            $i = 0;
                            $i < $randomLegendaryItemsCounter;
                            $i++
                        ) {
                            echo $randomLegendaryItems[$i] . "<br>";
                        } ?>
                    </div>
                    <div class="artifactItems">
                        <?php for ($i = 0; $i < $randomArtifactItemsCounter; $i++) {
                            echo $randomArtifactItems[$i] . "<br>";
                        } ?>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>
<hr>
<div class="backstory">
    <header>   
        <div>
            <h3>
                <b>
                    <u>
                        Backstory:
                    </u>
                </b>
            </h3>
        </div>
        <br>
    <header>
    <body>
        <div>
            <?php echo $randomFirstName[$firstName] . " " . $randomLastName[$lastName] . " is from the " . $randomTown . ". As for the motivation they are motivated by " . $motivation; ?>
        </div>
    </body>
</div>
</body>
</html>
