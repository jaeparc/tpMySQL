<?php
    class usr{
        //propriétés :
        public $_nom;
        public $_mdp;
        //méthodes :
        public function afficherNom(){
            echo "<p>Le nom est ".$this->_nom."</p>";
        }
        public function setNom($newNom){
            $this->_nom=$newNom;
        }
        public function setMDP($newMDP){
            $this->_mdp=$newMDP;
        }
    }
?>