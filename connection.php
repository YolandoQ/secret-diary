<?php

    $link = mysqli_connect("hostname", "username", "password", "password");
        
        if (mysqli_connect_error()) {
            
            die ("Conexão não estabelecida");
            
        }
