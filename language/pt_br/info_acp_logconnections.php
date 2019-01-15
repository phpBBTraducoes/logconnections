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
	'ERROR_LOGIN_ATTEMPTS'			=> '<strong>O usuário excedeu as tentativas de login</strong>',
	'ERROR_LOGIN_PASSWORD'			=> '<strong>O usuário digitou uma senha incorreta</strong>',
	'ERROR_LOGIN_PASSWORD_CONVERT'	=> '<strong>Erro de conversão de senha</strong>',
	'ERROR_LOGIN_UNKNOWN'			=> '<strong>Ocorreu um erro de login (%1$s) inesperado</strong><br />» %2$s',
	'ERROR_LOGIN_USERNAME'			=> '<strong>Nome de usuário inválido foi inserido</strong><br />» %1$s',

	'LOG_CONNECTIONS'				=> 'Log de conexões',
	'LOG_CONNECTIONS_LOG'			=> '<strong>Configurações do Log de conexões atualizadas</strong>',
	'LOG_NEW_USER_CREATED'			=> '<strong>Novo usuário criado</strong>',
	'LOG_SUCCESSFUL'				=> '<strong>login realizado com sucesso</strong>',

	'MANAGE_DEFAULTS'				=> 'Gerenciar configurações',
));
