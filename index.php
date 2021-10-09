<?php

$xml_input_file = 'feed.xml';
$xml_output_file = 'feed_output.xml';

$reader = new XMLReader();
$reader->open($xml_input_file);
$writer = new XMLWriter();
$writer->openUri($xml_output_file);

$now = new DateTime( "now", new DateTimeZone( "Europe/Berlin" ) );
$now_formatted = $now->format( 'H:i' );
$today_is = date ('w');

$writer->startDocument();
$writer->startElement('offers');

while ($reader->read()) {
    if ($reader->name === 'offer' && $reader->nodeType == XMLReader::ELEMENT){
    $element = simplexml_load_string($reader->readOuterXml());
    $opening_times = $element->opening_times;
    $opening_times_array = explode('"', $opening_times);
    
        $writer->startElement('offer');
            $writer->startElement('id');
            $writer->startCdata();
            $writer->text($element->id);
            $writer->endCdata();
            $writer->endElement();

            $writer->startElement('name');
            $writer->startCdata();
            $writer->text($element->name);
            $writer->endCdata();
            $writer->endElement();

            $writer->startElement('category');
            $writer->startCdata();
            $writer->text($element->category);
            $writer->endCdata();
            $writer->endElement();

            $writer->startElement('description');
            $writer->startCdata();
            $writer->text($element->description);
            $writer->endCdata();
            $writer->endElement();
            
            $writer->startElement('price');
            $writer->startCdata();
            $writer->text($element->price);
            $writer->endCdata();
            $writer->endElement();

            $writer->startElement('url');
            $writer->startCdata();
            $writer->text($element->url);
            $writer->endCdata();
            $writer->endElement();

            $writer->startElement('image_url');
            $writer->startCdata();
            $writer->text($element->image_url);
            $writer->endCdata();
            $writer->endElement();

            $writer->startElement('opening_times');
            $writer->startCdata();
            $writer->text($element->opening_times);
            $writer->endCdata();
            $writer->endElement();

            if ($today_is === '1'){
                if (isset($opening_times_array[5]) && isset($opening_times_array[9])){
                    if ($now_formatted>$opening_times_array[5] && $now_formatted<$opening_times_array[9]){
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('true');
                        $writer->endCdata();
                        $writer->endElement();
                    } else{
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('false');
                        $writer->endCdata();
                        $writer->endElement();
                    }
                }
            } elseif ($today_is === '2'){
                if (isset($opening_times_array[15]) && isset($opening_times_array[19])){
                    if ($now_formatted>$opening_times_array[15] && $now_formatted<$opening_times_array[19]){
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('true');
                        $writer->endCdata();
                        $writer->endElement();
                    } else{
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('false');
                        $writer->endCdata();
                        $writer->endElement();
                    }
                }
            } elseif ($today_is === '3'){
                if (isset($opening_times_array[25]) && isset($opening_times_array[29])){
                    if (isset($opening_times_array[25]) && isset($opening_times_array[29])){
                            if ($now_formatted>$opening_times_array[25] && $now_formatted<$opening_times_array[29]){
                                $writer->startElement('is_active');
                                $writer->startCdata();
                                $writer->text('true');
                                $writer->endCdata();
                                $writer->endElement();
                            } else{
                                $writer->startElement('is_active');
                                $writer->startCdata();
                                $writer->text('false');
                                $writer->endCdata();
                                $writer->endElement();
                            }
                        }
                }
            } elseif ($today_is === '4'){
                if (isset($opening_times_array[35]) && isset($opening_times_array[39])){
                    if (isset($opening_times_array[35]) && isset($opening_times_array[39])){
                        if ($now_formatted>$opening_times_array[35] && $now_formatted<$opening_times_array[39]){
                            $writer->startElement('is_active');
                            $writer->startCdata();
                            $writer->text('true');
                            $writer->endCdata();
                            $writer->endElement();
                        } else{
                            $writer->startElement('is_active');
                            $writer->startCdata();
                            $writer->text('false');
                            $writer->endCdata();
                            $writer->endElement();
                        }
                    }
                }
            } elseif ($today_is === '5'){
                if (isset($opening_times_array[45]) && isset($opening_times_array[49])){
                    if ($now_formatted>$opening_times_array[45] && $now_formatted<$opening_times_array[49]){
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('true');
                        $writer->endCdata();
                        $writer->endElement();
                    } else{
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('false');
                        $writer->endCdata();
                        $writer->endElement();
                    }
                }
            } elseif ($today_is === '6'){
                if (isset($opening_times_array[55]) && isset($opening_times_array[59])){
                    if ($now_formatted>$opening_times_array[55] && $now_formatted<$opening_times_array[59]){
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('true');
                        $writer->endCdata();
                        $writer->endElement();
                    } else{
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('false');
                        $writer->endCdata();
                        $writer->endElement();
                    }
                }
            } elseif ($today_is === '0'){
                if (isset($opening_times_array[65]) && isset($opening_times_array[69])){
                    if ($now_formatted>$opening_times_array[65] && $now_formatted<$opening_times_array[69]){
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('true');
                        $writer->endCdata();
                        $writer->endElement();
                    } else{
                        $writer->startElement('is_active');
                        $writer->startCdata();
                        $writer->text('false');
                        $writer->endCdata();
                        $writer->endElement();
                    }
                }
            } else {
                $writer->startElement('is_active');
                $writer->startCdata();
                $writer->text('false');
                $writer->endCdata();
                $writer->endElement();
            }
        $writer->endElement();
    }
}
$writer->endElement();
