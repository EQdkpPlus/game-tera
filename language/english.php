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
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Archer',
		2	=> 'Berserker',
		3	=> 'Lancer',
		4	=> 'Mystic',
		5	=> 'Priest',
		6	=> 'Slayer',
		7	=> 'Sorcerer',
		8	=> 'Warrior',
		9	=> 'Reaper',
		10	=> 'Gunner',
		11	=> 'Brawler',
		12	=> 'Ninja',
		13	=> 'Valkyrie',
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Aman',
		2	=> 'Baraka',
		3	=> 'Castanics',
		4	=> 'High Elves',
		5	=> 'Humans',
		6	=> 'Popori',
		7	=> 'Elin',
	),
	'roles'	=> array(
		1	=> 'Defense',
		2	=> 'Melee Offense',
		3	=> 'Ranged Offense',
		4	=> 'Support'
	),
	'lang' => array(
		'tera'						=> 'Tera Online',
		'uc_race'					=> 'Race',
		'uc_class'					=> 'Class',

		// events
		'tera_event_bastion'		=> 'Bastion of Lok',
		'tera_event_sinestral'		=> 'Sinestral Manor',
		'tera_event_cultistrefuge'	=> "Cultist's Refuge",
		'tera_event_necromancer'	=> 'Necromaner Tomb',
		'tera_event_sigiladstringo'	=> 'Sigil Adstringo',
		'tera_event_goldenlaby'		=> 'Golden Labyrinth',
		'tera_event_akashashide'	=> "Akasha's Hideout",
		'tera_event_acentsaravash'	=> 'Acent of Saravash',
		'tera_event_saleronsky'		=> "Saleron's Sky Garden",
		'tera_event_suryatis'		=> 'Suryatis Gipfel',
		'tera_event_ebontower'		=> 'Ebon Tower',
		'tera_event_labyterror'		=> 'Labyrinth of Terror',
		'tera_event_kelsaiksnest'	=> "Kelsaik's Nest",
		'tera_event_fanekaprima'	=> 'Fane of Kaprima',
		'tera_event_balderstemple'	=> "Balder's Temple",
		'tera_event_templetemerity'	=> 'Temple of Temerity',
		'tera_event_sirjukas'		=> "Sirjuka's Gallery",
		'tera_event_crucibleflame'	=> 'Crucible of Flame',
		'tera_event_argoncorpus'	=> 'Argon Corpus',
		'tera_event_manayascore'	=> "Manaya's Core",
		'tera_event_layansprison'	=> "Lakan's Prison",
		'tera_event_ghillieglade'	=> 'Ghillieglade',
	),
);

?>
