<?php

return [

    'driver' => 'gd', // or imagick

    'base_url' => 'http://iiif.test',

    'prefix' => 'iiif',

    'allow_upscaling' => true,

    'tile_width' => 1024,

    'quality' => 90,

    'parameters' => [
        'region' => \Conlect\ImageIIIF\Parameters\Region::class,
        'size' => \Conlect\ImageIIIF\Parameters\Size::class,
        'rotation' => \Conlect\ImageIIIF\Parameters\Rotation::class,
        'quality' => \Conlect\ImageIIIF\Parameters\Quality::class,
        'format' => \Conlect\ImageIIIF\Parameters\Format::class,
    ],

    'mime' => [
        'jpg' => 'image/jpeg',
        'tif' => 'image/tiff',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'jp2' => 'image/jp2',
        'pdf' => 'application/pdf',
        'webp' => 'image/webp',
    ],

    'maxArea' => null,
    'maxHeight' => null,
    'maxWidth' => null,

    'qualities' => [
        'color',
        'gray',
        'bitonal',
        'default',
    ],

    'quality_default' => 'color',

    'supports' => [
        'baseUriRedirect', // The base URI of the service will redirect to the image information document.
        'canonicalLinkHeader', //
        'cors',
    ],
];
