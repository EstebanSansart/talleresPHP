<?php

    class vendedor extends persona{
        private $salario;
        private $skill;
        function __construct($cc = null, $name = null, $email = null, $phone = null, $address = null, $birthday = null, $gender = null)
        {
            parent::__construct($cc, $name, $email, $phone, $address, $birthday, $gender);
        }
    }

?>