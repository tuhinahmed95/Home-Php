<?php


function fix_array($arr) {
    // প্রথমে অ্যারে থেকে ডুপ্লিকেট সরিয়ে ফেলুন
    $unique_arr = array_unique($arr);
    
    // তারপর অ্যারেটিকে ঊর্ধ্বক্রমে সাজান
    sort($unique_arr);
    
    // সাজানো অ্যারেটি ফেরত দিন
    return $unique_arr;
}



