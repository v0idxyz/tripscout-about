<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="TripScout stellt deine wichtigste Ressource für deinen Drogenkonsum dar. Hier findest du Konsuminformationen zur Harm-Reduction." />
        <meta name="author" content="" />
        <title>TripScout | About | Die wichtigsten Infos über deine Drogen!</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />  
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>
    <body>
    @yield('frontend')
                @include('frontend.gtag')
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="/">TripScout</a>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                <h3 class="card-title text-center">About</h3>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light">
            <div class="col-sm-8 mx-auto">
                <div class="row">
                <h3 class="card-title text-center">Mission</h3>
                <p>Es ist an der Zeit die mit Drogenkonsum verbundenen Tabus zu brechen und den Konsumenten die Ressourcen zur Verfügung zu stellen, die sie brauchen um sicher zu bleiben.</p>
                <p>Wir möchten eine offene Diskussion über Techniken zur Schadensbegrenzung und positive Unterstützung anbieten. Wir sind gerne bereit, Drogenkonsumenten, die unter Drogeneinfluss eine schwierige Zeit durchmachen, zu begleiten oder ihnen "beizustehen".</p>
                <p>Wir leben in einer Zeit, in der der Einfluss von Drogen in unserem Leben so präsent ist wie nie zuvor, und wir sind der festen Überzeugung, dass sichergestellt werden muss, dass die Menschen den gleichen einfachen Zugang zu den Informationen und Materialien haben, die sie brauchen, um sicher zu bleiben.</p>
                <h3 class="card-title text-center">Nicht unsere Mission</h3>
                <p>Wir fördern nicht den Gebrauch oder Missbrauch von Drogen. Im Gegenteil: Benutzer, die unserem Netzwerk beitreten, haben bereits die Absicht, Drogen zu nehmen, und wir bieten ihnen Dienstleistungen an, um sie zu schützen. Wir dulden weder den Missbrauch von Drogen noch das Mischen von potenziell gefährlichen Kombinationen von Drogen.
Unser oberstes Ziel ist es, positive Unterstützung zu leisten und die Schadensbegrenzung zu fördern, indem wir Techniken und Ratschläge anbieten und in einigen Fällen den Konsumenten helfen, mit den möglichen negativen psychologischen Folgen ihrer Handlungen und Erfahrungen umzugehen.</p>
                <p>Wir haben eine Null-Toleranz-Politik gegenüber dem Missbrauch gefährlicher Drogen und jeder Diskussion über Selbstmord oder andere psychologische Probleme, und wir entfernen Regelbrecher aus der Gemeinschaft, um sicherzustellen, dass sie keinen schlechten Einfluss auf andere haben.
Oft wird ein "Bad Trip" mit einem medizinischen Notfall verwechselt, was sich in Expertenaussagen in Nachrichtenberichten zeigt. Ein schlechter Trip bezieht sich auf eine Situation, in der sich jemand unter dem Einfluss von Psychopharmaka in Panik, deprimiert, ängstlich oder aufgeregt fühlt und jemanden sucht, mit dem er in einer unterstützenden, positiven und entspannenden Umgebung reden kann.
TripScout ist nicht als Ersatz für medizinische Hilfe gedacht, da wir keine Mediziner sind. Wir bemühen uns, den Konsumenten, die bereits Drogen konsumieren, Rat und positive Unterstützung zu geben. Wir informieren über die Folgen, Nebenwirkungen und das Suchtpotenzial des Konsums und/oder der Mischung potenziell schädlicher Drogen.</p>


                
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        @yield('frontend')
                @include('frontend.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>


</body>
</html>
