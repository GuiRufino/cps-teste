<?php
$title = 'Escala';
include '../../config.php';
include '../../views/header.php';

$sql = "SELECT nome_equipe FROM equipe";
$query = $db->query($sql);
while ($row = mysqli_fetch_assoc($query)) {
    $equipes_escala[] = $row;
}
foreach ($equipes_escala as $equipe) {
    $equipes[$equipe['nome_equipe']] = true;
}

$primeiro_dia_do_mes = new DateTime('first day of this month');
$ultimo_dia_do_mes   = new DateTime('last day of this month');
?>
    <table class="table table-striped mt-1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Equipe</th>
                <th><small>Escala feita para o mês de <?php echo date('m/Y'); ?></small></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($primeiro_dia_do_mes < $ultimo_dia_do_mes) : ?>
            <tr>
                <td>
                    <?php echo $primeiro_dia_do_mes->format('d/m/Y'); ?>
                </td>
                <?php
                $equipesNoDia = 0;
                
                foreach ($equipes as $nomeEquipe => $disponivel) {
                    
                    if ($equipes[$nomeEquipe] == false) {
                        $equipes[$nomeEquipe] = true;
                    }
                    
                    if ($equipesNoDia == 2) {
                        continue;
                    }
                    
                    if ($disponivel) {
                        echo "<td>" . $nomeEquipe . "</td>";
                        $equipes[$nomeEquipe] = false;
                        $equipesNoDia++;
                    }
                    
                }
                $primeiro_dia_do_mes->modify('+1 day');
                endwhile;
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>