<?php
/*
Plugin Name: Calendrier des produits de saison
Plugin URI: http://fr.gaiadir.com/calendrier/
Description: Un calendrier illustr&eacute; des fruits et l&eacute;gumes de saison
Version: 0.2
Author: Elia B.
Author URI: http://fr.gaiadir.com/
*/

/*  Copyright 2010  Elia B. (email : contact@gaiadir.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



$plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );


$tab_cal_fruit['01']=array("Clémentine","Kiwi","Mandarine","Marron","Olive","Orange","Pignon","Poire","Pomelo","Pomme");
$tab_cal_fruit['02']=array("Kiwi","Mandarine","Marron","Olive","Orange","Pignon","Poire","Pomme");
$tab_cal_fruit['03']=array("Kiwi","Orange","Pignon","Poire","Pomme");
$tab_cal_fruit['04']=array("Orange","Rhubarbe");
$tab_cal_fruit['05']=array("Rhubarbe");
$tab_cal_fruit['06']=array("Cassis","Cerise","Figue","Fraise","Framboise","Melon","Pastèque","Pomme");
$tab_cal_fruit['07']=array("Abricot","Cassis","Cerise","Figue","Fraise","Framboise","Groseille","Melon","Mirabelle","Mûre","Myrtille","Nectarine","Pastèque","Pêche","Poire","Pomme");
$tab_cal_fruit['08']=array("Abricot","Cassis","Cerise","Figue","Fraise","Framboise","Groseille","Melon","Mirabelle","Mûre","Myrtille","Nectarine","Pastèque","Pêche","Poire","Pomme","Prune","Pruneau");
$tab_cal_fruit['09']=array("Figue","Framboise","Marron","Mirabelle","Mûre","Myrtille","Noisette","Noix","Pêche","Poire","Pomme","Prune","Pruneau","Quetsche","Raisin");
$tab_cal_fruit['10']=array("Coing","Figue","Framboise","Marron","Myrtille","Noix","Pignon","Poire","Pomme","Quetsche","Raisin");
$tab_cal_fruit['11']=array("Châtaigne","Coing","Mandarine","Marron","Noix","Olive","Orange","Pignon","Poire","Pomme");
$tab_cal_fruit['12']=array("Châtaigne","Clémentine","Mandarine","Marron","Noix","Olive","Orange","Pignon","Poire","Pomme");

$tab_cal_legume['01']=array("Betterave","Carotte","Céleris","Chou","Chou de Bruxelles","Crosne","Endive","Lentille","Mâche","Oignon","Poireau","Pomme de Terre","Salsifis","Topinambour","Vitelotte");
$tab_cal_legume['02']=array("Betterave","Carotte","Céleris","Chou","Chou de Bruxelles","Crosne","Endive","Lentille","Mâche","Oignon","Poireau","Pomme de Terre","Topinambour","Vitelotte");
$tab_cal_legume['03']=array("Betterave","Carotte","Céleris","Chou","Chou de Bruxelles","Crosne","Endive","Lentille","Mâche","Oignon","Poireau","Pomme de Terre","Topinambour","Vitelotte");
$tab_cal_legume['04']=array("Asperge","Betterave","Carotte","Céleris","Côte de Blette","Cresson","Endive","Epinard","Lentille","Oignon","Pomme de Terre","Radis","Salade","Vitelotte");
$tab_cal_legume['05']=array("Asperge","Aubergine","Betterave","Carotte","Céleris","Chou-Fleur","Concombre","Côte de Blette","Cresson","Epinard","Fève","Lentille","Navet","Oignon","Pomme de Terre","Radis","Salade","Vitelotte");
$tab_cal_legume['06']=array("Ail","Asperge","Aubergine","Betterave","Carotte","Céleris","Chou-Fleur","Concombre","Côte de Blette","Courgette","Cresson","Echalote","Epinard","Fenouil","Haricot Vert","Lentille","Navet","Oignon","Poireau","Pois","Poivron","Pomme de Terre","Radis","Salade","Tomate");
$tab_cal_legume['07']=array("Ail","Asperge","Aubergine","Betterave","Brocoli","Carotte","Céleris","Chou-Fleur","Concombre","Côte de Blette","Courgette","Cresson","Echalote","Epinard","Fenouil","Haricot Vert","Lentille","Maïs","Oignon","Panais","Poireau","Pois","Poivron","Pomme de Terre","Radis","Salade","Tomate");
$tab_cal_legume['08']=array("Artichaut","Aubergine","Betterave","Brocoli","Carotte","Céleris","Chou-Fleur","Concombre","Côte de Blette","Courge","Courgette","Cresson","Echalote","Epinard","Fenouil","Haricot Vert","Lentille","Maïs","Oignon","Panais","Poireau","Pois","Poivron","Pomme de Terre","Radis","Salade","Tomate");
$tab_cal_legume['09']=array("Artichaut","Aubergine","Betterave","Brocoli","Carotte","Céleris","Chou de Bruxelles","Chou-Fleur","Concombre","Côte de Blette","Courge","Courgette","Cresson","Echalote","Epinard","Fenouil","Haricot Blanc","Lentille","Maïs","Oignon","Panais","Poireau","Pomme de Terre","Radis","Salade","Tomate","Vitelotte");
$tab_cal_legume['10']=array("Artichaut","Betterave","Brocoli","Carotte","Céleris","Chou","Chou de Bruxelles","Chou-Fleur","Courge","Courgette","Echalote","Epinard","Fenouil","Haricot Blanc","Lentille","Mâche","Maïs","Oignon","Panais","Poireau","Pomme de Terre","Potiron","Radis","Salade","Salsifis","Tomate","Topinambour","Vitelotte");
$tab_cal_legume['11']=array("Betterave","Brocoli","Carotte","Céleris","Chou","Chou de Bruxelles","Chou-Fleur","Crosne","Epinard","Fenouil","Lentille","Mâche","Oignon","Poireau","Pomme de Terre","Potiron","Salade","Salsifis","Topinambour","Vitelotte");
$tab_cal_legume['12']=array("Betterave","Carotte","Céleris","Chou","Chou de Bruxelles","Crosne","Endive","Lentille","Mâche","Oignon","Poireau","Pomme de Terre","Potiron","Salsifis","Topinambour","Vitelotte");

$mois=array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
$mois_url=array('', 'janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');

function img($name) 
{
	global $plugin_url;
	$tofind="ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñß@'";
    $replac="aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynnba ";
	return $plugin_url."/img/".ereg_replace(" ","-",trim(strtolower(strtr(eregi_replace("œ","oe",$name),$tofind,$replac)))).".gif";
}

function saisonGetOptions() 
{
	$options=array('title' => 'Calendrier produits de saison', 'mini' => 'oui', 'link' => 'oui');

	$saved=get_option('saison');	

	if (!empty($saved)) {
		foreach($saved as $key => $option) $options[$key]=$option;
	}

	if($saved!=$options) update_option(saison, $options); 
	
	return $options;
}

function saisonOptions()
{
	// get saved options
    $options=saisonGetOptions();

    // handle user input
    if ($_POST['saison_submit']){
       	$options['title']=strip_tags(stripslashes($_POST['saison_title']));
	
		$options['mini']=strip_tags(stripslashes($_POST['saison_mini'])); 
		$options['link']=strip_tags(stripslashes($_POST['saison_link'])); 
		update_option('saison', $options);
    }

    // print out the widget control
	echo"
	<label for=\"saison_title\">Title: </label><br />
	<input id=\"saison_title\" name=\"saison_title\" type=\"text\" class=\"widefat\" value=\"".$options['title']."\" /></label>

	<br /><br />

	<p><label for=\"saison_mini\">Version r&eacute;duite (Affiche seulement les 5 premiers fruits et l&eacute;gumes) :</label></p>
	<select name=\"saison_mini\">
	<option value=\"oui\"".($options['mini']=='oui'?' selected=\'selected\'':'').">Oui</option>
	<option value=\"non\"".($options['mini']=='non'?' selected=\'selected\'':'').">Non</option>
	</select>

	<br /><br />

	<p><label for=\"saison_link\">Lien vers le site du cr&eacute;ateur (version longue) :</label></p>
	<select name=\"saison_link\">
	<option value=\"oui\"".($options['link']=='oui'?' selected=\'selected\'':'').">Oui</option>
	<option value=\"non\"".($options['link']=='non'?' selected=\'selected\'':'').">Non</option>
	</select>

	<input type=\"hidden\" id=\"saison_submit\" name=\"saison_submit\" value=\"1\" />";
}

function saisonDisplay($args)
{  
	global $tab_cal_fruit, $tab_cal_legume, $mois, $mois_url;
	
	$options=get_option('saison');

	extract($args);

	echo $before_widget;
	echo $before_title; 
	echo $options['title']; 
	echo $after_title;

	$date=date('m');

	if(count($tab_cal_legume[$date])>count($tab_cal_fruit[$date])) $count=count($tab_cal_legume[$date]);
	else $count=count($tab_cal_fruit[$date]);

	if($options['mini']=='oui') $count=4;
	
	echo"
	<table cellpadding='2' cellspacing='0' border='0' width='100%'>
	<tr align='center'>
	<td width='50%'><strong>Fruits</strong></td>
	<td width='50%'><strong>L&eacute;gumes</strong></td>
	</tr>";
	for($i=0; $i<=$count ;$i++){
		echo"
		<tr align='center' valign='center'>
		<td>";
		if($tab_cal_fruit[$date][$i]) echo"<img src='".img($tab_cal_fruit[$date][$i])."' width='48' height='48' border='0' alt='' /><br />".htmlentities($tab_cal_fruit[$date][$i]);
		echo"</td><td>";
		if($tab_cal_legume[$date][$i]) echo"<img src='".img($tab_cal_legume[$date][$i])."' width='48' height='48' border='0' alt='' /><br />".htmlentities($tab_cal_legume[$date][$i]);
		echo"</td>
		</tr>";
	}
	echo"
	</table>";
	
	if($options['mini']=='oui') echo"<br /><font size='1'><a href=\"http://fr.gaiadir.com/calendrier/".$mois_url[date('n')]."\" target='_blank'>Voir tous les produits de saison</a></font>";
	elseif($options['link']=='oui') echo"<br /><font size='1'><a href=\"http://fr.gaiadir.com/\">Voir d'autres produits de saison</a></font>";


	echo $after_widget;
}


function saisonInit()
{
	register_sidebar_widget('Calendrier produits de saison', 'saisonDisplay');

	register_widget_control('Calendrier produits de saison', 'saisonOptions');
}

add_action('init', 'saisonInit');
?>