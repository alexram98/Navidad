<!--3. Crear 5 variables de sesión y asignarles valores. Luego imprimir sus resultados en pantalla.  -->
$_SESSION['nombre'] = "Alex";
$_SESSION['apellido'] = "Hernandez";
$_SESSION['usuario'] = "Admin";
$_SESSION['correo'] = "rts345@gmail.com";
$_SESSION['mensaje'] = "Hello";



echo $_SESSION["mensaje"];
echo $_SESSION["nombre"];
echo $_SESSION["apellido"];
echo 'su usuario'.$_SESSION["usuario"];
echo ' su gmail'.$_SESSION["correo"];