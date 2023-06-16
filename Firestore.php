<?php

require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

class Firestore
{
    protected $db;
    protected $name;

    public function __construct(string $collection)
    {
        $this->db = new FirestoreClient([
            'projectId' => 'myx-baggage' //Get firestore project id
        ]);

        $this->name = $collection;
    }

    // public function queryDocumentForData(string $docuName)
    // {
    //     try
    //     {
    //         if ($this->db->collection($this->name))
    //     }
    //     catch (Exception $exception)
    //     {
    //         return $exception->getMessage();
    //     }
    // }

    public function getDocument(string $name)
    {
        try {
            if ($this->db->collection($this->name)->document($name)->snapshot()->exists()) {
                return $this->db->collection($this->name)->document($name)->snapshot()->data();
            }
            else {
                throw new Exception('Document does not exist');
            }
        }
        catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function getWhere(string $field, string $operator, $value)
    {
        $arr = [];
        $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();

        if (!empty($query)) {
            foreach ($query as $item) {
                $arr = $item->data();
            }
        }

        return $arr;
    }

    public function newDocument(string $name, array $data = [])
    {
        try {
            $this->db->collection($this->name)->document($name)->create($data);
            return true;
        }
        catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function newCollection(string $name, string $doc_name, array $data = [])
    {
        try {
            $this->db->collection($name)->document($doc_name)->create($data);
        }
        catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    //Delete all documents in a collection
    public function dropDocument(string $name)
    {
        $this->db->collection($this->name)->document($name)->delete();
    }

    //Delete entire collection
    public function dropCollection(string $name)
    {
        $documents = $this->db->collection($name)->limit(1)->documents();
        while (!$documents->isEmpty())
        {
            foreach($documents as $item) {
                $item->reference()->delete();
            }
        }
    }

    //Display all documents
    public function retrieveAllFlightData()
    {
        $flightRef = $this->db->collection($this->name);
        $snapshot = $flightRef->documents();
        $flightNo = 0;

        foreach($snapshot as $flight)
        {
            $flightNo++;
            print('<tr>');
            printf('<td>%s</td>', $flightNo);
            printf('<td>%s</td>', $flight->id());
            printf('<td>%s</td>', $flight['aircraft']);
            printf('<td>%s</td>', $flight['flightDate']);
            printf('<td>%s</td>', $flight['departLocation']);
            printf('<td>%s</td>', $flight['arriveLocation']);
            printf('<td>%s</td>', $flight['departTime']);
            printf('<td>%s</td>', $flight['departLocation']);
            print('</tr>');
        }
    }

    public function searchForAirportName(string $id)
    {
        $ref = $this->db->collection($this->name);
        $snapshot = $ref->documents();

        foreach($snapshot as $airport)
        {
            if ($airport->id() == $id)
            {
                return $airport['airportName'];
            }
        }
    }
}

?>