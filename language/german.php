<?php
/*	Project:	EQdkp-Plus
 *	Package:	TERA game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Bogenschütze',
		2	=> 'Berserker',
		3	=> 'Lanzer',
		4	=> 'Mystiker',
		5	=> 'Priester',
		6	=> 'Zerstörer',
		7	=> 'Zauberer',
		8	=> 'Krieger',
		9	=> 'Klingentänzer',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aman',
		2	=> 'Baraka',
		3	=> 'Castanics',
		4	=> 'Hochelfen',
		5	=> 'Menschen',
		6	=> 'Popori',
		7	=> 'Elin',
	),
	'roles'	=> array(
		1	=> 'Deffensiv',
		2	=> 'Melee Offense',
		3	=> 'Ranged Offense',
		4	=> 'Unterstützer'
	),
	'lang' => array(
		'tera'						=> 'Tera Online',
		'uc_race'					=> 'Rasse',
		'uc_class'					=> 'Klasse',

		// events
		'tera_event_bastion'		=> 'Bastion Loks',
		'tera_event_sinestral'		=> 'Anwesen der Arglist',
		'tera_event_cultistrefuge'	=> 'Zuflucht der Kultisten',
		'tera_event_necromancer'	=> 'Nekromantenkrypta',
		'tera_event_sigiladstringo'	=> 'Siegel von Adstringo',
		'tera_event_goldenlaby'		=> 'Goldenes Labyrinth',
		'tera_event_akashashide'	=> 'Akashas Versteck',
		'tera_event_acentsaravash'	=> 'Aufstieg von Saravash',
		'tera_event_saleronsky'		=> 'Salerons Himmelsgarten',
		'tera_event_suryatis'		=> 'Suryatis Gipfel',
		'tera_event_ebontower'		=> 'Ebenholzturm',
		'tera_event_labyterror'		=> 'Labyrinth des Schreckens',
		'tera_event_kelsaiksnest'	=> 'Kelsaiks Nest',
		'tera_event_fanekaprima'	=> 'Tempel von Kaprima',
		'tera_event_balderstemple'	=> 'Balders Tempel',
		'tera_event_templetemerity'	=> 'Temple der Verwegenheit',
		'tera_event_sirjukas'		=> 'Terassen von Sirjuka',
		'tera_event_crucibleflame'	=> 'Flammentiegel',
		'tera_event_argoncorpus'	=> 'Argonenkorpus',
		'tera_event_manayascore'	=> 'Manayas Herz',
		'tera_event_layansprison'	=> 'Lakans Gefängnis',
		'tera_event_ghillieglade'	=> 'Tarnlichtung',
	),
);

?>