<!doctype html>
<html lang="en">
    <head>
        <title>Agenda Web</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <!--CSS y JS fullCalendar 5 -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
        
        <!--Cambio de Idioma fCalendar-->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

    </head>

    <body>
        <div class="container">
            <div class="col-md-8 offset-md-2"> <!--Centro calendar 2 8 2 -->
                <div id='calendar'></div>
            </div>
            
                                    <!-- MOdal -->
            <!--  Modal trigger button  -->
            <button
                type="button"
                class="btn btn-primary btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#modalEvento"
            >
                Launch
            </button>
            
            <!-- Modal Body-->
            <div
                class="modal fade"
                id="modalEvento"
                tabindex="-1"
                role="dialog"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Modal title
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>

                        <div class="modal-body">
                            <div class="container-fluid">
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label for="id" class="form-label">ID:</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="id"
                                            id="id"
                                            aria-describedby="helpId"
                                            placeholder="ID"
                                        />
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="titulo" class="form-label">Titulo</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="titulo"
                                            id="titulo"
                                            aria-describedby="helpId"
                                            placeholder="Titulo"
                                        />
                                        
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha:</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="fecha"
                                            id="fecha"
                                            aria-describedby="helpId"
                                            placeholder="Fecha:"
                                        />
                                       
                                    </div>

                                    <div class="mb-3">
                                        <label for="hora" class="form-label">Hora del evento:</label>
                                        <input
                                            type="time"
                                            class="form-control"
                                            name="hora"
                                            id="hora"
                                            aria-describedby="helpId"
                                            placeholder="Hora"
                                        />
                                        
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="descripcion" class="form-label">Descripcion</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color:</label>
                                        <input
                                            type="color"
                                            class="form-control"
                                            name="color"
                                            id="color"
                                            aria-describedby="helpId"
                                            placeholder="Color:"
                                        />
                                        
                                    </div>
                                    
                                    
                                </form>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal"
                            >
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>

        

        

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <script>
            var modalEvento;
            modalEvento= new bootstrap.Modal(document.getElementById('modalEvento'),{keyboard:false});

            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale:"es",      //Linea para traducir el calendario       
                    headerToolbar:{
                        left:'prev,next today', 
                        center:'title', 
                        right:'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    dateClick:function(informacion) //f() q atrapa cuando presiona un dia especifico
                    {
                        alert("Presionaste "+informacion.dateStr);
                        modalEvento.show();
                    }           
                });
                calendar.render();
            });

        </script>
    </body>
</html>
