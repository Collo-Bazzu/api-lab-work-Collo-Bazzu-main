<?php
//include the file with our class
require_once 'CountyMix.php';
require_once 'vendor/autoload.php';

use Amenadiel\JpGraph\Graph;
use Amenadiel\JpGraph\Plot;
//properties, behaviour
class PartyDistribution extends CountyMix\CountyMix{

    public function __construct(){
        
        // Create the Pie Graph.
        $graph = new Graph\PieGraph(600, 500);
        $graph->title->Set("Distribution of Political Parties in 2022.");
        $graph->SetBox(true);
        //initializing our data
        parent::__construct ();
        parent::createTable();
        $data = array_values($this->party_count);
        //access the party_count property
        $party_count = $this->party_count;
        var_dump($party_count);die;

        $data = array(40, 21, 17, 14, 23);
        $p1   = new Plot\PiePlot($data);
        $p1->ShowBorder();
        $p1->SetColor('black');
        $p1->SetSliceColors(array('#1E90FF', '#2E8B57', '#ADFF2F', '#DC143C', '#BA55D3'));

        $graph->Add($p1);
        $graph->Stroke();
    }



}
#object
$showPlot = new PartyDistribution();