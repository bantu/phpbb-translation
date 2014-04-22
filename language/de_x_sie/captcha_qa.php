<?php
/**
*
* captcha_qa [Deutsch — Sie]
*
* @package language
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und https://www.phpbb.de/go/ubersetzerteam
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Diese Frage dient dazu, das automatisierte Versenden von Formularen durch Spam-Bots zu verhindern.',
	'CONFIRM_QUESTION_WRONG'	=> 'Sie haben eine fehlerhafte Antwort auf die Frage angegeben.',

	'QUESTION_ANSWERS'			=> 'Antworten',
	'ANSWERS_EXPLAIN'			=> 'Bitte geben Sie gültige Antworten auf die Frage ein, jede Antwort in eine Zeile.',
	'CONFIRM_QUESTION'			=> 'Frage',

	'ANSWER'					=> 'Antwort',
	'EDIT_QUESTION'				=> 'Frage bearbeiten',
	'QUESTIONS'					=> 'Fragen',
	'QUESTIONS_EXPLAIN'			=> 'Bei jedem Formular, für das Sie das Q&amp;A-Plugin aktiviert haben, wird den Benutzern eine der hier festgelegten Fragen gestellt. Um dieses Plugin zu nutzen, muss mindestens eine Frage in der Standardsprache festgelegt werden. Die Fragen sollten von der Zielgruppe des Boards leicht zu beantworten sein, aber sich nicht durch eine automatisierte Suchmaschinenanfrage beantworten lassen. Eine große und regelmäßig aktualisierte Fragen-Basis wird zu besseren Ergebnissen führen. Aktivieren Sie die strenge Prüfung, wenn die Antworten von der Groß- und Kleinschreibung, der Zeichensetzung oder von Leerzeichen abhängig sind.',
	'QUESTION_DELETED'			=> 'Frage gelöscht',
	'QUESTION_LANG'				=> 'Sprache',
	'QUESTION_LANG_EXPLAIN'		=> 'Die Sprache, in der die Frage und die Antworten formuliert sind.',
	'QUESTION_STRICT'			=> 'Strenge Prüfung',
	'QUESTION_STRICT_EXPLAIN'	=> 'Wenn aktiviert, wird auch auf Groß- und Kleinschreibung, Zeichensetzung sowie Leerzeichen geprüft.',

	'QUESTION_TEXT'				=> 'Frage',
	'QUESTION_TEXT_EXPLAIN'		=> 'Die Frage, die dem Benutzer gestellt wird.',

	'QA_ERROR_MSG'				=> 'Bitte füllen Sie alle Felder aus und geben Sie mindestens eine Antwort an.',
	'QA_LAST_QUESTION'			=> 'Sie können nicht alle Fragen löschen, solange das Plugin aktiv ist.',
));

?>