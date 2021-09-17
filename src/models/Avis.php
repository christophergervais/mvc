<?php

class Avis extends Db
{

    public static function findByProduit($id)
    {
        $request = 'SELECT * FROM avis WHERE id=:id ORDER BY DATE DESC';
        $response = self::getDb()->prepare($request) ;
        $response->execute($id);

        return $response->fetch(PDO::FETCH_ASSOC);
    }


    public static function findAll()
    {
        $request = 'SELECT * FROM avis';
        $response = self::getDb()->prepare($request);
        $response->execute();

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }



    public static function create(array $data)
    {
        
        $request = "REPLACE INTO avis VALUES (:id,:commentaire ,:note,:utilisateur_id ,:produit_id, :date)";
        $response = self::getDb()->prepare($request);
        $response->execute($data);
        return self::getDb()->lastInsertId();
    }


    public static function delete($id)
    {

        $request = 'DELETE FROM avis WHERE id=:id';
        $response = self::getDb()->prepare($request);
        return $response->execute($id);
    }



























    
}