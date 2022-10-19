<?php

use MongoDB\Driver\ReadPreference;

class ConnectionTest extends \PHPUnit\Framework\TestCase {
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $host = getenv('MONGO_HOST');
        $client = new MongoDB\Client(
            'mongodb://'.$host.'@27017/test?retryWrites=true&w=majority'
        );

        $collection = $client->demo->beers;

        $result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );
        var_dump($result->getInsertedId());
        $this->assertNotNull($result->getInsertedId());
    }
}