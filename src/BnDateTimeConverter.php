<?php

/*
 * This file is part of the BnDateTime package.
 *
 * Copyright (c) 2018 Raju Rayhan
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Rajurayhan\Bndatetime;

use EasyBanglaDate\Types\BnDateTime as CoreBnDAteTime;
use EasyBanglaDate\Types\DateTime as EnDateTime;
use DateTimeZone;

class BnDateTimeConverter
{
    public function getConvertedDateTime($date, $format){
        // BnBn
        // EnBn
        // BnEn
        // EnEn
        $bangla = new CoreBnDateTime($date, new DateTimeZone('Asia/Dhaka'));
        $output     = '';
        switch ($format) {
            case 'BnBn':
                $output     = $bangla->format('l jS F Y b h:i:s') . PHP_EOL ;
                break;
            
            case 'EnBn':
                $output     = $bangla->enFormat('l jS F Y h:i:s a') . PHP_EOL;
                break;

            case 'BnEn':
                $output     = $bangla->getDateTime()->format('l jS F Y b h:i:s'). PHP_EOL;
                break;
            
            case 'EnEn':
                $output     = $bangla->getDateTime()->enFormat('l jS F Y h:i:s A') . PHP_EOL;
                break;
            
            default:
                $output = 'Invalid Arguments Given';
                break;
        }

        return $output;
    }
}