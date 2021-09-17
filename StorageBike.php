<?php

class StorageBike
{
private string $fileName;

    /**
     * @param string $fileName
     */
    public function __construct(string $fileName = 'bikes.csv')
    {
        $this->fileName = $fileName;
    }

    public function load(){
        $data = [];
        $f = fopen($this->fileName, "r");
        if ($f === false){
            echo "Error";
        }
        while (($row = fgetcsv($f)) !== false){
            $data[] = $row;
        }
        fclose($f);
        return $data;
    }

}