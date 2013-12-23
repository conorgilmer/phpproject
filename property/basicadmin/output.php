<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
   <script src="library/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
   var url = 'district.php';
      $.getJSON(url, function(data) {
          $.each(data, function(index, data) {
           $('#tablebody').append('<tr>');
       $('#tablebody').append('<td>'+data.property_addr1+'</td>');
       $('#tablebody').append('<td>'+data.property_addr2+'</td>');
       $('#tablebody').append('</tr>');
    });
 
   });
                    });
                 });
</script>
</head>
<body>
<p>
testing ajax and json</p>
<table class="table table-striped">
  <caption>Properties.</caption>
  <thead>
   <tr>
    <th>Addr 1</th>
    <th>Addr 2</th>
   </tr>
  </thead>
  <tbody id="tablebody">
  </tbody>
 </table>
</body>
</html>
