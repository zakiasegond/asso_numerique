<?php
    Class Asso
    {
        public $name;
        public $firstname;
		public $society;
        public $question;
        
           
        

        public function __construct( $name, $firstname, $society, $question )
        {
            $this->name = $name;
            $this->firstname = $firstname;
            $this->society = $society;
            $this->question = $question;
            
        }
    }
?>