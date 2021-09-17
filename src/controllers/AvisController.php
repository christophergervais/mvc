<?php

class AvisController
{

public static function add()
{
        if (isset($_GET['id'])) :
            $avis = Avis::findByProduit([
                'id' => $_GET['id']
            ]);

        endif;

        include(VIEWS . 'avis/add.php');
}

    public static function save()
    {
        Avis::create([
            'id' => $_POST['id'],
            'commentaire' => $_POST['note'],
            'note' => $_POST['note'],
            'utilisateur_id' => $_POST['utilisateur_id'],
            'date' => $_POST['date'], //trouver comment mettre la date du moment

        ]);

        $_SESSION['messages']['success'][] = 'Votre commentaire a été pris en compte !';

        header('location:../');
        exit();
    }

    public static function commentaires()
    {

        $commentaires = Avis::findAll();
        

        include(VIEWS . 'avis/commentaires.php');
    }










    
}