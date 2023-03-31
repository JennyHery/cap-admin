<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?= base_url() ?>public/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url() ?>public/assets/vendor/js/helpers.js"></script>

    <script src="<?= base_url() ?>public/assets/js/config.js"></script>
    <style>
        .list-hover {
            cursor: pointer ;
        }
        #list-view {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 100% ;
        }
        #list-view li {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            position: relative;
            
        }
        #list-view  li:hover {
            background-color: #eee;
            cursor: pointer ;
        }
        .close {
            cursor: pointer;
            position: absolute;
            top: 50%;
            right: 0%;
            padding: 12px 16px;
            transform: translate(0%, -50%);
        }
        .close:hover {
            background: #bbb;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo"></div>

                <div class="menu-inner-shadow"></div>
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Parametres</span>
                </li>
                <ul class="menu-inner py-1">
                    <li class="menu-item ">
                        <a href="<?= base_url() ?>categorie" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Categorie</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item ">
                        <a href="<?= base_url() ?>classe" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Classe</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="<?= base_url() ?>mode" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Mode</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Questionnaires</span>
                    </li>
                    <li class="menu-item active">
                        <a href="<?= base_url() ?>questionnaire" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Questions</div>
                        </a>
                    </li>

                </ul>
            </aside>


            <!-- Layout container -->
            <div class="layout-page">
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <?= form_open('mode/enregistrer') ?>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Categorie</label>
                                                
                                                <select class="form-select color-dropdown">
                                                    <option>Choisir une categorie</option>
                                                    <?php for($i = 0; $i < count($categorie);$i++): ?>
                                                        <option><?= $categorie[$i]->categorie_nom ; ?> 
                                                    <?php endfor ; ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Classe</label>
                                                <select class="form-select color-dropdown">
                                                    <option>Choisir une classe</option>
                                                    <?php for($i = 0; $i < count($classe);$i++): ?>
                                                        <option><?= $classe[$i]->classe_nom ; ?> 
                                                    <?php endfor ; ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Mode</label>
                                                <select class="form-select color-dropdown">
                                                    <option>Choisir un mode d'examen</option>
                                                    <?php for($i = 0; $i < count($mode);$i++): ?>
                                                        <option><?= $mode[$i]->mode_nom ; ?> 
                                                    <?php endfor ; ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Question</label>
                                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Inserer la question" name="classe_nom" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Reponses</label>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="Inserer une reponse" name="classe_nom" />
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class='mb-3' style='min-height:20px; display: flex; flex-wrap: wrap'>
                                                
                                                <ul id="list-view">
                                                    <li>Salut les amis !<span class="close">x</span></li>

                                                    <li>Billy<span class="close">x</span></li>
                                                    <li>Bob<span class="close">x</span></li>

                                                    <li>Calvin<span class="close">x</span></li>
                                                    <li>Christina<span class="close">x</span></li>
                                                </ul> 
                                                
                                            </div>


                                            <!-- <div class="mb-3">
                                                <a href="#" id="ajouter-image">
                                                    <i class="menu-icon tf-icons bx bx-add-to-queue"></i> Ajouter une image
                                                </a>
                                                <input type="file" class="d-none" id="input-image" onchange="previewImage(event)">
                                            </div>
                                            <div class="mb-3 border">
                                                <img id="preview-image" style="height: 200px; width: auto; object-fit: fill;" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Reponse juste</label>
                                                <input type="text" class="form-control" id="basic-default-fullname" placeholder="Inserer la reponse" name="classe_nom" />
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" id="ajouter-image-reponse">
                                                    <i class="menu-icon tf-icons bx bx-add-to-queue"></i> Ajouter une image
                                                </a>
                                                <input type="file" class="d-none" id="input-image-reponse" onchange="previewImageReponse(event)">
                                            </div>
                                            <div class="mb-3 border">
                                                <img id="preview-image-reponse" style="height: 200px; width: auto; object-fit: fill;" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Fausse Reponse</label>
                                                <input type="text" class="form-control mb-2" id="basic-default-fullname" placeholder="Inserer la fausse reponse" name="classe_nom" />
                                                
                                            </div>
                                            <div class="mb-3">
                                                <a href="#" id="ajouter-image">
                                                    <i class="menu-icon tf-icons bx bx-add-to-queue"></i> Ajouter une image
                                                </a>
                                                <input type="file" class="d-none" id="input-image" onchange="previewImage(event)">
                                            </div>
                                            <div class="mb-3 border">
                                                <img id="preview-image" style="height: 200px; width: auto; object-fit: fill;" />
                                            </div>
                                            <div class="mb-3">
                                                <p class="text-center"><a href="#" class="text-warning" style="font-size: 20px; font-weight: bold ;"><i class="menu-icon tf-icons bx bx-add-to-queue"></i> Ajouter une autre fausse reponse</a></p>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="basic-default-fullname">Autres</label>
                                                <div class="form-group">
                                                    <input type="checkbox"> Pas de reponse <br>
                                                    <input type="checkbox"> Toutes les reponses sont justes <br>
                                                    <input type="checkbox"> Aucune de ces reponses n'est juste <br>
                                                    <input type="checkbox"> Autre reponse <br>
                                                </div>
                                            </div> -->
                                            

                                                <!-- Icon here -->
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>

                                            </form>
                                        </div>

                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="<?= base_url(); ?>public/assets/vendor/libs/jquery/jquery.js"></script>
            <script src="<?= base_url(); ?>public/assets/vendor/libs/popper/popper.js"></script>
            <script src="<?= base_url(); ?>public/assets/vendor/js/bootstrap.js"></script>
            <script src="<?= base_url(); ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

            <script src="<?= base_url(); ?>public/assets/vendor/js/menu.js"></script>
            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src="<?= base_url(); ?>public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

            <!-- Main JS -->
            <script src="<?= base_url(); ?>public/assets/js/main.js"></script>

            <!-- Page JS -->
            <script src="<?= base_url(); ?>public/assets/js/dashboards-analytics.js"></script>
            <script>
                $(document).on('click','#ajouter-image',function() {
                    $('#input-image').click() ;
                }) ;
                $(document).on('click','#ajouter-image-reponse',function() {
                    $('#input-image-reponse').click() ;
                }) ;
                const previewImage = (event) => {
                    const imageFiles = event.target.files ;
                    const imageFilesLength = imageFiles.length ;
                    if(imageFilesLength > 0) {
                        const imgSrc = URL.createObjectURL(imageFiles[0]) ;
                        const imagePreviewElement = document.getElementById('preview-image') ;
                        imagePreviewElement.src = imgSrc ;
                    }
                }
                const previewImageReponse = (event) => {
                    const imageFiles = event.target.files ;
                    const imageFilesLength = imageFiles.length ;
                    if(imageFilesLength > 0) {
                        const imgSrc = URL.createObjectURL(imageFiles[0]) ;
                        const imagePreviewElement = document.getElementById('preview-image-reponse') ;
                        imagePreviewElement.src = imgSrc ;
                    }
                }




                // close button:
                var closebtns = document.getElementsByClassName("close");
                var i;

                // Loop through the elements, and hide the parent, when clicked on
                for (i = 0; i < closebtns.length; i++) {
                closebtns[i].addEventListener("click", function() {
                    this.parentElement.remove() ;
                });
                }
            </script>
</body>

</html>