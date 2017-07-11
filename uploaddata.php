<?php

    // Date now needs to be set, which I guess is a good thing!
    date_default_timezone_set('Europe/London');

    // Find out what the issues are:
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);

     require '/var/www/html/vendor/autoload.php';
    use aws\DynamoDb\DynamoDbClient;
    
    $client = DynamoDbClient::factory(array(
        'region' => 'us-east-1b',  // replace with your desired region visit http://docs.aws.amazon.com/general/latest/gr/rande.html to get your regions.
        'version' => '2012-08-10' // Now needs a version
    )); 

    # Setup some local variables for dates

    date_default_timezone_set('UTC');

    $oneDayAgo = date('Y-m-d H:i:s', strtotime('-1 days'));
    $sevenDaysAgo = date('Y-m-d H:i:s', strtotime('-7 days'));
    $fourteenDaysAgo = date('Y-m-d H:i:s', strtotime('-14 days'));
    $twentyOneDaysAgo = date('Y-m-d H:i:s', strtotime('-21 days'));

    $tableName = 'TrendNextStatus';
    echo "Adding data to the $tableName table..." . PHP_EOL;

    $response = $client->batchWriteItem(array(
        'RequestItems' => array(
            $tableName => array(
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Didhy'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Dipin'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'VidhyaSree'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Ankit'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Tobin'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Saju'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Savitha'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
                array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Jibu'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
				array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Sreeram'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
				array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Linjo'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
				array(
                    'PutRequest' => array(
                        'Item' => array(
                            'Name'              => array('S' => 'Priya'),
                            'Practice Skill'    => array('S' => 'Windows Internal'),
                            'Project Skill'     => array('S' => 'Python'),
                            'Aspiration'        => array('S' => 'Selenium'),
                            'Acquired score'    => array('N' => '12'),
                            'Required score'    => array('N' => '200'),
                            'Completion status' => array('S' => 'Pending')
                        )
                    ),
                ),
            ),
        ),
    ));

    echo "done." . PHP_EOL;