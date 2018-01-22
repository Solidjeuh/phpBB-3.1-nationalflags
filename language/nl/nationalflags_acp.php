<?php

/**
*
*
* @package - National Flags language
* @copyright (c) RMcGirr83
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_FLAGS_EXPLAIN'					=> 'Hier kan je vlaggen toevoegen, bewerken of verwijderen.',
	'ACP_NO_UPLOAD'						=> '<br><strong>Indien je afbeeldingen wenst te gebruiken moet je ze uploaden naar ext/rmcgirr83/nationalflags/flags voor je de nieuwe vlag toevoegt. de vlag moet een naam hebben met kleine letters. vb: be.gif</strong>',
	'ACP_FLAGS_DONATE'					=> 'Gelieve een <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=S4UTZ9YNKEDDN&amp;item_name=National%20Flags" onclick="window.open(this.href); return false;"><span style="color:#0000FF;"><strong>Donatie</strong></span></a> te overwegen als je deze extensie leuk vindt.<br />
<span style="color:#B22222;">Of een kleine</span> <a href="https://www.muziekpromo.net/donation" onclick="window.open(this.href); return false;"><span style="color:#0000FF;"><strong>Donatie</strong></span></a> <span style="color:#B22222;">voor deze Nederlandse vertaling.</span>',
	'ACP_FLAG_USERS'					=> 'Aantal gebruikers',

	//Add/Edit Flags
	'FLAG_DEFAULT'						=> 'Standaard vlag',
	'FLAG_DEFAULT_EXPLAIN'				=> 'Dit instellen op ja zal de vlag als eerste tonen in de gebruikers profiel selectie indien een gebruiker nog geen vlag heeft geselecteerd.',
	'FLAG_EDIT'							=> 'Bewerk vlag',
	'FLAG_NAME'							=> 'Vlag naam',
	'FLAG_NAME_EXPLAIN'					=> 'De naam van de vlag. De vlag titel zal getoond worden zoals hier weergegeven.',
	'FLAG_IMG'							=> 'Afbeelding Naam',
	'FLAG_IMG_EXPLAIN'					=> 'De naam van de afbeelding. Voorbeeld: be.gif. Nieuwe afbeeldingen moeten geupload worden naar ext/rmcgirr83/nationalflags/flags.',
	'FLAG_IMAGE'						=> 'Vlag afbeelding',
	'FLAG_ADD'							=> 'Voeg nieuwe vlag toe',
	'FLAG_UPLOAD'						=> 'Upload vlag',
	'FLAG_UPLOAD_NOTICE'				=> 'Een afbeelding uploaden zal de afbeelding vervangen die reeds aanwezig is op de server als er al 1tje bestaat met dezelfde naam. Het afbeelding bestand <strong>is</strong> hoofdletter gevoelig.',
	'FLAG_UPLOAD_NO_OVERWRITE'			=> 'Je zal niet in staat zijn om een reeds bestaande afbeelding te overschrijven met dezelfde naam en extensie zoals hieronder weergegeven.',
	'FLAG_FOUND'						=> 'Vlag gevonden',
	'IMAGES_ON_SERVER'					=> 'Afbeelding namen op server',

	//Settings
	'FLAGS_REQUIRED'					=> 'Vereist veld',
	'FLAGS_REQUIRED_EXPLAIN'			=> 'Deze instelling op ja zetten zal zowel de nieuw geregistreerde als reeds geregistreerde leden verplichten om hun profiel te bezoeken en een vlag te kiezen.',
	'FLAGS_DISPLAY_MSG'					=> 'Toon een bericht',
	'FLAGS_DISPLAY_MSG_EXPLAIN'			=> 'Als je hier ja kiest zal een bericht getoond worden op het forum om een vlag te kiezen',
	'FLAGS_NUM_DISPLAY'					=> 'Aantal vlaggen',
	'FLAGS_NUM_DISPLAY_EXPLAIN'			=> 'Het aantal vlaggen om te tonen op de index pagina van het forum',
	'FLAGS_ON_INDEX'					=> 'Toon op Index',
	'FLAGS_ON_INDEX_EXPLAIN'			=> 'Geef een overzicht van de vlag gebruikers op indexpagina',
	'FLAGS_DISPLAY_TO_GUESTS'			=> 'Toon vlaggen aan gasten',
	'FLAGS_DISPLAY_TO_GUESTS_EXPLAIN'	=> 'Deze instelling op ja zetten zal vlaggen tonen aan gasten en bots',

	'FLAGS_VIEWTOPIC_POSITION'			=> 'Positie van de vlag',
	'FLAGS_VIEWTOPIC_POSITION_EXPLAIN'	=> 'Waar wens je een gebruikers vlag te tonen',
	'FLAG_POSITION_AFTER_AVATAR'		=> 'Na een gebruikers avatar', //1
	'FLAG_POSITION_BEFORE_AVATAR'		=> 'Voor een gebruikers avatar', //2
	'FLAG_POSITION_AFTER_USER_NAME'		=> 'Na een gebruikersnaam', //3
	'FLAG_POSITION_BEFORE_USER_NAME'	=> 'Voor een gebruikersnaam', //4
	'FLAG_POSITION_ABOVE_RANK'			=> 'Boven een gebruikers rang', //5
	'FLAG_POSITION_BELOW_RANK'			=> 'Onder een gebruikers rang', //6
	'FLAG_POSITION_AFTER_PROFILE_FIELDS'	=> 'Na profiel velden', //7
	'FLAG_POSITION_BEFORE_PROFILE_FIELDS'	=> 'Voor profiel velden', //8
	'FLAG_POSITION_AFTER_CONTACT_FIELDS'	=> 'Na contact veld', //0

	//Logs, messages and errors

	'MSG_FLAGS_DELETED'					=> 'Vlag werd verwijderd.',
	'MSG_CONFIRM'						=> '<strong>Ben je zeker dat je deze vlag wenst te verwijderen?</strong>',
	'MSG_FLAG_CONFIRM_DELETE'			=> array(
		1	=> '<br><strong>%d</strong> gebruiker heeft deze vlag, en zal een andere vlag moeten selecteren indien je deze verwijderd.',
		2	=> '<br><strong>%d</strong> gebruikers hebben deze vlag, en zullen een andere vlag moeten selecteren indien je deze verwijderd.',
	),
	'MSG_FLAG_EDITED'					=> 'Vlag werd gewijzigd.',
	'MSG_FLAG_ADDED'					=> 'Nieuwe vlag werd toegevoegd.',
	'FLAG_ERROR_NO_FLAG_NAME'			=> 'Geen vlag naam opgegeven, dit is een verplicht veld.',
	'FLAG_ERROR_NO_FLAG_IMG'			=> 'Geen vlag afbeelding opgegeven, dit is een verplicht veld.',
	'FLAG_ERROR_NOT_EXIST'				=> 'De geselecteerde vlag bestaat niet.',
	'FLAG_CONFIG_SAVED'					=> '<strong>Nationale vlag instellingen opgeslagen</strong>',
	'FLAG_NAME_EXISTS'					=> 'Er bestaat reeds een vlag met deze naam',
	'FLAG_SETTINGS_CHANGED'				=> 'Nationale vlag instellingen gewijzigd.',
	'FLAG_IMAGE_GENERAL_UPLOAD_ERROR'	=> 'Kan vlag niet uploaden naar %s. De vlag afbeelding bestaat misschien al.',
	'FLAG_IMAGE_DISALLOWED_CONTENT'			=> 'De overdracht is onderbroken omdat het bestand is ge&iuml;dentificeerd als een potentiële bedreiging.',
	'FLAG_IMAGE_DISALLOWED_EXTENSION'		=> 'Dit bestand kan niet getoond worden omdat de extensie <strong>%s</strong> niet is toegestaan.',
	'FLAG_IMAGE_EMPTY_FILEUPLOAD'			=> 'Het vlag bestand is leeg.',
	'FLAG_IMAGE_EMPTY_REMOTE_DATA'			=> 'De ingediende vlag kan niet worden overgedragen, omdat de data onjuist of beschadigd lijkt te zijn.',
	'FLAG_IMAGE_IMAGE_FILETYPE_MISMATCH'	=> 'Vlag bestandstype mismatch: verwachte extensie %1$s maar gaf deze %2$s extensie.',
	'FLAG_IMAGE_INVALID_FILENAME'			=> '%s is een ongeldige bestandsnaam.',
	'FLAG_IMAGE_NOT_UPLOADED'				=> 'De vlag kan niet worden overgedragen',
	'FLAG_IMAGE_PARTIAL_UPLOAD'				=> 'Het bestand kan niet volledig worden overgedragen.',
	'FLAG_IMAGE_PHP_SIZE_NA'				=> 'De vlag grootte is te groot.<br>De maximale grootte in php.ini kon niet worden vastgesteld.',
	'FLAG_IMAGE_PHP_SIZE_OVERRUN'			=> 'De vlag grootte is te groot.<br>De maximale grootte in php.ini kon niet worden vastgesteld.',
	'FLAG_IMAGE_REMOTE_UPLOAD_TIMEOUT'		=> 'De opgegeven vlag kan niet worden geupload omdat de aanvraag een time-out heeft.',
	'FLAG_IMAGE_UNABLE_GET_IMAGE_SIZE'		=> 'Het was niet mogelijk om de afmetingen van de vlag te bepalen',
	'FLAG_IMAGE_URL_INVALID'				=> 'Het vlag adres is ongeldig',
	'FLAG_IMAGE_URL_NOT_FOUND'				=> 'Het bestand kan niet worden gevonden.',
	'FLAG_IMAGE_WRONG_FILESIZE'				=> 'De vlag grootte moet tussen 0 en %1d %2s zijn.',
	'FLAG_IMAGE_WRONG_SIZE'					=> 'De vlag mag maximum %3$s breed en %4$s hoog zijn. De verzonden afbeelding is %5$s breed en %6$s hoog.',
	'FLAGS_REQUIRE_540'			=> 'Deze extensie vereist minstens PHP-versie 5.4.0 en phpBB versie 3.1.4-RC1. Gelieve uw PHP-versie en / of uw phpBB-versie te updaten om de extensie te gebruike.',
));
