<h1>Sprint 1 Tema 4</h1>

<p> Cada nivel tiene su carpeta. Dentro de cada carpeta hay un archivo "MAIN" con su respectivo nivel ("n1","n2","n3") con el código principal.

<p>Las carpetas contienen las clases Employee.php (ejercicio 1) y Shape.php, con sus subclases Triangulo.php y Rectangulo.php en archivos separados (ejercicio 2).</p>

<h2> Nivel 1 </h2>
La clase Employee contiene la funcion imprimir(), que imprime el sueldo del empleado y calcula si debe pagar impuestos.
La clase Shape no es abstracta, pero su único uso es otorgar un constructor a sus subclases Triangulo.php y Rectangulo.php. Cada una de sus subclases tiene su propia función calcularArea().

<h2> Nivel 2 </h2>
Contiene la clase Pokerdice, con atributos: string forma, array shapes, static int contador.
Contiene métodos throw() (asigna a "forma" un "shape" aleatorio), shapeName() (devuelve la "forma"),  y getTotalThrows() (cuenta las veces que se ha usado "throw()" en todos los dados = objetos "Pokerdice").

<h2> Nivel 3 </h2>
Clases Cine y Pelicula. Pelicula contiene mayoritariamente getters y el método __toString.

Cine contiene diferentes métodos que se implementan en el main como se explica a continuación.

Main-n3 contiene, además de las instancias de los objetos, un menu (switch) para:
-Mostrar todos los cines con sus peliculas.
-Mostrar las peliculas más largas de cada cine.
-Buscar pelicula por director.