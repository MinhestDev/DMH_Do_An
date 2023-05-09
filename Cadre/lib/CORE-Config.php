<?php
// (A) HOST
define("HOST_BASE", "http://localhost/Cadre/"); // CHANGED BY INSTALLER
define("HOST_NAME", parse_url(HOST_BASE, PHP_URL_HOST));
define("HOST_BASE_PATH", parse_url(HOST_BASE, PHP_URL_PATH));
define("HOST_ASSETS", HOST_BASE . "assets/");

// (B) API ENDPOINT
define("HOST_API", HOST_BASE_PATH . "api/");
define("HOST_API_BASE", HOST_BASE . "api/");
define("API_HTTPS", false); // CHANGED BY INSTALLER
define("API_CORS", false); // CHANGED BY INSTALLER
// define("API_CORS", false); // no cors, accept host_name only
// define("API_CORS", true); // any domain + mobile apps
// define("API_CORS", "site-a.com"); // this domain only
// define("API_CORS", ["site-a.com", "site-b.com"]); // multiple domains

// (C) DATABASE
define("DB_HOST", "localhost"); // CHANGED BY INSTALLER
define("DB_NAME", "cadre_db"); // CHANGED BY INSTALLER
define("DB_CHARSET", "utf8");
define("DB_USER", "root"); // CHANGED BY INSTALLER
define("DB_PASSWORD", ""); // CHANGED BY INSTALLER

// (D) AUTOMATIC SYSTEM PATH
define("PATH_LIB", __DIR__ . DIRECTORY_SEPARATOR);
define("PATH_BASE", dirname(PATH_LIB) . DIRECTORY_SEPARATOR);
define("PATH_ASSETS", PATH_BASE . "assets" . DIRECTORY_SEPARATOR);
define("PATH_PAGES", PATH_BASE . "pages" . DIRECTORY_SEPARATOR);

// (E) JSON WEB TOKEN
define("JWT_ALGO", "HS256");
define("JWT_EXPIRE", 0);
define("JWT_ISSUER", "localhost"); // CHANGED BY INSTALLER
define("JWT_SECRET", "12345678"); // CHANGED BY INSTALLER

/* ENABLE THIS SECTION IF USING PUSH NOTIFICATION MODULE
// (F) PUSH NOTIFICATION KEYS
define("PUSH_PUBLIC", "PUBLIC-KEY");
define("PUSH_PRIVATE", "SECRET-KEY");
*/

// (G) ERROR HANDLING
/* (G1) RECOMMENDED FOR LIVE SERVER
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", "PATH/error.log");
define("ERR_SHOW", false); */

// (G2) RECOMMENDED FOR DEVELOPMENT SERVER
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", 1);
ini_set("log_errors", 0);
define("ERR_SHOW", true);