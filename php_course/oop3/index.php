<?php

require './vendor/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterface;

// Set the locale to Arabic
Carbon::setLocale('ar');

// Create a Carbon instance
$date = Carbon::now('Asia/Muscat');

// Format the date with translated day/month
echo $date->translatedFormat('l j F Y'); // e.g., "الأحد 27 يوليو 2025"
