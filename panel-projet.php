<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portfolio - Timothé VAQUIÉ</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php
    require('./include/bdd.inc.php');
    include('./include/header.inc.php');
    include('./include/projet.inc.php');
    include('./include/projetManager.inc.php');
    ?>

    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr />
                    <h3 class="text-center">CRUD : "Mes Projets"</h3>
                    <hr />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal">
                        Ajouter
                    </button>
                    <table class="table table-bordered myTable">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Type</th>
                            <th>Difficulte</th>
                            <th>URL</th>
                            <th>Etat</th>
                            <th>Description</th>
                            <th>ImageNom</th>
                            <th>ImageUrl</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                        <tbody>
                            <?php
                            $projet = 'SELECT IdProjet, TitleProjet, TypeProjet, DifficulteProjet, UrlProjet, EtatProjet, DescriptionProjet, ImageNomProjet, ImageUrlProjet FROM PROJET ORDER BY IdProjet ASC;';
                            foreach ($db->query($projet) as $row) {
                            ?>
                                <tr ng-repeat="user in users">


                                    <td><?php echo $row['IdProjet']; ?></td>
                                    <td><?php echo $row['TitleProjet']; ?></td>
                                    <td><?php echo $row['TypeProjet']; ?></td>
                                    <td><?php echo $row['DifficulteProjet']; ?></td>
                                    <td><?php echo $row['UrlProjet']; ?></td>
                                    <td><?php echo $row['EtatProjet']; ?></td>
                                    <td><?php echo $row['DescriptionProjet']; ?></td>
                                    <td><?php echo $row['ImageNomProjet']; ?></td>
                                    <td><?php echo $row['ImageUrlProjet']; ?></td>
                                    <td><button class="btn btn-warning" data-toggle="modal" data-target="#editModal">
                                            Edit
                                        </button></td>
                                    <td><button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                            Delete
                                        </button></td>
                                <?php } ?>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Add Modal-->
        <div class="modal fade" id="addModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ajouter un nouveau</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="form-vertical" method="post" action="" id="form" novalidate>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="titleProjet">Titre :</label>
                                    <div class="col-sm-5">
                                        <input pattern="[A-Za-zéèà\s]{2,50}" class="form-control" type="text" placeholder="Nom du projet" name="titleProjet" required />
                                    </div>
                                    <div class="invalid-feedback">
                                        Le titre est obligatoire
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="typeProjet">Type :</label>
                                    <div class="col-sm-5">
                                        <select class="form-control" id="typeProjet" name="typeProjet">
                                            <option value="scolaire">Scolaire</option>
                                            <option value="personnel">Personnel</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="difficulteProjet">Difficulté (sur 5) :</label>
                                    <div class="col-sm-5">
                                        <input pattern="[0-5]{1,1}" class="form-control" type="number" placeholder="Ex: 3" name="difficulteProjet" required />
                                    </div>
                                    <div class="invalid-feedback">
                                        La difficulté est obligatoire
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="urlProjet">URL :</label>
                                    <div class="col-sm-11">
                                        <input pattern="[A-Za-zéèà:/.]{2,70}" class="form-control" type="text" placeholder="Ex: https://github.com/JohnWallans/photoforyou" name="urlProjet" required />
                                    </div>
                                    <div class="invalid-feedback">
                                        L'URL est obligatoire
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="etatProjet">Etat du projet :</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="etatProjet" name="etatProjet">
                                            <option value="En cours 🚧">En cours 🚧</option>
                                            <option value="Fini ✔️">Fini ✔️</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="descriptionProjet">Description :</label>
                                    <div class="col-sm-11">
                                        <input pattern="[A-Za-zéèà-\s]{2,500}" class="form-control" type="text" placeholder="Ex: Ce projet fait blabla..." name="descriptionProjet" required />
                                    </div>
                                    <div class="invalid-feedback">
                                        La description est obligatoire
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="imageNomProjet">Nom Image :</label>
                                    <div class="col-sm-11">
                                        <input pattern="[A-Za-zéèà.-]{2,150}" class="form-control" type="text" placeholder="Ex: projet1.png" name="imageNomProjet" required />
                                    </div>
                                    <div class="invalid-feedback">
                                        Le nom de l'image est obligatoire
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="control-label col-sm-5" for="imageUrlProjet">Url Image :</label>
                                    <div class="col-sm-11">
                                        <input pattern="[A-Za-zéèà./:]{2,150}" class="form-control" type="text" placeholder="Ex: https://www.lien-image.com" name="imageUrlProjet" required />
                                    </div>
                                    <div class="invalid-feedback">
                                        L'URL de l'image est obligatoire
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-success" value="Ajouter" name="submit" />
                                    <button class="btn btn-danger" type="button" data-dismiss="modal">
                                        Annuler
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        if (isset($_POST['submit'])) {
            $titleProjet = $_POST['titleProjet'];
            $typeProjet = $_POST['typeProjet'];
            $difficulteProjet = $_POST['difficulteProjet'];
            $urlProjet = $_POST['urlProjet'];
            $etatProjet = $_POST['etatProjet'];
            $descriptionProjet = $_POST['descriptionProjet'];
            $imageNomProjet = $_POST['imageNomProjet'];
            $imageUrlProjet = $_POST['imageUrlProjet'];

            $projetadd = new Projet(['TitleProjet' => $titleProjet, 'TypeProjet' => $typeProjet, 'DifficulteProjet' => $difficulteProjet, 'UrlProjet' => $urlProjet, 'EtatProjet' => $etatProjet, 'DescriptionProjet' => $descriptionProjet, 'ImageNomProjet' => $imageNomProjet, 'ImageUrlProjet' => $imageUrlProjet]);

            $projetManager->add($projetadd);

            header('Location: https://www.youtube.com/');
        }
        ?>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Edit Modal-->
        <div class="modal fade" id="editModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Edit</h4>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="Name">Name</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" ng-model="clickedUser.name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="full name">Full Name</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="text" ng-model="clickedUser.fullname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="email" ng-model="clickedUser.email" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="button" ng-click="updateUser()" data-dismiss="modal">
                            Save</button><button class="btn btn-default" type="button" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete Modal-->
        <div class="modal fade" id="deleteModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Delete</h4>
                    </div>
                    <div class="modal-body">
                        <h3>
                            Are you sure to delete <span>{{clickedUser.fullname}}</span>????
                        </h3>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" ng-click="deleteUser()" data-dismiss="modal">
                            Yes</button><button class="btn btn-primary" type="button" data-dismiss="modal">
                            No
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script>
        (function() {
            "use strict"
            window.addEventListener("load", function() {
                var form = document.getElementById("form")
                form.addEventListener("submit", function(event) {
                    if (form.checkValidity() == false) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add("was-validated")
                }, false)
            }, false)
        }())
    </script>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>

</html>