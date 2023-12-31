<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do App</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>
<body>
    
    <div class="container">
        <div class="sidebar">
            Logo
        </div>

        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa
                </a>
            </nav>

            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <hr class="linhaHeader"/>
                        <span>Data</span>
                    </div>
                    <div class="graph_header-subtitle">
                        Tarefas: <b>3/6</b>
                    </div>

                    <div class="graph-placeholder">
                    </div>

                    <p class="graph_header-tasks_left">Restam 3 tarefas para serem realizadas</p>
                </section>

                <section class="list">
                    <div class="list-header">

                        <select class="list_header-select">
                            <option value="1">Todas as tarefas</option>
                        </select>

                    </div>

                    <div class="task_list">
                        <div class="task">

                            <div class="title">
                                <input type="checkbox"/>
                                <div class="task_title">Titulo tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Titulo tarefa</div>
                            </div>
                            <div class="actions">
                                Editar - Excluir
                            </div>

                        </div>
                        <div class="task">

                            <div class="title">
                                <input type="checkbox"/>
                                <div class="task_title">Titulo tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Titulo tarefa</div>
                            </div>
                            <div class="actions">
                                Editar - Excluir
                            </div>

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

</body>
</html>