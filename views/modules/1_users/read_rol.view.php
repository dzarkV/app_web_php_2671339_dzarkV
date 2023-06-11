<table border="1">
    <thead>
        <tr>
            <th>Cód</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($roles as $rol) : ?>
            <tr>
                <td><?php echo $rol->getRolCode(); ?></td>
                <td><?php echo $rol->getRolName(); ?></td>
                <td>
                    <a href="?c=Users&a=updateRol&rolCode=<?php echo $rol->getRolCode() ?>">Editar</a>
                    <a href="?c=Users&a=deleteRol&rolCode=<?php echo $rol->getRolCode() ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>