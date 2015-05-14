<?php
class Utilisateur {

    private $idUser;
    private $pseudo = '';
    private $passWord = '';
    private $firstName = '';
    private $lastName = '';
    private $birthDate = '';
    private $sexe = '';
    private $email = '';
    private $hobits = '';
    private $geekHobits = '';

    public function __construct(){
    }

    public function setUserInfos($infos = array()) {
        foreach($infos as $info => $infoValue) {
            $this->$info = $infoValue; //Je ne pensais pas que ça marcherais mais tant mieux.
        }
    }

    public function pseudoAlreadyExist() {

        $pseudoAlreadyExist = true;
        if (isset($this->pseudo)) {

            include 'libs/db.php';
            $query = $connexion->prepare('SELECT pseudo FROM users WHERE pseudo = :pseudo ;');
        	$query->bindValue(':pseudo', $this->pseudo);
            $query->execute();
            $user = $query->fetch(PDO::FETCH_OBJ);

            if (!is_object($user) || $user->pseudo != $this->pseudo) {//Si le pseudo trouvé en base et celui de l'objet sont les mêmes, on met la variable à true.
                $pseudoAlreadyExist = false;
            }
        }
        return $pseudoAlreadyExist;
    }

    public function insertNewUserInDb() {

        if (!$this->pseudoAlreadyExist()) {

            include 'libs/db.php';
            $inscription=$connexion->prepare('INSERT INTO users (pseudo, passWord, firstName,lastName,birthDate,sexe,email,hobits,geekHobits)
                                                VALUES (:pseudo,:passWord,:firstName,:lastName,:birthDate,:sexe,:email,:hobits,:geekHobits)');
        	$inscription->bindValue(':pseudo',     $this->pseudo);
        	$inscription->bindValue(':passWord',   $this->passWord);
        	$inscription->bindValue(':firstName',  $this->firstName);
        	$inscription->bindValue(':lastName',   $this->lastName);
        	$inscription->bindValue(':birthDate',  $this->birthDate);
        	$inscription->bindValue(':sexe',       $this->sexe);
        	$inscription->bindValue(':email',      $this->email);
        	$inscription->bindValue(':hobits',     $this->hobits);
        	$inscription->bindValue(':geekHobits', $this->geekHobits);
        	$inscription->execute();
            echo 'Inscription réussie';

        }

    }

}
?>
