<?php

    // Date now needs to be set, which I guess is a good thing!

    date_default_timezone_set('Europe/London');



    // Find out what the issues are:

    ini_set('display_errors',1);

    ini_set('display_startup_errors',1);

    error_reporting(-1);



    require '/var/www/html/vendor/autoload.php';

    use Aws\DynamoDb\DynamoDbClient;



    $client = DynamoDbClient::factory(array(

        'region' => 'eu-west-1',  // replace with your desired region

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

                            'EmployeeName'              => array('S' => 'Didhy'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'Dipin'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'VidhyaSree'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'Ankit'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'Saju'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'Chinju'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'Savitha'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    ),

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'EmployeeName'              => array('S' => 'Jibu'),

                            'Practice Skill'         => array('S' => 'Windows Internal'),

                            'Project Skill'           => array('S' => 'Python'),

                            'Aspiration'      		=> array('S' => 'Selenium'),

                            'Required Score'           => array('N' => '200'),

                            'Acquired Score'            => array('N' => '0')

                        )

                    )

                )

            ),

        ),

    ));



    echo "done." . PHP_EOL;







    $tableName = 'Forum';

    echo "Adding data to the $tableName table..." . PHP_EOL;



    $response = $client->batchWriteItem(array(

        'RequestItems' => array(

            $tableName => array(

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'Name'     => array('S' => 'Amazon DynamoDB'),

                            'Category' => array('S' => 'Amazon Web Services'),

                            'Threads'  => array('N' => '0'),

                            'Messages' => array('N' => '0'),

                            'Views'    => array('N' => '1000')

                        )

                    )

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'Name'     => array('S' => 'Amazon S3'),

                            'Category' => array('S' => 'Amazon Web Services'),

                            'Threads'  => array('N' => '0')

                        )

                    )

                ),

            )

        )

    ));



    echo "done." . PHP_EOL;





    $tableName = 'Reply';

    echo "Adding data to the $tableName table..." . PHP_EOL;



    $response = $client->batchWriteItem(array(

        'RequestItems' => array(

            $tableName => array(

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'Id'            => array('S' => 'Amazon DynamoDB#DynamoDB Thread 1'),

                            'ReplyDateTime' => array('S' => $fourteenDaysAgo),

                            'Message'       => array('S' => 'DynamoDB Thread 1 Reply 2 text'),

                            'PostedBy'      => array('S' => 'User B')

                        )

                    )

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'Id'            => array('S' => 'Amazon DynamoDB#DynamoDB Thread 2'),

                            'ReplyDateTime' => array('S' => $twentyOneDaysAgo),

                            'Message'       => array('S' => 'DynamoDB Thread 2 Reply 3 text'),

                            'PostedBy'      => array('S' => 'User B')

                        )

                    )

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'Id'            => array('S' => 'Amazon DynamoDB#DynamoDB Thread 2'),

                            'ReplyDateTime' => array('S' => $sevenDaysAgo),

                            'Message'       => array('S' => 'DynamoDB Thread 2 Reply 2 text'),

                            'PostedBy'      => array('S' => 'User A')

                        )

                    )

                ),

                array(

                    'PutRequest' => array(

                        'Item' => array(

                            'Id'            => array('S' => 'Amazon DynamoDB#DynamoDB Thread 2'),

                            'ReplyDateTime' => array('S' => $oneDayAgo),

                            'Message'       => array('S' => 'DynamoDB Thread 2 Reply 1 text'),

                            'PostedBy'      => array('S' => 'User A')

                        )

                    )

                )

            ),

        )

    ));



    echo "done." . PHP_E
