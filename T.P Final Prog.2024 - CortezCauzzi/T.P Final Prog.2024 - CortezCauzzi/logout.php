<?php
session_start();
session_destroy();

header('Location: index2.html?mensaje=Sesión cerrada con éxito');