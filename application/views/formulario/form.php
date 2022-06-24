HOLA ANA <?=$titulo?>

<table border="1">
    <tr>
        <th>nombre</th>
        <th>edad</th>
        <th>correo</th>
    </tr>
    <?php foreach($data as $item){?>
    <tr>
        <td><?=$item->nombre?></td>
        <td><?=$item->edad?></td>
        <td><?=$item->correo?></td>
    </tr>
    <?php }?>
</table>
<script src="<?=base_url()?>public/js/test.js"></script>