<?php include('layouts/header.php'); ?>

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

                    $findSigno = false;

                    foreach ($signos->signo as $signo) {

                        $data_inicio = DateTime::createFromFormat('d/m', $signo->dataInicio);
                        $data_fim = DateTime::createFromFormat('d/m', $signo->dataFim);
                        $data_inicio-> setDate(
                            $data_atual->format('Y'),
                            $data_inicio->format('m'),
                            $data_inicio->format('d')
                        );
                        
                        $data_fim-> setDate(
                            $data_atual->format('Y'),
                            $data_fim->format('m'),
                            $data_fim->format('d')
                        );

                        if ($data_inicio > $data_fim) {
                            if ($data_atual < $data_inicio) {
                                $data_fim->modify(modifier: '+1 year');
                            } else {
                                $data_fim->modify(modifier: '+1 year');
                            }
                        }

                        if ($data_atual >= $data_inicio && $data_atual <= $data_fim) {
                            echo "<h2>{$signo->signoNome}</h2>";
                            echo "<br>";
                            $findSigno = true;
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

<? include('layouts/footer.php'); ?>