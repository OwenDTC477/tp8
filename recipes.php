<?

$recipes = array();

$recipes["FrenchOnionBreadedBakedChicken"] = array();
$recipes["FrenchOnionBreadedBakedChicken"]["ingredients"] = array();
$recipes["FrenchOnionBreadedBakedChicken"]["equipment"] = array();
$recipes["FrenchOnionBreadedBakedChicken"]["directions"] = array();

$recipes["FrenchOnionBreadedBakedChicken"]["ingredients"][0] = "1/2 cup of bread crumbs";
$recipes["FrenchOnionBreadedBakedChicken"]["ingredients"][1] = "1 ounce of French Onion Soup Mix";
$recipes["FrenchOnionBreadedBakedChicken"]["ingredients"][2] = "1/3 cup of mayo";
$recipes["FrenchOnionBreadedBakedChicken"]["ingredients"][3] = "1 cup of garlic paste (optional)";
$recipes["FrenchOnionBreadedBakedChicken"]["ingredients"][4] = "4 skinless and boneless chicken breasts";

$recipes["FrenchOnionBreadedBakedChicken"]["equipment"][] = "Oven";
$recipes["FrenchOnionBreadedBakedChicken"]["equipment"][] = "Bowl";
$recipes["FrenchOnionBreadedBakedChicken"]["equipment"][] = "Measuring cup";

$recipes["FrenchOnionBreadedBakedChicken"]["directions"][] = "Preheat the oven to 425 degrees F (220 degrees C).";
$recipes["FrenchOnionBreadedBakedChicken"]["directions"][] = "Mix bread crumbs and dry soup mix together in a bowl.";
$recipes["FrenchOnionBreadedBakedChicken"]["directions"][] = "Mix mayonnaise and garlic paste together in a separate bowl. Microwave on high to thin out consistency, 20 to 30 seconds.";
$recipes["FrenchOnionBreadedBakedChicken"]["directions"][] = "Brush chicken breasts with the mayonnaise mixture. Cover with the crumb mixture. Place on a baking sheet.";
$recipes["FrenchOnionBreadedBakedChicken"]["directions"][] = "Bake on the middle rack of the preheated oven until chicken is no longer pink in the center and juices run clear, about 20 minutes. An instant-read thermometer inserted into the center should read at least 165 degrees F (74 degrees C).";






$requestedID = $_REQUEST["id"];
$requestedID = htmlspecialchars($requestedID);
$requestedID = filter_var($requestedID, FILTER_SANITIZE_STRING);

$requestedList = $_REQUEST["list"];
$requestedList = htmlspecialchars($requestedList);
$requestedList = filter_var($requestedList, FILTER_SANITIZE_STRING);

$requestedArray = $recipes[$requestedID][$requestedList];

var_dump($requestedArray);




$requestedJSON = "0";

if ($requstedArray !=null) {
$requestedJSON = json_encode($requstedArray);
}

echo $requestedJSON; 

























