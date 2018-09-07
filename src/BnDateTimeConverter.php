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
    public function getConvertedDateTime($date, $type, $format){
        // BnBn
        // EnBn
        // BnEn
        // EnEn
        if($format == ''){
            if($type == 'BnBn' || $type == 'BnEn'){
                $format = 'l jS F Y b h:i:s';
            }
            else{
                $format = 'l jS F Y b h:i:s a';
            }
        }
        $bangla = new CoreBnDateTime($date, new DateTimeZone('Asia/Dhaka'));
        $output     = '';
        switch ($type) {
            case 'BnBn':
                $output     = $bangla->format($format) . PHP_EOL ;
                break;
            
            case 'EnBn':
                $output     = $bangla->enFormat($format) . PHP_EOL;
                break;

            case 'BnEn':
                $output     = $bangla->getDateTime()->format($format). PHP_EOL;
                break;
            
            case 'EnEn':
                $output     = $bangla->getDateTime()->enFormat($format) . PHP_EOL;
                break;
            
            default:
                $output = 'Invalid Arguments Given';
                break;
        }

        return $output;
    }
}
