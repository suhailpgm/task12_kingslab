<!DOCTYPE html >
<html  ng-app = 'listData'>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="x-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

<!-- for adding angular js -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  </head>
  <body>
    
      <div ng-controller = "showData">
         
         
        <table class="table table-striped w-25">
        last entered data 
        <tr>
              <th>ID</th>
              <th>Name</th>
          </tr>
          
          <!-- shows the last endered data  -->
           <td>{{ names[names.length-1].ID }}</td>
              <td>{{ names[names.length-1].listitem }}</td>
            
           </tr>
        </table>
     </td>
  </tr>


    
    </div>
    <script src="app/controllers/controller.js"></script>
  </body>
</html>
