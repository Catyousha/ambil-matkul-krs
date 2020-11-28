<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);
$matkul = [
  "id" => ["NINF6023","NINF6025","NINF6027","NINF6022","NINF6024","NINF6026","NINF6030","NINF6033","NINF6028","NINF6031","NINF6029","NINF6037","NINF6034","NINF6032","NINF6036","NINF6038","NINF6035","UPKL6090","NINF6100","NINF6044","NINF6056","NINF6055"],
  "data" => [
              [
                "nama_mk" => "Rekayasa Perangkat Lunak", //NINF6023
                "jadwal_mk" => "Senin, 12:00-15:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Komputasi Numerik", //NINF6025
                "jadwal_mk" => "Senin, 15:00-17:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Pemrograman Deklaratif", //NINF6027
                "jadwal_mk" => "Selasa, 07:00-09:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6006"
                ]
              ],
              [
                "nama_mk" => "Probabilitas dan Statistik", //NINF6022
                "jadwal_mk" => "Selasa, 09:00-11:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Komunikasi Data dan Jaringan Komputer", //NINF6024
                "jadwal_mk" => "Selasa, 11:00-13:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Grafika Komputer", //NINF6026
                "jadwal_mk" => "Selasa, 11:00-13:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6014"
                ]
              ],
              [
                "nama_mk" => "Proyek Perangkat Lunak", //NINF6030
                "jadwal_mk" => "Senin, 07:00-10:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6023"
                ]
              ],
              [
                "nama_mk" => "Analisis dan Desain Sistem",//NINF6033
                "jadwal_mk" => "Senin, 10:00-12:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6023"
                ]
              ],
              [
                "nama_mk" => "Kecerdasan Buatan",//NINF6028
                "jadwal_mk" => "Selasa, 13:00-15:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6006"
                ]
              ],
              [
                "nama_mk" => "Analisis dan Desain Algoritma",//NINF6031
                "jadwal_mk" => "Selasa, 15:00-17:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6012"
                ]
              ],
              [
                "nama_mk" => "Multimedia",//NINF6029
                "jadwal_mk" => "Rabu, 07:00-10:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Sosioteknologi Informatika",//NINF6037
                "jadwal_mk" => "Rabu, 10:00-12:00",
                "sks" => 2,
                "mk_prasyarat" => [
                  "NINF6004"
                ]
              ],
              [
                "nama_mk" => "Metodologi Penelitian",//NINF6034
                "jadwal_mk" => "Rabu, 12:00-14:00",
                "sks" => 2,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Interaksi Manusia dan Komputer",//NINF6032
                "jadwal_mk" => "Rabu, 14:00-17:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Mobile dan Wireless Computing",//NINF6036
                "jadwal_mk" => "Kamis, 07:00-10:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  "NINF6024"
                ]
              ],
              [
                "nama_mk" => "Seminar Pra Skripsi",//NINF6038
                "jadwal_mk" => "Kamis, 11:00-12:00",
                "sks" => 1,
                "mk_prasyarat" => [
                  "NINF6034"
                ]
              ],
              [
                "nama_mk" => "Technopreneurship",//NINF6035
                "jadwal_mk" => "Kamis, 12:00-14:00",
                "sks" => 2,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Praktik Kerja Industri",//UPKL6090
                "jadwal_mk" => "Kamis, 14:00-17:00",
                "sks" => 4,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Skripsi",//UPKL6100
                "jadwal_mk" => "Jumat, 07:00-10:00",
                "sks" => 4,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Proyek Game",//NINF6044
                "jadwal_mk" => "Jumat, 10:00-13:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Semantic Web",//NINF6056
                "jadwal_mk" => "Jumat, 13:00-16:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
              [
                "nama_mk" => "Computer Vision",//NINF6055
                "jadwal_mk" => "Jumat, 13:00-16:00",
                "sks" => 3,
                "mk_prasyarat" => [
                  ""
                ]
              ],
            ]
];


defined('matkul') OR define('matkul', $matkul);


/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
