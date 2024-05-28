<?php 

class Connexion 
{
    
    /** @var string $database type de la base de données */
    private string $database;
    /** @var string $host address de la base de donné exemple localhost */
    private string $host;
    /** @var string $databaseName nom de la base de données */
    private string $databaseName;
    /** @var string $username nom d'utilisateur de la base de donnée */
    private string $username;
    /** @var string $password mots de passe de l'utilisateur à la base de donnée */
    private string $password;
    public function __construct(string $database, string $host, string $databaseName, string $username, string $password = "")
    {
        $this->database = $database;
        $this->host = $host;
        $this->databaseName = $databaseName;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Recupération de la connexion vers BD
     * @return \PDO
     */
    public function  getConnexion(): \PDO
    {
        return new \PDO("$this->database:host=$this->host;dbname=$this->databaseName",$this->username,$this->password);
    }

    // EXCEUTER UNE REQUETE DE SELECTION AVEC DES PARAMETTRES
    public function select($query,$params = [])
    {
        $smtp = $this->getConnexion()->prepare($query);
        $smtp->execute($params);
        return $smtp->fetchAll(\PDO::FETCH_ASSOC);
    }

    // PERMET DE FAIRE UNE INSERTION MIS A JOUR OU DE SUPPRESSION AVEC DES PARAMETRE
    public function execute($query, $params = [])
    {
        $smtp = $this->getConnexion()->prepare($query);
        return $smtp->execute($params);
    }

}