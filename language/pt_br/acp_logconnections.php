<?php
/**
*
* @package Log Connections
* @copyright (c) 2017 david63
* * @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 2.1.0-rc4] (https://github.com/phpBBTraducoes)
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
	'LOG_BROWSER'				=> 'Log do navegador do usuário',
	'LOG_BROWSER_EXPLAIN'		=> 'Inclua as informações do navegador do usuário na entrada do registro para conexões do usuário.',
	'LOG_CONNECTION'			=> 'Log de conexão',
	'LOG_CONNECTION_EXPLAIN'	=> 'Crie uma entrada de log sempre que um usuário fizer login no fórum.',
	'LOG_CONNECTIONS_EXPLAIN'	=> 'Aqui você pode definir as opções para o tipo de conexão que deseja registrar.',
	'LOG_CONNECTIONS_OPTIONS'	=> 'Opções do Log de conexões',
	'LOG_FAILED'				=> 'Log de conexões com falha',
	'LOG_FAILED_EXPLAIN'		=> 'Crie uma entrada de log sempre que um usuário fizer uma tentativa fracassada de efetuar login no fórum.',
	'LOG_LOGOUT'				=> 'Log logouts',
	'LOG_LOGOUT_EXPLAIN'		=> 'Crie uma entrada de log sempre que um usuário fizer logout do fórum.',
	'LOG_NEW_USER'				=> 'Log de novo usuário',
	'LOG_NEW_USER_EXPLAIN'		=> 'Crie uma entrada de log sempre que um novo usuário se registrar no fórum.',

	'NEW_VERSION'				=> 'Nova versão',
	'NEW_VERSION_EXPLAIN'		=> 'Existe uma versão mais recente desta extensão disponível.',
	
	'VERSION'					=> 'Versão',
));

// Donate
$lang = array_merge($lang, array(
	'DONATE'					=> 'Doar',
	'DONATE_EXTENSIONS'			=> 'Doe para minhas extensões',
	'DONATE_EXTENSIONS_EXPLAIN'	=> 'Esta extensão, como em todas as minhas extensões, é totalmente gratuita. Se você se beneficiou de usá-lo, por favor, considere fazer uma doação clicando no botão de doação do PayPal em frente - eu agradeceria. Prometo que não haverá spam nem pedidos de novas doações, embora sejam sempre bem-vindos.',

	'PAYPAL_BUTTON'				=> 'Doe com o botão PayPal',
	'PAYPAL_TITLE'				=> 'PayPal - A maneira mais fácil e segura de pagar on-line!',
));
