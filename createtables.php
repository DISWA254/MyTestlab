<?php

    //Code is provided by AWS and available here; http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/AppendixSampleDataCodePHP.html

    

    // Date now needs to be set, which I guess is a good thing!

    date_default_timezone_set('Europe/London');

    

    // Find out what the issues are:

    ini_set('display_errors',1);

    ini_set('display_startup_errors',1);

    error_reporting(-1);

    

    require '/var/www/html/vendor/autoload.php';

    use Aws\DynamoDb\DynamoDbClient;

    

    $client = DynamoDbClient::factory(array(

        'region' => 'us-east-1b',  // replace with your desired region visit http://docs.aws.amazon.com/general/latest/gr/rande.html to get your regions.

        'version' => '2012-08-10' // Now needs a version

    ));

    

    $tableNames = array();

    

    $tableName = 'TrendNextStatus';

    echo "Creating table $tableName..." . PHP_EOL;

    

    $response = $client->createTable(array(

        'TableName' => $tableName,

        'AttributeDefinitions' => array(

            array(

                'AttributeName' => 'EmployeeName',

                'AttributeType' => 'S' 

            )

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'EmployeeName',

                'KeyType' => 'HASH' 

            )

        ),

        'ProvisionedThroughput' => array(

             'ReadCapacityUnits'    => 10,

             'WriteCapacityUnits' => 5

        )

    ));

    $tableNames[] = $tableName;

    

    $tableName = 'Forum';

    echo "Creating table $tableName..." . PHP_EOL;

    

    $response = $client->createTable(array(

        'TableName' => $tableName,

        'AttributeDefinitions' => array(

            array(

                'AttributeName' => 'Practice Skill',

                'AttributeType' => 'S' 

            )

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'Practice Skill',

                'KeyType' => 'HASH'

            )

        ),

        'ProvisionedThroughput' => array(

            'ReadCapacityUnits'    => 10,

            'WriteCapacityUnits' => 5

        )

    ));

    $tableNames[] = $tableName;

    

    $tableName = 'Thread';

    echo "Creating table $tableName..." . PHP_EOL;

    

    $response = $client->createTable(array(

        'TableName' => $tableName,

        'AttributeDefinitions' => array(

            array(

                'AttributeName' => 'Project Skill',

                'AttributeType' => 'S' 

            )

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'Project Skill',

                'KeyType' => 'HASH' 

            )

        ),

        'ProvisionedThroughput' => array(

            'ReadCapacityUnits'    => 10,

            'WriteCapacityUnits' => 5

        )

    ));

    $tableNames[] = $tableName;

    

    $tableName = 'Reply';

    echo "Creating table $tableName..." . PHP_EOL;

    

    $response = $client->createTable(array(

        'TableName' => $tableName,

        'AttributeDefinitions' => array(

            array(

                'AttributeName' => 'Aspiration',

                'AttributeType' => 'S' 

            )

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'Aspiration',

                'KeyType' => 'HASH' 

            )

        ),
   $response = $client->createTable(array(

        'TableName' => $tableName,

        'AttributeDefinitions' => array(

            array(

                'AttributeName' => 'Required Score',

                'AttributeType' => 'N' 

            )

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'Required Score',

                'KeyType' => 'HASH' 

            )

        ),
		   $response = $client->createTable(array(

        'TableName' => $tableName,

        'AttributeDefinitions' => array(

            array(

                'AttributeName' => 'Acquired Score',

                'AttributeType' => 'N' 

            )

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'Acquired Score',

                'KeyType' => 'HASH' 

            )

        ),
        'LocalSecondaryIndexes' => array(

            array(

                'IndexName' => 'PostedBy-index',

                'KeySchema' => array(

                    array(

                        'AttributeName' => 'Name',

                        'KeyType' => 'HASH'

                    ),

                    array(

                        'AttributeName' => 'PostedBy',

                        'KeyType' => 'RANGE'

                    ),

                ),

                'Projection' => array(

                    'ProjectionType' => 'KEYS_ONLY',

                ),

            ),

        ),

        'KeySchema' => array(

            array(

                'AttributeName' => 'Id',

                'KeyType' => 'HASH' 

            ),

            array(

                'AttributeName' => 'ReplyDateTime',

                'KeyType' => 'RANGE'

            )

        ),

        'ProvisionedThroughput' => array(

            'ReadCapacityUnits'    => 10,

            'WriteCapacityUnits' => 5

        )

    ));

    $tableNames[] = $tableName;

    

    foreach($tableNames as $tableName) {

        echo "Waiting for table $tableName to be created." . PHP_EOL;

        $client->waitUntil('TableExists', array('TableName' => $tableName)); // Changed from v2

        echo "Table $tableName has been created." . PHP_EOL;

    }
