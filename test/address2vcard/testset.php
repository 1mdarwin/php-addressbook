<?php
$tests[0] = array( "input" => "Bahnhofstr. 1\n8000 Z�rich"
                 , "output" => array( "pbox"      => ""
                                    , "street"    => "Bahnhofstr."
                                    , "street_nr" => "1"
                                    , "addr"      => "Bahnhofstr. 1"
                                    , "exta"      => ""
                                    , "zip"       => "8000"
                                    , "city"      => "Z�rich"
                                    , "region"    => ""
                                    , "country"   => ""
                                    )
                 );
      
$tests[1] = array( "input" => "Bahnhofstr. 1\nZ�rich"
                 , "output" => array( "pbox"      => ""
                                    , "street"    => "Bahnhofstr."
                                    , "street_nr" => "1"
                                    , "addr"      => "Bahnhofstr. 1"
                                    , "exta"      => ""
                                    , "zip"       => ""
                                    , "city"      => "Z�rich"
                                    , "region"    => ""
                                    , "country"   => ""
                                    )
                 );

$tests[2] = array( "input" => "Bahnhofstr.\n8000 Z�rich"
                 , "output" => array( "pbox"      => ""
                                    , "street"    => "Bahnhofstr."
                                    , "street_nr" => ""
                                    , "addr"      => "Bahnhofstr."
                                    , "exta"      => ""
                                    , "zip"       => "8000"
                                    , "city"      => "Z�rich"
                                    , "region"    => ""
                                    , "country"   => ""
                                    )
                 );

$tests[3] = array( "input" => "Bahnhofstr.\n8000 Z�rich\nSchweiz"
                 , "output" => array( "pbox"    => ""
                                    , "street"  => "Bahnhofstr."
                                    , "exta"    => ""
                                    , "zip"     => "8000"
                                    , "city"    => "Z�rich"
                                    , "region"  => ""
                                    , "country" => "Schweiz"
                                    )
                 );

$tests[4] = array( "input" => "c/o bei Gugus\nBahnhofstr. 1\n8000 Z�rich\nSchweiz"
                 , "output" => array( "pbox"    => ""
                                    , "street"    => "Bahnhofstr."
                                    , "street_nr" => "1"
                                    , "addr"      => "Bahnhofstr. 1"
                                    , "exta"    => "c/o bei Gugus"
                                    , "zip"     => "8000"
                                    , "city"    => "Z�rich"
                                    , "region"  => ""
                                    , "country" => "Schweiz"
                                    )
                 );

$tests[5] = array( "input" => ""
                 , "output" => array( "pbox"      => ""
                                    , "street"    => ""
                                    , "street_nr" => ""
                                    , "addr"      => ""
                                    , "exta"      => ""
                                    , "zip"       => ""
                                    , "city"      => ""
                                    , "region"    => ""
                                    , "country"   => ""
                                    )
                 );
?>