<?php 
/**
 * Retourne un json sérializer pour permettre l'appel à l'ajax cotée 
 * navigateur. 
 * Cette class return un tableau de Json comme par exemple
 * [
 *  't-1':'Titre',
 * 't-2': 'Desription',
 * 'date': '20/03/2024 14:30:00'
 * ]
 */
class ModelJson implements JsonSerializable
{
    private array $array;
    //Constructeur de la classe
    public function __construct(array $array) {
        $this->array = $array;
    }

    //REtour vers Json
    public function jsonSerialize(): mixed {
        return $this->array;
    }

    /**
     * REcupération des élément sous json pour permmettre le fetch
     */
    public function json_return()
    {
        return json_encode($this->jsonSerialize(), JSON_PRETTY_PRINT);
    }
}