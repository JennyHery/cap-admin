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
            cursor: pointer;
        }

        #list-view {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        #list-view li {
            border: 1px solid #ddd;
            margin-top: -1px;
            /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
            position: relative;

        }

        #list-view li:hover {
            background-color: #eee;
            cursor: pointer;
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
                    <!-- <li class="menu-item ">
                        <a href="<?= base_url() ?>classe" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Classe</div>
                        </a>
                    </li> -->
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
                                <div class="card" style="height: 800px;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select name="" id="" class="form-select">
                                                    <option value="">Choisir categorie</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Titre de la fiche">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Mot-cle">
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="Mot-cle">
                                                <button class="btn btn-primary mt-2">Confirmer</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-striped table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th>Test</th>
                                                            <th>Test</th>
                                                            <th>Test</th>
                                                            <th>Test</th>
                                                            <th>Test</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Test</td>
                                                            <td>Test</td>
                                                            <td>Test</td>
                                                            <td>Test</td>
                                                            <td>Test</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
                $(document).ready(function() {
                    const URL = 'http://localhost/cap-admin/';
                    $('#btn-ajouter').click(function(e) {
                        if ($('#reponses').val() != '') {
                            e.preventDefault();
                            var reponse = $('#reponses').val();
                            $('#reponses').val('');
                            $('#reponses').focus();
                            $("#list-view").append(`
                            <li class='list-view-item'>
                                <input type="checkbox" class="mr-2 check-true" etat='off'>
                                <span class="content">${reponse}</span>
                                <span class="close">x</span>
                            </li>
                        `);
                            // close button:
                            var closebtns = document.getElementsByClassName("close");
                            var i;

                            // Loop through the elements, and hide the parent, when clicked on
                            for (i = 0; i < closebtns.length; i++) {
                                closebtns[i].addEventListener("click", function(e) {
                                    e.stopImmediatePropagation();
                                    this.parentElement.remove();
                                });
                            }

                            // Check true reponse:
                            var checkTrue = document.getElementsByClassName('check-true');
                            for (j = 0; j < checkTrue.length; j++) {
                                checkTrue[j].addEventListener("click", function(e) {
                                    e.stopImmediatePropagation();
                                    if (this.getAttribute('etat') == 'off') {
                                        this.setAttribute('etat', 'on');
                                    } else if (this.getAttribute('etat') == 'on') {
                                        this.setAttribute('etat', 'off');
                                    }
                                });
                            }
                        } else {
                            alert('remplir le champ inserer svp !')
                        }
                    })


                    $(document).on('click', '#enregistrer', function() {

                        var liste_reponse = document.getElementsByClassName('list-view-item');
                        var datas = [];
                        for (let i = 0; i < liste_reponse.length; i++) {
                            var data_chunck = [];
                            var first_son = liste_reponse[i].children[0];
                            var middle_son = liste_reponse[i].children[1];
                            if (first_son.getAttribute('etat') == 'on') {
                                data_chunck.push('Vrai');
                                data_chunck.push(middle_son.innerText);
                            } else {
                                data_chunck.push('Faux');
                                data_chunck.push(middle_son.innerText);
                            }

                            datas.push(data_chunck);
                        }


                        $.ajax({
                                url: URL + 'Questionnaire/enregistrer',
                                type: 'post',
                                data: {
                                    'categorie_id': $('#categorie').val(),
                                    'classe_id': $('#classe').val(),
                                    'mode_id': $('#mode').val(),
                                    'question': $('#question').val(),
                                    'reponses': JSON.stringify(datas),
                                    //    'autres': myAutres , 
                                },
                            })
                            .done(function(data) {
                                if (data.trim() == 'success') {
                                    $('#question').val('');
                                    $('.list-view-item').remove();
                                    $('#question').focus();
                                    $.ajax({
                                            url: URL + 'Questionnaire/getAllQuestions',
                                            type: 'post',
                                            data: {},
                                        })
                                        .done(function(data) {
                                            $("#tbody-question").html(data);
                                        })
                                }
                            })
                    })


                    function showQuestionnaires() {
                        $.ajax({
                                url: URL + 'Questionnaire/getAllQuestions',
                                type: 'post',
                                data: {},
                            })
                            .done(function(data) {
                                $("#tbody-question").html(data);
                            })
                    }
                })
            </script>
</body>

</html>