<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//geshi languages
$config['geshi_languages'] = array(
    '4cs' => '4CS',
    '6502acme' => 'MOS 6502',
    '6502kickass' => 'MOS 6502 Kick Assembler',
    '6502tasm' => 'MOS 6502 TASM/64TASS',
    '68000devpac' => 'Motorola 68000 Devpac Assembler',
    'abap' => 'ABAP',
    'actionscript' => 'Actionscript',
    'actionscript3' => 'ActionScript3',
    'ada' => 'Ada',
    'aimms' => 'AIMMS',
    'algol68' => 'ALGOL 68',
    'apache' => 'Apache',
    'applescript' => 'AppleScript',
    'apt_sources' => 'Apt sources.list',
    'arm' => 'ARM Assembler',
    'asm' => 'x86 Assembler',
    'asymptote' => 'asymptote',
    'asp' => 'ASP',
    'autoconf' => 'autoconf',
    'autohotkey' => 'Autohotkey',
    'autoit' => 'AutoIT',
    'avisynth' => 'AviSynth',
    'awk' => 'Awk',
    'bascomavr' => 'BASCOM AVR',
    'bash' => 'Bash',
    'basic4gl' => 'Basic4GL',
    'bbcode' => 'BBCode',
    'bf' => 'Brainfuck',
    'bibtex' => 'BibTeX',
    'blitzbasic' => 'BlitzBasic',
    'bnf' => 'BNF (Backus-Naur form)',
    'boo' => 'Boo',
    'c' => 'C',
    'c_loadrunner' => 'C (for LoadRunner)',
    'c_mac' => 'C for Macs',
    'c_winapi' => 'C with WiAPI',
    'cpp' => 'C++',
    'caddcl' => 'CAD DCL (Dialog Control Language)',
    'cadlisp' => 'AutoCAD/IntelliCAD Lisp',
    'cfdg' => 'CFDG',
    'cfm' => 'ColdFusion',
    'chaiscript' => 'ChaiScript',
    'chapel' => 'Chapel',
    'cil' => 'CIL (Common Intermediate Language)',
    'clojure' => 'Clojure',
    'cmake' => 'CMake',
    'cobol' => 'COBOL',
    'coffeescript' => 'CoffeeScript',
    'cpp-winapi' => 'C++ with WinAPI',
    'csharp' => 'C#',
    'css' => 'CSS',
    'cuesheet' => 'Cuesheet',
    'd' => 'D',
    'dart' => 'Dart',
    'dcs' => 'DCS',
    'dcl' => 'DCL',
    'dcpu16' => 'DCPU/16 Assembly',
    'delphi' => 'Delphi (Object Pascal)',
    'diff' => 'Diff-output',
    'div' => 'DIV',
    'dos' => 'DOS',
    'dot' => 'dot',
    'e' => 'E',
    'ecmascript' => 'ECMAScript',
    'eiffel' => 'Eiffel',
    'email' => 'Email (mbox/eml/RFC format)',
    'epc' => 'Enerscript',
    'erlang' => 'Erlang',
    'euphoria' => 'Euphoria',
    'ezt' => 'EZT',
    'f1' => 'Formula One',
    'falcon' => 'Falcon',
    'fo' => 'fo',
    'fortran' => 'Fortran',
    'freebasic' => 'FreeBasic',
    'freeswitch' => 'FreeSWITCH',
    'fsharp' => 'F#',
    'gambas' => 'GAMBAS',
    'gdb' => 'GDB',
    'genero' => 'Genero',
    'genie' => 'Genie',
    'gettext' => 'GNU Gettext .po/.pot',
    'glsl' => 'glSlang',
    'gml' => 'GML',
    'gnuplot' => 'Gnuplot script',
    'go' => 'Go',
    'groovy' => 'Groovy',
    'gwbasic' => 'GwBasic',
    'haskell' => 'Haskell',
    'haxe' => 'Haxe',
    'hicest' => 'HicEst',
    'hq9plus' => 'HQ9+',
    'html4strict' => 'HTML 4.01 strict',
    'html5' => 'HTML5',
    'icon' => 'Icon',
    'idl' => 'Unoidl',
    'ini' => 'INI',
    'inno' => 'Inno Script',
    'intercal' => 'INTERCAL',
    'io' => 'Io',
    'ispfpanel' => 'ISPF Panel',
    'j' => 'J',
    'java' => 'Java',
    'java5' => 'Java 5',
    'javascript' => 'JavaScript',
    'jcl' => 'Job Control Language',
    'jquery' => 'jQuery 1.3',

    //'kixtart' => 'PHP',
    'klonec' => 'KLone with C',
    'klonecpp' => 'KLone with C++',
    'kotlin' => 'Kotlin',
    'latex' => 'LaTeX',
    'lb' => 'Liberty BASIC',
    'ldif' => 'LDIF',
    'lisp' => 'Generic Lisp',
    'llvm' => 'LLVM',
    'locobasic' => 'Locomotive Basic (Amstrad CPC series)',
    'logcat' => 'Logcat',
    'logtalk' => 'Logtalk',
    'lolcode' => 'LOLcode',
    'lotusformulas' => '@Formula/@Command',
    'lotusscript' => 'LotusScript',
    'lscript' => 'Lightwave Script',
    'lsl2' => 'Linden Scripting',
    'lua' => 'Lua',
    'm68k' => 'Motorola 68000 Assembler',
    'magiksf' => 'MagikSF',
    'make' => 'Make',
    'mapbasic' => 'MapBasic',
    'matlab' => 'Matlab M-file',
    'mirc' => 'mIRC Scripting',
    'mmix' => 'MMIX Assembler',
    'modula2' => 'Modula-2',
    'modula3' => 'Modula-3',
    'mpasm' => 'Microchip Assembler',
    'mxml' => 'MXML',
    'mysql' => 'MySQL',
    'nagios' => 'Nagios',
    'netrexx' => 'NetRexx',
    'newlisp' => 'newLISP',
    'nginx' => 'nginx',
    'nimrod' => 'Nim',
    'nsis' => 'Nullsoft Scriptable Install System',
    'oberon2' => 'Oberon-2',
    'objc' => 'Objective-C',
    'objeck' => 'Objeck Programming Language',
    'ocaml' => 'OCaml (Objective Caml)',
    'octave' => 'GNU Octave M-file',
    'oobas' => 'OpenOffice.org Basic',
    'oorexx' => 'ooRexx',
    'oracle11' => 'Oracle 11i',
    'oracle8' => 'Oracle 8',
    'oxygene' => 'Delphi Prism (Oxygene)',
    'oz' => 'Oz',
    'parasail' => 'ParaSail',
    'parigp' => 'PARI/GP',
    'pascal' => 'Pascal',
    'pcre' => 'PCRE',
    'per' => 'Per (forms)',
    'perl' => 'Perl',
    'perl6' => 'Perl 6',
    'pf' => 'OpenBSD packet filter',
    'php' => 'PHP',
    'pic16' => 'PIC16 Assembler',
    'pike' => 'Pike',
    'pixelbender' => 'Pixel Bender 1.0',
    'pli' => 'PL/I',
    'plsql' => 'Oracle 9.2 PL/SQL',
    'postgresql' => 'PostgreSQL',
    'postscript' => 'Postscript',
    'povray' => 'Povray',
    'powerbuilder' => 'PowerBuilder (PowerScript)',
    'powershell' => 'PowerShell',
    'proftpd' => 'ProFTPd',
    'progress' => 'Progress',
    'prolog' => 'Prolog',
    'properties' => 'Property',
    'providex' => 'ProvideX',
    'purebasic' => 'PureBasic',
    'pys60' => 'Python for S60',
    'python' => 'Python',
    'q' => 'q/kdb+',
    'qbasic' => 'QBasic/QuickBASIC',
    'qml' => 'QML',
    'racket' => 'Racket',
    'rails' => 'Ruby (with Ruby on Rails Framework)',
    'rbs' => 'RBS Script',
    'rebol' => 'Rebol',
    'reg' => 'Microsoft Registry Editor',
    'rexx' => 'Rexx',
    'robots' => 'robots.txt',
    'roff' => 'Roff',
    'rpmspec' => 'RPM Spec',
    'rsplus' => 'R',
    'ruby' => 'Ruby',
    'rust' => 'Rust',
    'sas' => 'SAS',
    'scala' => 'Scala',
    'scheme' => 'Scheme',
    'scilab' => 'SciLab',
    'scl' => 'SCL',
    'sdlbasic' => 'sdlBasic',
    'smalltalk' => 'Smalltalk',
    'smarty' => 'Smarty template',
    'spark' => 'SPARK',
    'sparql' => 'SPARQL',
    'sql' => 'SQL',
    'sshconfig' => 'OpenSSH config',
    'standardml' => 'StandardML',
    'stonescript' => 'StoneScript',
    'systemverilog' => 'SystemVerilog IEEE 1800-2009(draft8)',
    'tcl' => 'TCL/iTCL',
    'teraterm' => 'Tera Term Macro',
    'text' => 'Plain Text',
    'thinbasic' => 'thinBasic',
    'tsql' => 'T-SQL',
    'typoscript' => 'TypoScript',
    'unicon' => 'Unicon',
    'uscript' => 'UnrealScript',
    'upc' => 'UPC',
    'urbi' => 'Urbi',
    'vala' => 'Vala',
    'vb' => 'Visual Basic',
    'vbnet' => 'VB.NET',
    'vbscript' => 'VBScript',
    'vedit' => 'Vedit macro language',
    'verilog' => 'Verilog',
    'vhdl' => 'VHDL',
    'vim' => 'Vim scripting',
    'visualfoxpro' => 'Visual FoxPro',
    'visualprolog' => 'Visual Prolog',
    'whitespace' => 'Whitespace',
    'whois' => 'Whois response (RPSL format)',
    'winbatch' => 'WinBatch',
    'wolfram' => 'Wolfram language',
    'xbasic' => 'XBasic',
    'xml' => 'XML',
    'xorg_conf' => 'xorg.conf',
    'xpp' => 'Axapta/Dynamics Ax X++',
    'yaml' => 'YAML',
    'z80' => 'ZiLOG Z80 Assembler',
    'zxbasic' => 'ZXBasic',
);
