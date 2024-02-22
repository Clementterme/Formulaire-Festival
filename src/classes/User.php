<?php

// class User {
//     private $_id;
//     private $_nom;
//     private $_prenom;
//     private $_mail;
//     private $_tel;
//     private $_adresse;

//     private $_nbReservations;
//     private $_tarifReduit;
//     private $_nbJours;
//     private $_nbJoursTarifReduit;
//     private $_journee;
//     private $_tente;
//     private $_camion;
//     private $_enfants;
//     private $_casque;
//     private $_luge;
//     function __construct(int|string $id = "à créer", string $nom, string $prenom, string $mail, int $tel, string $adresse) {
//         $this->setId($id);
//         $this->setNom($nom);
//         $this->setPrenom($prenom);
//         $this->setMail($mail);
//         $this->setTel($tel);
//         $this->setAdresse($adresse);
//         $this->setNbReservations($_nbReservations);
//         $this->setTarifReduit($tarifReduit);
//         $this->setNbJours($nbJours);
//         $this->setNbJoursTarifReduit($nbJoursTarifReduit);
//         $this->setJournee($journee);
//         $this->setTente($tente);
//         $this->setCamion($camion);
//         $this->setEnfants($enfants);
//         $this->setCasque($casque);
//         $this->setLuge($luge);
//     }
//     public function getId(): int {
//         return $this->_id;
//     }
//     public function setId(int|string $id) {
//         if (is_string($id) && $id === "à créer") {
//             $this->_id = $this->CreerNouvelId();
//         } else {
//             $this->_id = $id;
//         }
//     }
//     public function getNom(): string {
//         return $this->_nom;
//     }
//     public function setNom(string $nom) {
//         $this->_nom = $nom;
//     }
//     public function getPrenom(): string {
//         return $this->_prenom;
//     }
//     public function setPrenom(string $prenom) {
//         $this->_prenom = $prenom;
//     }
//     public function getMail(): string {
//         return $this->_mail;
//     }
//     public function setMail(string $mail) {
//         $this->_mail = $mail;
//     }
// }
