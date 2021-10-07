<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<br>
<h4>Catalogo de Visitas </h4>

<table>
    <thead>
        <tr>
            <th>Matricula</th>
            <th>Nombre</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlvisitas as $visitasview) {
        ?>
            <tr>
                <td><?php echo $visitasview->matricula; ?></td>
                <td><?php echo $visitasview->nombre; ?></td>
                <td><?php echo $visitasview->sexo; ?></td>
                <td>
                    <a style="color:black" href="">Editar</a> |
                    <a style="color:black" href="">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br><!-- comment -->