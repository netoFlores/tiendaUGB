<?php
include_once "../pantilla/admin/header.php";
?>
<div class="row">


    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="table-responsive">
            <h2 class="sub-header">Section title</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id Categoria</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Modificación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once '../controlador/CategoriaController.php';
                    $categoria = new CategoriaC();
                    $i = 1;
                    $result = $categoria->getAll();
                    print_r($result);
                    foreach ($result as $cat) {
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>$cat->idCategoria</td>";
                        echo "<td>$cat->nombre</td>";
                        echo "<td>$cat->descripcion</td>";
                        echo "<td>$cat->fecha_creacion</td>";
                        echo "<td>$cat->fecha_mod</td>";
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <?php
    include_once '../pantilla/admin/footer.php';
    ?>