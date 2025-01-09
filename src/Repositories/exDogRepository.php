<?php

class DogRepository{

    private PDO $pdo;
    private DogMapper $mapper;
    private DateTimeImmutable $createdAt;


    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->mapper = new DogMapper();
        $this->createdAt = new DateTimeImmutable();
    }


    public function findById(int $id): ?Dog {
        $sql = "SELECT * FROM dog WHERE id = :id";

        try{
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([":id" => $id]);
        $dogData = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur";
        }


        $dog = DogMapper::MapData($dogData);

        return $dog ? $dog : null;


    }
}