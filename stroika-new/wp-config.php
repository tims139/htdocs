<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'str-new');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x;vGut:VX3hEyk>b21:`nJ.7_;uxD@`#Q>,[{|%D6bmFIbnlHxTI9tx6z(&[{dp-');
define('SECURE_AUTH_KEY',  'b[S1F]N!Jm}:hymRZU,y-:hNxq0S5/<D;zoPDp>sE@fecQ.{I7#@*y}&/%^}0}MS');
define('LOGGED_IN_KEY',    '_r9@t}tJVZkXJ!tiz42J479^Z8)L#H#IdFLr2#DLs,!}/%4~Bi>8qh~)f#p`Y[~-');
define('NONCE_KEY',        'ifL<l)N`bP4fa8 mf?u+(5HAC`Yt|cOHHt[0A|K1Y>[CxHIpwh{x[Ta!2m Q`dh4');
define('AUTH_SALT',        'w&y[q-eYiI(w&by;4e>/./:_-~4?>-J!J7O3SIkYhCFuIjPBHN:%pOC|?q*H>2]<');
define('SECURE_AUTH_SALT', '=|6t!CaA@Pyopfu9.{>lD;,@u{c#[5J*`,1Kf1([M5O<qgXAtR^Hu;R1{a:OnbU8');
define('LOGGED_IN_SALT',   'I,KB+MD+?y_eBt<%,|Y7/{!7q<iudIDs[@Y1{n##cY)Ga8ujAHPuB*p7#-bw^Vk7');
define('NONCE_SALT',       'NZcQV^)@xk^M3xFlCvpcNFKWX%`hv*rrp&%JZR}CM;U8$bp!/k@a?^5~}tb>[$o<');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
