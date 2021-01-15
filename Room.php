<?php

class Room
{
    public $room_number;
    public $floor;
    public $beds;

    public function __construct($room_number, $floor, $beds)
    {
        $this->room_number = $room_number;
        $this->floor = $floor;
        $this->beds = $beds;
    }

    public function PrintData()
    {
        echo 'Il Numero della stanza: '.$this->room_number.' Il piano e: '.$this->floor.' Il numero di letti: '.$this->beds;
    }
}

$luxury_room = new Room('404', 2, 5);
$luxury_room->PrintData();
