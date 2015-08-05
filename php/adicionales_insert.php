<?php
                                    error_reporting(0);
                                    if ('registra' == true) {
                                    $GLOBALS['host'] = "localhost";
                                    $GLOBALS['user'] = "root";
                                    $GLOBALS['pw'] = "";
                                    $GLOBALS['db'] = "estra";
                                    $GLOBALS['concept'] = $_POST['concepto'];
                                    $GLOBALS['comment'] = $_POST['comentario'];
                                    $GLOBALS['movment'] = $_POST['movimiento'];
                                    $GLOBALS['document'] = $_POST['documento'];
                                    $GLOBALS['cantidad'] = $_POST['cantidad'];

                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    $query = "INSERT INTO adicionales (concepto, comentario, tipo, cantidad,documento,usuario)
                                    VALUES ('Luz','Hola','Salida',300,'','$nom')";
                                    $resultado = mysql_query($query);
                                    /*VALUES ('{$_POST['concepto']}','{$_POST['comentario']}','Salida',{$_POST['cantidad']},'{$_POST['documento']}','$nom')";*/

                                    mysql_close();
                                    }
                                    ?>
                                    <?php 
                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    $query = "SELECT * FROM cajas WHERE usuario = '$nom'";
                                    $resultado = mysql_query($query);
                                    while ($fila = mysql_fetch_array($resultado)) {
                                        $GLOBALS['pesosAnt'] = $fila[pesos];
                                    }
                                     ?>
                                    <?php 
                                    $peso = $cantidad;
                                    $nuevoPeso = $pesosAnt + $peso;
                                    $nuevoPeso2 = $pesosAnt - $peso;
                                    $con = mysql_connect($host,$user,$pw) or die ("No se pudo establecer la conexión");
                                    mysql_select_db($db, $con) or die ("No se pudo conectar a la base de datos");
                                    if ($movment == "Entrada") {
                                            $query = "UPDATE cajas SET pesos = $nuevoPeso WHERE usuario = '$nom'";
                                            $resultado = mysql_query($query);
                                    }
                                     elseif ($movment == "Salida") {
                                            if ($pesosAnt > $peso) {
                                                $query = "UPDATE cajas SET pesos = $nuevoPeso2 WHERE usuario = '$nom'";
                                                $resultado = mysql_query($query);
                                            }
                                            else
                                            {
                                                ?> <script>alert("No cuenta con suficiente efectivo en caja");</script><?php 
                                            }
                                        }
                                   
                                    ?>