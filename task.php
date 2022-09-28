<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <main>
     
        <div class="row">
          
            
           
                <form id="inputListForm" class="changeForm">
                  <input id="task" class="form-control" placeholder="Task" />
                <a
                  class="btnEdit"
                  id="updateTask"
                  role="button"
                  hidden
                  onclick="return updateTask()"
                  >+ Update Task</a
                >
                <a
                  class="btnSubmit"
                  id="addTask"
                  role="button"
                  onclick="return addTask()"
                  >+ Add Task</a
                >
              
              <div>
                <div class="uncomplete">
                
                  <h4>Uncompleted List</h4>
                  <hr />
                
                </div>
                <ul id="listTodo" class="list-group"></ul>
              </div>
              <div class="uncomplete">
                <h4>Completed List</h4>
                <hr />
                <ul id="completedTodo" class="list-group"></ul>
              </div>
            </div>
         
        </form>
      </div>

     
    </main>

    <script src="./task.js"></script>
  </body>
</html>
