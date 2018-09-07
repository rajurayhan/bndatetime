# Bangla Date Time Converter!

This package Convert Date Time to Bangla Date Time using EasyBanglaDate. 


# Dependency

 -  Laravel >=5.2 
 - ronisaha/easy-bangla-date

## Installation

Install EasyBanglaDate in your Project via composer

    composer require ronisaha/easy-bangla-date
Install Bangla Date Converter via Composer

    composer require rajurayhan/bndatetime

## Usage

    use Rajurayhan\Bndatetime\BnDateTimeConverter; // on Top
    
    $dateConverter  =  new  BnDateTimeConverter();
    $dateConverter->getConvertedDateTime('2018-09-07 12:19:50 pm',  'EnBn'); // Friday 23rd Bhadra 1425 12:19:50 pm
    $dateConverter->getConvertedDateTime('2018-09-07 12:19:50 pm',  'BnBn'); // শুক্রবার ২৩শে ভাদ্র ১৪২৫ দুপুর ১২:১৯:৫০
    $dateConverter->getConvertedDateTime('2018-09-07 12:19:50 pm',  'BnEn'); // শুক্রবার ৭ই সেপ্টেম্বর ২০১৮ দুপুর ১২:১৯:৫০
    $dateConverter->getConvertedDateTime('2018-09-07 12:19:50 pm',  'EnEn'); // Friday 7th September 2018 12:19:50 PM

## Find Me
	Email: devraju.bd@gmail.com 