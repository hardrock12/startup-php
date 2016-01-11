

<?php
require_once "vendor/autoload.php";
use ApaiIO\Configuration\GenericConfiguration;
use ApaiIO\Operations\Search;
use ApaiIO\ApaiIO;


Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'twigcache','auto_reload' => true
));


$template = $twig->loadTemplate('search.html');

if(isset($_GET['option'])) {
    doget($_GET, $template);
}
/**
 * @param $var
 * @param $template
 * @throws Exception
 */
function doget($var, $template)
{
	
$conf = new GenericConfiguration();
$conf
    ->setCountry('in')
    ->setAccessKey('AKIAJGF7RT3BNQ4JS5UQ')
    ->setSecretKey('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')
    ->setAssociateTag('advancedbytes-21');

$search = new Search();
if($var['option']=='select')
{
	$var['option']='All';
}

$search->setCategory($var['option']);
$search->setSort(array('price'));
$search->setKeywords($var['searchtext']);
$search->setResponseGroup(array('Small','Images','Medium','OfferSummary'));
$apaiIo = new ApaiIO($conf);
$response = $apaiIo->runOperation($search);

$xml=simplexml_load_string($response);
//print_r($xml);
///print_r($xml->Items->Item);
    $pizza="All,Beauty,Grocery,Industrial,PetSupplies,OfficeProducts,Electronics,Watches,Jewelry,Luggage,Shoes,KindleStore,Automotive,MusicalInstruments,GiftCards,Toys,SportingGoods,PCHardware,Books,Baby,HomeGarden,VideoGames,Apparel,Marketplace,DVD,Music,HealthPersonalCare,Software
     ";

    $arr=explode(",", $pizza);

    echo $template->render(array('items'=>$xml->Items->Item,'pizzas'=>$arr));



//;print_r($xml->Items->Item[2]);

	
}




?>

