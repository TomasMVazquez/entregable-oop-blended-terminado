<?php

	class Genre{
		//Atributos
		private $id;
		private $name;
		private $ranking;
		private $active;

		//Constructor
		public function __construct($name, $ranking, $active)
		{
			$this->name = $name;
			$this->ranking = $ranking;
			$this->active = $active;
		}

		//Getter & Setter
		public function setID($id)
		{
			$this->id = $id;
		}

		public function getID()
		{
			return $this->id;
		}

		public function getName()
		{
			return $this->name;
		}

		public function getRanking()
		{
			return $this->ranking;
		}

		public function getActive()
		{
			return $this->active;
		}
	}
