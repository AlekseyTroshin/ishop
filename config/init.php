<?php

define("ROOT", dirname(__DIR__));

const DEBUG = true; // режим разработки true-разработка false-prod
const WWW = ROOT . '/public'; // путь к публичной папкe
const APP = ROOT . '/app';
const CORE = ROOT . '/core';
const HELPERS = CORE . '/helpers';
const CACHE = ROOT . '/tmp/cache';
const LOGS = ROOT . '/tmp/logs';
const CONFIG = ROOT . '/config';
const LAYOUT = 'ishop';
const PORT = 8888;
const PATH = 'http://localhost:' . PORT;
const ADMIN = 'http://localhost:' . PORT . '/admin';
const NO_IMAGE = '/public/uploads/no_image.jpg';

require_once ROOT . '/vendor/autoload.php';
