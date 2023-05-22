<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <title>Taller 2</title>
    </head>
    <body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['clear'])) {
                    $_POST = array();
                } else {
                    $lenguajes = isset($_POST['lenguajesProgramacion']) ? count($_POST['lenguajesProgramacion']) : 0;
                    $ingles = $_POST['nivelIngles'];

                    if ($lenguajes >= 6 && ($ingles === '3' || $ingles === '2' || $ingles === '1')) {
                        header('Location: ./pages/sputnik.html');
                        exit();
                    } else if ($lenguajes >= 4 && ($ingles === '2' || $ingles === '3' || $ingles === '1')) {
                        header('Location: ./pages/artemis.html');
                        exit();
                    } else if ($lenguajes >= 2 && ($ingles === '1' || $ingles === '2' || $ingles === '3')) {
                        header('Location: ./pages/apolo.html');
                        exit();
                    } else {
                        header('Location: no.html');
                        exit();
                    }
                }
            }
        ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Email" id="inputEmail4">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
                </div>
            </div>
            <div class="row">
                <form method="post" action="">
                    <select class="form-select" aria-label="Default select example" name="nivelDeEstudio">
                        <option value="1">Estudiante</option>
                        <option value="2">Bachiller</option>
                        <option value="3">Universitario</option>
                        <option value="4">Técnico</option>
                        <option value="5">Tecnólogo</option>
                        <option value="6">Profesional</option>
                    </select>
            </div>
            <div class="row container-fluid">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault1" value="Python">
                    <label class="form-check-label" for="flexCheckDefault1">Python</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault2" value="HTML">
                    <label class="form-check-label" for="flexCheckDefault2">HTML</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault3" value="JavaScript">
                    <label class="form-check-label" for="flexCheckDefault3">JavaScript</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault4" value="CSS">
                    <label class="form-check-label" for="flexCheckDefault4">CSS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault5" value="PHP">
                    <label class="form-check-label" for="flexCheckDefault5">PHP</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault6" value="NodeJS">
                    <label class="form-check-label" for="flexCheckDefault6">NodeJS</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault7" value="C#">
                    <label class="form-check-label" for="flexCheckDefault7">C#</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lenguajesProgramacion[]" id="flexCheckDefault8" value="TypeScript">
                    <label class="form-check-label" for="flexCheckDefault8">TypeScript</label>
                </div>
            </div>
            <select class="form-select" aria-label="Default select example" name="nivelIngles">
                <option value="1">Básico</option>
                <option value="2">Intermedio</option>
                <option value="3">Avanzado</option>
            </select>
            <button type="submit" class="btn btn-danger btn-lg" name="clear">Clear</button>
            <button type="submit" class="btn btn-success btn-lg">Send</button>
            </form>
        </div>
    </body>
</html>