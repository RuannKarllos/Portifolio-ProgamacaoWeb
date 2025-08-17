<?php include('layouts/header.php'); ?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog"
    id="modalSignin">
    <div class="modal-dialog">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">DESCUBRA SEU SIGNO</h1>
            </div>

            <div class="modal-body p-5 pt-0">
                <form id="signo-form" method="POST" action="show_zodiac_sign.php">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-3" id="data_nascimento" name="data_nascimento" required>
                        <label for="data_nascimento">Data de nascimento</label>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Descobrir signo</button>

                    <hr class="my-4">

                </form>
            </div>
        </div>
    </div>
</div>

<?php include('layouts/footer.php'); ?>