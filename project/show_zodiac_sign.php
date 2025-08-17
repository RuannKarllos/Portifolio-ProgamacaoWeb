<?php include('layouts\header.php'); ?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
    id="modalSignin">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">SEU SIGNO É </h1>
            </div>

            <div class="modal-body p-5 pt-0">
                <form id="result-form">

                    <?php
                    $data_atual = $_POST['data_nascimento'];

                    $signos = simplexml_load_file("signos.xml");

                    $data_atual = new DateTime($data_atual);

                    $data_atual = $data_atual->format('d/m');

                    $countSigno = 1;

                    echo "<h2>Data atual: {$data_atual}</h2>";
                    echo "<br>";

                    foreach ($signos->signo as $signo) {

                        $data_inicio = $signo->dataInicio;
                        $data_fim = $signo->dataFim;

                        

                        echo "<p>Data inicio: $data_inicio </p>";
                        echo "<p>Data Fim: $data_fim </p>";

                        if ($data_atual > $data_inicio && $data_atual > $data_fim) {
                            echo "<h2>{$signo->signoNome}</h2>";
                            echo "<br>";
                            break;
                        }
                    }
                    ?>

                    <hr class="my-4">
                    <a href="index.php" class="w-100 mb-2 btn btn-secondary rounded-pill px-3">Voltar</a>

                </form>
            </div>
        </div>
    </div>
</div>


<?php
/*
$data_atual = $_POST['data_nascimento'];

$signos = simplexml_load_file("signos.xml");

$data_atual = new DateTime($data_atual);

$data_atual = $data_atual->format('d-m');

$countSigno = 1;

echo "<h2>Data atual: {$data_atual}</h2>";
echo "<br>";

foreach ($signos->signo as $signo) {

    $data_inicio = $signo->dataInicio;
    $data_fim = $signo->dataFim;

    if ($data_atual == $data_inicio) {
        echo "<h2>{$signo->signoNome}</h2>";
        echo "<br>";
        break;
    } else {
        echo "<h2>Não encontrado. Signo id $countSigno.<h2>";
        echo "<p>{$signo->signoNome}</p>";
        echo "<p>Data inicio: $data_inicio </p>";
        echo "<p>Data Fim: $data_fim </p>";
        echo "<br>";
        $countSigno++;
    }
}*/


/*
if ($signos) {
        echo "<h2>{$signo->signoNome}</h2>";
        echo "<p>{$signo->descricao}</p>";
    }
} else {
    echo "<h2>Erro ao ler arquivo xml.<h2>";
}

*/
?>

<? include('layouts\footer.php') ?>