<?php
/**
*
* @package Log Connections
* @copyright (c) 2017 david63
* * @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 2.1.0-rc2] (https://github.com/phpBBTraducoes)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'LOG_CONNECTION'			=> 'Log de conexão',
	'LOG_CONNECTION_EXPLAIN'	=> 'Crie uma entrada de log sempre que um usuário fizer login no fórum.',
	'LOG_CONNECTIONS_EXPLAIN'	=> 'Aqui você pode definir as opções para o tipo de conexão que deseja registrar.',
	'LOG_CONNECTIONS_OPTIONS'	=> 'Opções do Log de conexões',
	'LOG_FAILED'				=> 'Log de conexões com falha',
	'LOG_FAILED_EXPLAIN'		=> 'Crie uma entrada de log sempre que um usuário fizer uma tentativa fracassada de efetuar login no fórum.',
	'LOG_NEW_USER'				=> 'Log de novo usuário',
	'LOG_NEW_USER_EXPLAIN'		=> 'Crie uma entrada de log sempre que um novo usuário se registrar no fórum.',

	'VERSION'					=> 'Versão',
));
