<?php

    $array_geojson = array(
       'type'      => 'FeatureCollection',
       'features'  => array()
    );

    foreach ($locaties as $item) {

      $feature = array(
             'type' => 'Feature',
             'geometry' => array(
              'type' => 'Point',
              'coordinates' => array($item['long'],$item['lat'])),
             'properties' => array(
              'title' => $item['title'],
              'description' => $item['description'],
                    'marker-color' => $item['marker-color'],
                    'marker-size' => $item['marker-size'],
                    'marker-symbol' => $item['marker-symbol']
              )
        );
        
        array_push($array_geojson['features'], $feature);

    }

    header('Content-type: application/json');
    echo json_encode($array_geojson, JSON_NUMERIC_CHECK);

?>