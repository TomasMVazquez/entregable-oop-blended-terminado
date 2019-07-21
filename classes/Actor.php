<?php

	class Actor{
    //Atributos
    private $id;
		private $first_name;
		private $last_name;
		private $rating;
		private $favorite_movie_id;
    private $favorite_movie;

    //Constructor
    public function __construct($first_name,$last_name,$rating){
      $this->setFirstName($first_name);
      $this->setLastName($last_name);
      $this->setRating($rating);
    }

    //Getter & Setter
    public function getId(){
      return $this->id;
    }
    public function getFirstName(){
      return $this->first_name;
    }
    public function getLastName(){
      return $this->last_name;
    }
    public function getRating(){
      return $this->rating;
    }
    public function getFavoriteMovieId(){
      return $this->favorite_movie_id;
    }
    public function getFavoriteMovie(){
      return $this->favorite_movie;
    }

    public function setId($valor){
      $this->id = $valor;
    }
    public function setFirstName($valor){
      $this->first_name = $valor;
    }
    public function setLastName($valor){
      $this->last_name = $valor;
    }
    public function setRating($valor){
      $this->rating = $valor;
    }
    public function setFavoriteMovieId($valor){
      $this->favorite_movie_id = $valor;
    }
    public function setFavoriteMovie($valor){
      $this->favorite_movie = $valor;
    }

    //Metodos

  }
