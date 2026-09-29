<?php
            echo "DAVID ALBARRAN 29996341<br/>";

            echo "<br/>EJERCICIO 2: Construya un programa tal que dado los datos enteros A y B.
            Escriba el resultado de la siguiente expresión:
            ((A+B)^2)/3<br/>";
            
            $numeroA = 3;
            $numeroB = 2;
            $resultado = (($numeroA+$numeroB)**2)/3;

            echo "El resultado es: ". $resultado. "<br/>";

            echo "<br/>EJERCICIO 5: Construya un programa tal que dado como datos la base y la altura de un 
            rectángulo, calcule el perímetro y la superficie del mismo.
            Recuerde que la superficie de un rectángulo se calcula aplicando la siguiente fórmula:
            superficie = base*altura, y el perímetro se calcula como: perimetro = 2*(base+altura)<br/>";
            
            $base = 3.15;
            $altura = 15.3;
            $superficie = $base*$altura;
            $perimetro = 2*($base+$altura);
            
            echo "La superficie del rectangulo es: ". $superficie. " y el perimetro del rectangulo es: ". $perimetro. "<br/>";

            echo "<br/>EJERCICIO 7: Construya un programa tal que dadas la base y la altura de un triángulo, calcule
            e imprima su superficie. La superficie de un triángulo
            se calcula aplicando la siguiente fórmula: base*altura/2<br/>";
            
            $base = 5.333;
            $altura = 12.7;
            
            $superficie = ($base*$altura)/2;

            echo "La superficie del triangulo es: ". $superficie. "<br/>";
            
            
            echo "<br/>EJERCICIO 9: Construya un programa que resuelva el problema que tienen en una gasolinera. Los surtidores de la misma 
            registran lo que “surten en galones, pero el precio de la gasolina está fijado en litros. 
            El programa debe calcular e imprimir lo que hay que cobrarle al cliente.
            Se debe considerar que cada galón tiene 3.785 litros y el precio del litro es $4.50.<br/>";
            
            $galones = 5.3;
            $litros = $galones * 3.785;
            $totalCobrar = $litros * 4.5;

            echo "Cantidad en litros equivalentes: " . $litros . " Litros.<br/>";
            echo "El total a cobrar al cliente es: " . $totalCobrar . "$.<br/>"
?>