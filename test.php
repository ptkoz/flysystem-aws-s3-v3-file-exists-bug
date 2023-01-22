<?php

require_once __DIR__ . '/vendor/autoload.php';

$flysytsem = new \League\Flysystem\Filesystem(
    new \League\Flysystem\AwsS3V3\AwsS3V3Adapter(
        new \Aws\S3\S3Client([
            'region' => 'PUT AWS REGION HERE',
            'version' => 'latest',
            'credentials' => [
                'key' => 'PUT AWS KEY ID HERE',
                'secret' => 'PUT AWS SECRET HERE',
            ]
        ]),
        'PUT S3 BUCKET NAME HERE'
    ),
);

var_dump($flysytsem->fileExists('/some/non-existing/file')); // must be non-existing file
