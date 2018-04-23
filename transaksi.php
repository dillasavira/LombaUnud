<?php 
    require_once("config.php");
    if (!isset($_SESSION)) {
        session_start();
    }
?>
 
<?php include'menu.php';?>
<td width="45%"><p>Keranjang Belanja</p>
      <hr />
      <?php require("keranjang_belanja.php"); ?></td>
<div id = "s-results">
  <!-- Search results here! -->
</div>

<script type = "text/javascript">
$(document).ready(function(){
  $('#s-results').load('search.php').show();
  
  
  $('#search-btn').click(function(){
    showValues();
  });
  
  $(function() {
    $('form').bind('submit',function(){
      showValues(); 
      return false; 
    });
  });
    
  function showValues() {
    $('#s-results').html('<img src="../images/loader.gif" />');  
    
    $.post('search.php', { name: form.name.value },
    
    function(result){
      $('#s-results').html(result).show();
    });
  }
    
});
</script>
<p>&nbsp;</p>
</body>
</html>